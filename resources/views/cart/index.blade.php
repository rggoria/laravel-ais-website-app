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
                                @php $totalPrice = 0; @endphp
                                @foreach ($cart as $id => $item)
                                    <div class="card rounded-3 mb-2 cart-item" data-price="{{ $item['price'] }}">
                                        <div class="card-body p-2">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <img src="https://via.placeholder.com/40" alt="{{ $item['title'] }}" class="img-fluid rounded-3">
                                                </div>
                                                <div class="col">
                                                    <p class="lead fw-normal mb-1">{{ $item['title'] }}</p>
                                                    <p class="mb-0 text-muted">Price: S${{ number_format($item['price'], 2) }}</p>
                                                </div>
                                                <div class="col-auto d-flex align-items-center">
                                                    <button class="btn btn-link p-0 quantity-btn" data-action="decrease" style="font-size: 0.75rem;">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <input min="1" name="quantity[{{ $id }}]" value="{{ $item['quantity'] }}" type="text" class="form-control form-control-sm quantity-input text-center" style="width: 40px; padding: 0.2rem;" readonly />
                                                    <button class="btn btn-link p-0 quantity-btn" data-action="increase" style="font-size: 0.75rem;">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="col-auto item-total">
                                                    <h5 class="mb-0">S${{ number_format($item['price'] * $item['quantity'], 2) }}</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm" type="submit" title="Remove"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php $totalPrice += $item['price'] * $item['quantity']; @endphp
                                @endforeach
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
                                                <input type="name" id="typeName" class="form-control form-control-lg" placeholder="Cardholder's Name" />
                                                <label class="form-label" for="typeName">Cardholder's Email</label>
                                            </div>
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
                                                <p class="mb-2 total-price">S${{ number_format($totalPrice, 2) }}</p>
                                            </div>
                                            <a href="{{ route('checkout') }}" class="btn btn-light btn-block w-100 my-3">
                                                <div class="d-flex justify-content-between">
                                                    <span class="total-price">S${{ number_format($totalPrice, 2) }}</span>
                                                    <span class="ms-2">Make Payment <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
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
    $('.quantity-btn').on('click', function(event) {
        event.preventDefault(); // Prevent the default action
        const action = $(this).data('action');
        const input = $(this).siblings('.quantity-input');
        let quantity = parseInt(input.val());
        const cartItem = $(this).closest('.cart-item');
        const itemPrice = parseFloat(cartItem.data('price'));

        if (action === 'increase') {
            quantity++;
        } else if (action === 'decrease' && quantity > 1) {
            quantity--;
        }

        input.val(quantity);

        // Calculate new total for this item
        const itemTotal = (itemPrice * quantity).toFixed(2);
        cartItem.find('.item-total h5').text(`S$${parseFloat(itemTotal).toLocaleString(undefined, { minimumFractionDigits: 2 })}`); // Update h5 element

        // Update the overall total price
        let totalPrice = 0;
        $('.cart-item').each(function() {
            const itemTotalText = $(this).find('.item-total h5').text();
            const itemTotalValue = parseFloat(itemTotalText.replace('S$', '').replace(/,/g, ''));
            totalPrice += itemTotalValue;
        });
        
        // Update the displayed total price
        $('.total-price').text(`S$${totalPrice.toLocaleString(undefined, { minimumFractionDigits: 2 })}`);

        // Send an AJAX request to update the session
        $.ajax({
            url: "{{ route('cart.update') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",  // CSRF token for security
                id: input.attr('name').match(/\d+:\w+/)[0], // Your unique key
                quantity: quantity
            },
            success: function(response) {
                // Update the navbar dropdown with new HTML
                $('.dropdown-menu.dropdown-menu-end').html(response.navbarHtml);
            },
            error: function(xhr) {
                console.error('Error updating cart:', xhr.responseText);
            }
        });
    });
});

    </script>
@endsection