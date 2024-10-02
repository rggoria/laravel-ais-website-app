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

    <div class="table-responsive">
        <table class="table table-striped mt-3">
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
                        <td>
                            <img src="https://via.placeholder.com/50" alt="{{ $item['title'] }}" class="img-fluid" style="max-width: 50px; max-height: 50px; margin-right: 10px;">
                            {{ $item['title'] }}
                        </td>
                        <td>${{ number_format($item['price'], 2) }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>S${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit">Remove</button>
                            </form>
                        </td>
                    </tr>
                    @php $totalPrice += $item['price'] * $item['quantity']; @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row mt-4">
        <div class="col-lg-4 offset-lg-8">
            <div class="border p-3 rounded bg-light">
                <h5 class="fw-bold">Checkout</h5>
                <div class="d-flex justify-content-between">
                    <span>Total:</span>
                    <span>S${{ number_format($totalPrice, 2) }}</span>
                </div>
                <button class="btn btn-primary w-100 mt-3">Proceed to Checkout</button>
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