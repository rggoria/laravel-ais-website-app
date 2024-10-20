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
<nav class="sticky-top">
    <!-- First Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('gateway') }}">
                <img src="{{ asset('asset/images/homepage/ais_logo.jpg') }}" alt="Logo" width="75" height="50" class="d-inline-block align-text-top me-2">
                <span>AIS Gateway</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto d-flex gap-3 mt-2">
                    <li class="nav-item">
                        <a class="btn btn-outline-dark" href="https://wa.me/message/W7WPF3DBC6LFM1">
                            <i class="fab fa-whatsapp"></i>
                            +65 85288478
                        </a>
                    </li>
                    @livewire('cart-counter')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i>
                            {{ Auth::user()->email }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Second Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarLinks">
                <ul class="navbar-nav">                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pricing') }}">
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            New Order
                        </a>
                        <div class="dropdown-menu border-0 p-0 m-0">
                            <div class="container-fluid py-4 shadow-sm bg-white mb-3">
                                <div class="container">
                                    <div class="row rounded-0 m-0">
                                        @foreach ($products as $product)
                                            <div class="col-lg-3">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item">
                                                        <a href="{{ route('new-order', ['name' => Str::slug($product->name)]) }}" class="nav-link d-flex align-items-start">
                                                            <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                            <span class="fw-bold">
                                                                {{ $product->name }}
                                                                <br>
                                                                <span class="text-muted">
                                                                    S${{ $product->prices[0]->price }}
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gateway') }}">Order Status</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</nav>