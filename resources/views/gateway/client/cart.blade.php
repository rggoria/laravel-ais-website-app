@extends('layouts.client')

@section('title', 'Shopping Cart - AIS Gateway')

@section('css')
    {{-- Stripe --}}
    <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
<section class="container my-5">
    <h1 class="fw-bolder text-center mb-4">Shopping Cart</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('cart') && count(session('cart')) > 0)
    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-bordered text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Variant</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(session('cart') as $item)
                            <tr>
                                <td class="d-flex">
                                    {{ $item['name'] }}
                                </td>
                                <td>{{ $item['variant'] ?? 'Standard' }}</td>
                                <td>
                                    <div class="input-group input-group-sm">
                                        <button class="btn btn-outline-secondary decrease-quantity" data-id="{{ $item['cartKey'] }}">-</button>
                                        <input type="text" class="form-control text-center" value="{{ $item['quantity'] }}" readonly>
                                        <button class="btn btn-outline-secondary increase-quantity" data-id="{{ $item['cartKey'] }}">+</button>
                                    </div>
                                </td>
                                <td>S${{ number_format($item['price'], 2) }}</td>
                                <td>S${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                <td>
                                    <button class="btn btn-sm btn-danger remove-item" data-id="{{ $item['cartKey'] }}">Remove</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Payment Section -->
        <div class="col-lg-4">
            <div class="card bg-light shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="card-title">Card Details</h3>
                    <p class="small mb-3">Cards Accepted:</p>
                    <form action="{{ route('cart.process') }}" method="POST" id="payment-form">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="customer-name">Customer Name</label>
                            <input type="text" class="form-control" name="customer_name" id="customer-name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="card-number">Card Number</label>
                            <div id="card-number" class="form-control"></div>
                            <div id="card-errors" role="alert" class="text-danger mt-2"></div>
                        </div>
                        <div class="form-group">
                            <label for="card-expiry">Expiry Date</label>
                            <div id="card-expiry" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <div id="card-cvc" class="form-control"></div>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="h5">Total:</span>
                            <span class="h5">S${{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], session('cart'))), 2) }}</span>
                        </div>
                        <button type="submit" class="btn btn-success btn-block w-100">Make Payment <i class="fas fa-long-arrow-alt-right ms-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="alert alert-warning text-center" role="alert">
            Your cart is empty!
        </div>
    @endif
</section>
@endsection

@section('scripts')
<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();
    
    var style = {
        base: {
            color: '#32325d',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    var cardNumber = elements.create('cardNumber', {style: style});
    cardNumber.mount('#card-number');

    var cardExpiry = elements.create('cardExpiry', {style: style});
    cardExpiry.mount('#card-expiry');

    var cardCvc = elements.create('cardCvc', {style: style});
    cardCvc.mount('#card-cvc');

    cardNumber.on('change', function(event) {
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = event.error ? event.error.message : '';
    });

    document.getElementById('payment-form').addEventListener('submit', function(event) {
        event.preventDefault();
        stripe.createToken(cardNumber).then(function(result) {
            if (result.error) {
                document.getElementById('card-errors').textContent = result.error.message;
            } else {
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', result.token.id);
                this.appendChild(hiddenInput);
                this.submit();
            }
        }.bind(this));
    });

    $(document).ready(function() {
        // Increase quantity
        $('.increase-quantity').click(function() {
            let cartKey = $(this).data('id');
            updateCartItem(cartKey, 'increase');
        });

        // Decrease quantity
        $('.decrease-quantity').click(function() {
            let cartKey = $(this).data('id');
            updateCartItem(cartKey, 'decrease');
        });

        // Remove item
        $('.remove-item').click(function() {
            let cartKey = $(this).data('id');
            updateCartItem(cartKey, 'remove');
        });

        function updateCartItem(cartKey, action) {
            $.ajax({
                type: 'POST',
                url: '{{ route("cart.update") }}',
                data: {
                    cartKey: cartKey,
                    action: action,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    location.reload(); // Reload the page to reflect changes
                },
                error: function(xhr) {
                    Swal.fire({
                        title: 'Error!',
                        text: xhr.responseJSON.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }
    });
</script>
@endsection
