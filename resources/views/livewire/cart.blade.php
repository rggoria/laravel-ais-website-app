<div>
    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-shopping-cart me-2"></i>
        Cart
        <span class="badge bg-danger rounded-pill align-content-center">
            {{ count($cart) }}
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="navbarDropdown">
        @if(count($cart) > 0)
            <div class="table-responsive">
                <table class="table table-sm mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $item)
                            <tr>
                                <td class="d-flex">
                                    <img src="https://via.placeholder.com/50" alt="{{ $item['title'] }}" class="img-fluid" style="max-width: 50px; max-height: 50px; margin-right: 10px;">
                                    {{ $item['title'] }}
                                </td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>S${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('cart.index') }}">View Cart</a>
        @else
            <a class="dropdown-item" href="#">Your cart is empty</a>
        @endif
    </div>
</div>
