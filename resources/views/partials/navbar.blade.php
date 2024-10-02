<style>
    .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }
    .mega-menu {
        position: static;
    }
    .mega-menu .dropdown-menu {
        background: none;
        border: none;
        width: 100%;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route("home") }}">
            <img src="{{ asset('asset/images/homepage/logo.png') }}" alt="Logo" width="50" height="44" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mt-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route("home") }}">Home Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route("services") }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pricing
                    </a>
                    <div class="dropdown-menu border-0 p-0 m-0">
                        <div class="container-fluid py-4 shadow-sm bg-white mb-3">
                            <div class="container">
                                <div class="row rounded-0 m-0">
                                    <div class="col-lg-3">
                                        <ul class="list-unstyled">
                                            <li class="nav-item">
                                                <a href="{{ route('ep-application') }}" class="nav-link d-flex align-items-start">
                                                    <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                    <span class="fw-bold">
                                                        Employment pass
                                                        <br>
                                                        <span class="text-muted">
                                                            S$999 - Best selling item
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-unstyled">
                                            <li class="nav-item">
                                                <a href="{{ route('dp-application') }}" class="nav-link d-flex align-items-start">
                                                    <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                    <span class="fw-bold">
                                                        Dependent pass
                                                        <br>
                                                        <span class="text-muted">
                                                            S$799 - Best selling item
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-unstyled">
                                            <li class="nav-item">
                                                <a href="{{ route('ltvp-application') }}" class="nav-link d-flex align-items-start">
                                                    <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                    <span class="fw-bold">
                                                        Long Term Visit pass
                                                        <br>
                                                        <span class="text-muted">
                                                            S$799 - Best selling item
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-unstyled">
                                            <li class="nav-item">
                                                <a href="{{ route("op-application") }}" class="nav-link d-flex align-items-start">
                                                    <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                    <span class="fw-bold">
                                                        OnePass
                                                        <br>
                                                        <span class="text-muted">
                                                            S$1,999 - Best selling item
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contact Us
                    </a>
                    <div class="dropdown-menu border-0 p-0 m-0">
                        <div class="container-fluid py-4 shadow-sm bg-white mb-3">
                            <div class="container">
                                <div class="row rounded-0 m-0">
                                    <div class="col-lg-3">
                                        <ul class="list-unstyled">
                                            <li class="nav-item">
                                                <a href="{{ route("consultation") }}" class="nav-link d-flex align-items-start">
                                                    <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                    <span class="fw-bold">
                                                        Consultation
                                                        <br>
                                                        <span class="text-muted">
                                                            Get personalized immigration advice today.
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-unstyled">
                                            <li class="nav-item">
                                                <a href="{{ route('testimonials') }}" class="nav-link d-flex align-items-start">
                                                    <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                    <span class="fw-bold">
                                                        Testimonials
                                                        <br>
                                                        <span class="text-muted">
                                                            Hear from out satisfied clients.
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-unstyled">
                                            <li class="nav-item">
                                                <a href="#!" class="nav-link d-flex align-items-start">
                                                    <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                    <span class="fw-bold">
                                                        Resources
                                                        <br>
                                                        <span class="text-muted">
                                                            Access helpful immigration guides and tips
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <ul class="list-unstyled">
                                            <li class="nav-item">
                                                <a href="https://wa.me/message/W7WPF3DBC6LFM1" class="nav-link d-flex align-items-start">
                                                    <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                    <span class="fw-bold">
                                                        Contact Us
                                                        <br>
                                                        <span class="text-muted">
                                                            Reach out for any inquiries or support.
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav d-flex gap-3 mt-2">
                <li class="nav-item">
                    <a class="btn btn-outline-dark" href="https://wa.me/message/W7WPF3DBC6LFM1">
                        <i class="fab fa-whatsapp"></i>
                        +65 85288478
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark text-light" href="{{ route("ep-application") }}">Order Now</a>
                </li>
                {{-- <li class="nav-item dropdown position-relative">
                    <a class="nav-link" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-shopping-cart me-2"></i>
                        Cart
                        <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle">3</span>
                    </a>
                    <div class="row dropdown-menu dropdown-menu-end">
                        <div class="col-sm-5">
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                        <div class="col-sm-2">
                            Hi
                        </div>
                        <div class="col-sm-7">
                            Hello
                        </div>
                    </div>
                </li>     --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-shopping-cart me-2"></i>
                        Cart
                        <span class="badge bg-danger rounded-pill align-content-center">
                            {{ session()->has('cart') ? count(session('cart')) : 0 }}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="navbarDropdown">
                        @if(session()->has('cart') && count(session('cart')) > 0)
                            <table class="table table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (session('cart') as $item)
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
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('cart.index') }}">View Cart</a>
                        @else
                            <a class="dropdown-item" href="#">Your cart is empty</a>
                        @endif
                    </div>
                </li>          
            </ul>
        </div>
    </div>
</nav>