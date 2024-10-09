<!-- First Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('gateway') }}">
            <img src="{{ asset('asset/images/homepage/ais_logo.jpg') }}" alt="Logo" width="75" height="50" class="d-inline-block align-text-top me-2">
            <span>AIS Gateway</span>
        </a>
        @if (Auth::check())
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
        @endif
    </div>
</nav>

<!-- Second Navbar -->
@if (Auth::check())
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarLinks">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('new-order') }}">New Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gateway') }}">Order Status</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endif