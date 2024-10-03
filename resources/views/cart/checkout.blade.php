@extends('layouts.master')

@section('title')
    My Shopping Cart - AIS
@endsection

@section('content')

{{-- About Us Section --}}
<section class="container my-5">
    <h1 class="mt-5">Checkout</h1>
    
    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="cardNumber" class="form-label">Credit Card Number</label>
            <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
        </div>
        <div class="mb-3">
            <label for="expiryDate" class="form-label">Expiry Date (MM/YY)</label>
            <input type="text" class="form-control" id="expiryDate" name="expiryDate" required>
        </div>
        <div class="mb-3">
            <label for="cvv" class="form-label">CVV</label>
            <input type="text" class="form-control" id="cvv" name="cvv" required>
        </div>
        <button type="submit" class="btn btn-primary">Complete Purchase</button>
    </form>
</section>

@endsection

@section('scripts')
    <script>
        console.log("users view");
    </script>
@endsection