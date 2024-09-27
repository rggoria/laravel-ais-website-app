<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('asset/images/homepage/logo.png') }}" alt="Logo" width="50" height="44" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">About Us</a>
                </li>    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pricing
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Employment pass</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contact Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Consultation</a></li>
                        <li><a class="dropdown-item" href="#">Testimonials</a></li>
                        <li><a class="dropdown-item" href="#">Resources</a></li>
                        <li><a class="dropdown-item" href="#">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav d-flex gap-3">
                <li class="nav-item">
                    <a class="btn btn-outline-dark" href="#">+65 85288478</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark text-light" href="#">Order Now</a>
                </li>
            </ul>
        </div>        
    </div>
</nav>