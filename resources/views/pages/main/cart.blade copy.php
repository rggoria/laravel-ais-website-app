@extends('layouts.app')

@section('title', 'Shopping Cart - AIS')

@section('content')
<section class="container my-5">
    <h1 class="fw-bolder text-center">Shopping Cart</h1>
    
    @if(session('cart') && count(session('cart')) > 0)
        <div class="table-responsive my-5">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Product Name</th>
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
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['variant'] }}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary decrease-quantity" data-id="{{ $item['cartKey'] }}">-</button>
                                <span class="mx-2">{{ $item['quantity'] }}</span>
                                <button class="btn btn-sm btn-outline-secondary increase-quantity" data-id="{{ $item['cartKey'] }}">+</button>
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
        <div class="text-end">
            <h3>Total: S${{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], session('cart'))), 2) }}</h3>
        </div>
        <div class="text-center my-3">
            <a href="" class="btn btn-success">Proceed to Checkout</a>
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
