@extends('layouts.master')

@section('title')
    My Shopping Cart - AIS
@endsection

@section('content')

{{-- About Us Section --}}
<section class="h-100">
    <div class="container py-5 h-100">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <h1 class="mb-1">Shopping cart</h1>
                                        <p class="mb-0">You have {{ count($cart) }} items in your cart</p>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    @php $totalPrice = 0; @endphp
                                    @foreach ($cart as $id => $item)
                                        <div class="card rounded-3 mb-4 cart-item" data-price="{{ $item['price'] }}">
                                            <div class="card-body p-4">
                                                <div class="row d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="https://via.placeholder.com/50" alt="{{ $item['title'] }}" class="img-fluid rounded-3">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <p class="lead fw-normal mb-2">{{ $item['title'] }}</p>
                                                        <p><span class="text-muted">Price: </span>${{ number_format($item['price'], 2) }}</p>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                        <button class="btn btn-link px-2 quantity-btn" data-action="decrease">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                        <input min="1" name="quantity[{{ $id }}]" value="{{ $item['quantity'] }}" type="text" class="form-control form-control-sm quantity-input" readonly disabled />
                                                        <button class="btn btn-link px-2 quantity-btn" data-action="increase">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 item-total">
                                                        <h5 class="mb-0">${{ number_format($item['price'] * $item['quantity'], 2) }}</h5>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <form action="{{ route('cart.remove', $id) }}" method="POST" style="margin-left: 10px;">
                                                            @csrf
                                                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php $totalPrice += $item['price'] * $item['quantity']; @endphp
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-secondary text-white rounded-3 mb-4">
                                    <div class="card-body">
                                        <h3 class="mb-1">Card details</h3>
                                        <p class="small mb-2">Select Card Type</p>
                                        <div class="mb-4">
                                            <a href="#!" class="text-white"><i class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                                            <a href="#!" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                                            <a href="#!" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                                            <a href="#!" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                        </div>
                                        <form class="mt-4">
                                            <div class="form-outline form-white mb-4">
                                                <input type="email" id="typeEmail" class="form-control form-control-lg" placeholder="Cardholder's Email" />
                                                <label class="form-label" for="typeEmail">Cardholder's Email</label>
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeText" class="form-control form-control-lg" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                                <label class="form-label" for="typeText">Card Number</label>
                                            </div>

                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" minlength="7" maxlength="7" />
                                                        <label class="form-label" for="typeExp">Expiration</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-outline form-white">
                                                        <input type="password" id="typeCvv" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3" />
                                                        <label class="form-label" for="typeCvv">CVV</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                            <div class="d-flex justify-content-between">
                                                <p class="mb-2">Total</p>
                                                <p class="mb-2 total-price">${{ number_format($totalPrice, 2) }}</p>
                                            </div>
                                            <a href="{{ route('checkout') }}" class="btn btn-light btn-block w-100 my-3">
                                                <div class="d-flex justify-content-between">
                                                    <span class="total-price">${{ number_format($totalPrice, 2) }}</span>
                                                    <span class="ms-2">Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function updateTotal() {
                let totalPrice = 0;
                $('.cart-item').each(function() {
                    const price = parseFloat($(this).data('price'));
                    const quantity = parseInt($(this).find('.quantity-input').val());
                    const itemTotal = price * quantity;
                    $(this).find('.item-total').text(`$${itemTotal.toFixed(2)}`);
                    totalPrice += itemTotal;
                });
                $('.total-price').text(`$${totalPrice.toFixed(2)}`);
            }

            $('.quantity-btn').on('click', function() {
                const action = $(this).data('action');
                const input = $(this).siblings('.quantity-input');
                let quantity = parseInt(input.val());

                if (action === 'increase') {
                    quantity++;
                } else if (action === 'decrease' && quantity > 1) {  // Prevent quantity from going below 1
                    quantity--;
                }
                input.val(quantity);
                updateTotal();
            });

            // Initialize total on page load
            updateTotal();
        });
    </script>
@endsection