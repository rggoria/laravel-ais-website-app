<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <meta name="description" content="Our Multi-award winning background checks platform ScreenGlobal will help you mitigate risk due to wrongful hires."> --}}
    <!-- Website Icon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('images/homepage/avvanz.ico') }}"/> --}}
    <!-- Preload Bootstrap CSS -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/134c64fe1d.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="print" onload="this.media='all'"> --}}
    @yield('css')
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')
    @yield('content')

    <!-- Footer Section -->
    @include('partials.footer')

    <!-- Deferred Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    {{-- <script src="{{ asset('js/index.js') }}"></script> --}}
    @yield('scripts')
</body>
</html>