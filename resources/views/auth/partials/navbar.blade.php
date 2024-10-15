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
            </ul>
        </div>
    </div>
</nav>