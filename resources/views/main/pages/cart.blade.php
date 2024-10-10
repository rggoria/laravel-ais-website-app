@extends('main.layouts.app')

@section('title', 'Shopping Cart - AIS')

@section('content')
<section class="container my-5">
    <h1 class="fw-bolder text-center mb-4">Shopping Cart</h1>

    @if(session('cart') && count(session('cart')) > 0)
    <div class="row">
        <!-- Cart Table Section -->
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
                                    <img src="https://via.placeholder.com/50" alt="{{ $item['name'] }}" class="img-fluid me-2" style="max-width: 50px; max-height: 50px;">
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

        <!-- Card Details Section -->
        <div class="col-lg-4">
            <div class="card bg-light shadow-sm mb-4">
                <div class="card-body">
                    <h3 class="card-title">Card Details</h3>
                    <p class="small mb-3">Cards Accepted:</p>
                    <div class="d-flex mb-4">
                        <a href="#!" class="text-secondary me-3"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                        <a href="#!" class="text-secondary me-3"><i class="fab fa-cc-visa fa-2x"></i></a>
                        <a href="#!" class="text-secondary me-3"><i class="fab fa-cc-amex fa-2x"></i></a>
                        <a href="#!" class="text-secondary"><i class="fab fa-cc-paypal fa-2x"></i></a>
                    </div>
                    <form>
                        <div class="form-group mb-3">
                            <label for="typeName">Cardholder's Name</label>
                            <input type="text" id="typeName" class="form-control form-control-sm" placeholder="John Doe" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="typeEmail">Cardholder's Email</label>
                            <input type="email" id="typeEmail" class="form-control form-control-sm" placeholder="john.doe@example.com" />
                        </div>
                        <div class="form-group mb-3">
                            <label for="typeNumber">Card Number</label>
                            <input type="text" id="typeNumber" class="form-control form-control-sm" placeholder="1234 5678 9012 3457" maxlength="19" />
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="typeExp">Expiration</label>
                                <input type="text" id="typeExp" class="form-control form-control-sm" placeholder="MM/YYYY" maxlength="7" />
                            </div>
                            <div class="col-md-6">
                                <label for="typeCvv">CVV</label>
                                <input type="password" id="typeCvv" class="form-control form-control-sm" placeholder="***" maxlength="3" />
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="h5">Total:</span>
                            <span class="h5">S${{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], session('cart'))), 2) }}</span>
                        </div>
                        <a href="{{ route('gateway') }}" class="btn btn-success btn-block w-100"><span class="ms-2">Make Payment <i class="fas fa-long-arrow-alt-right ms-2"></i></span></a>
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
