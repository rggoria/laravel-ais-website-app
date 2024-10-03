@extends('layouts.master')

@section('title')
    My Shopping Cart - AIS
@endsection

@section('content')

{{-- About Us Section --}}
<section class="container my-5">
    <h1 class="mt-5">Shopping Cart</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
</section>

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
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $totalPrice = 0; @endphp
                                            @foreach ($cart as $id => $item)
                                                <tr>
                                                    <td class="d-flex">
                                                        <img src="https://via.placeholder.com/50" alt="{{ $item['title'] }}" class="img-fluid" style="max-width: 50px; max-height: 50px; margin-right: 10px;">
                                                        {{ $item['title'] }}
                                                    </td>
                                                    <td>${{ number_format($item['price'], 2) }}</td>
                                                    <td>{{ $item['quantity'] }}</td>
                                                    <td>S${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                                    <td>
                                                        <form action="{{ route('cart.remove', $id) }}" method="POST" style="margin-left: 10px;">
                                                            @csrf
                                                            <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @php $totalPrice += $item['price'] * $item['quantity']; @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
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
                                                <p class="mb-2">Subtotal</p>
                                                <p class="mb-2">${{ number_format($totalPrice, 2) }}</p>
                                            </div>
                                            <a href="{{ route('checkout') }}" class="btn btn-light btn-block w-100 my-3">
                                                <div class="d-flex justify-content-between">
                                                    <span>${{ number_format($totalPrice) }}</span>
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
        console.log("users view");
    </script>
@endsection