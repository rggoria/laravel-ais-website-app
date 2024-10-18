<div class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-cart-shopping me-2"></i>
        Cart ({{ $cartCount }})
    </a>
    <ul class="dropdown-menu dropdown-menu-end p-3" style="min-width: 300px;">
        @if($cartCount > 0)
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Variant</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['variant'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>{{ $item['price'] }}</td>
                        </tr>
                    @endforeach
                </tbody>                
            </table>
            <div class="text-center mt-2">
                <a href="{{ route('cart') }}" class="btn btn-sm btn-primary">View Cart</a>
            </div>
        @else
            <p class="text-center">Your cart is empty</p>
        @endif
    </ul>
</div>
