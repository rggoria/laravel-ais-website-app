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
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route("home") }}">
            <img src="{{ asset('asset/images/homepage/ais_logo.jpg') }}" alt="Logo" width="75" height="50" class="d-inline-block align-text-top">
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
                                    @foreach ($products as $product)
                                        <div class="col-lg-3">
                                            <ul class="list-unstyled">
                                                <li class="nav-item">
                                                    <a href="{{ route('product', ['name' => Str::slug($product->name)]) }}" class="nav-link d-flex align-items-start">
                                                        <i class="fas fa-cube me-2 fs-6 mt-1 align-self-start"></i>
                                                        <span class="fw-bold">
                                                            {{ $product->name }}
                                                            <br>
                                                            <span class="text-muted">
                                                                S${{ number_format($product->prices[0]->price, 2) }}
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
                    <a class="btn btn-dark text-light" href="{{ route('gateway') }}">Order Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>