<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'AIS Gateway')</title>
    <meta name="description" content="At All Immigration Services, we specialize in simplifying Singapore's immigration and workforce processes for both individuals and businesses. With expertise in work pass applications, workforce planning, and immigration consultations, we provide tailored solutions to meet your unique needs.">
    <!-- Website Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/images/homepage/ais.ico') }}"/>
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- Preload Bootstrap CSS -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style">
    <!-- Minified Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/134c64fe1d.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="print" onload="this.media='all'"> --}}
    @yield('css')

    {{-- Critial CSS --}}
    <style>
        #btn-back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.6);
            border: none;
        }
    </style>
    @livewireStyles
</head>
<body>
    <!-- Navbar -->
    @include('partials.client-navbar')

    @yield('content')

    @include('components.scroll-to-top')

    <!-- Footer Section -->
    @include('components.footer')

    <!-- Deferred Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    {{-- <script src="{{ asset('js/index.js') }}"></script> --}}

    {{-- Critical JS --}}
    <script>
        $(document).ready(function () {
            let mybutton = $("#btn-back-to-top");
            $(window).scroll(function () {
                scrollFunction();
            });

            function scrollFunction() {
                if ($(window).scrollTop() > 20) {
                    mybutton.fadeIn();
                } else {
                    mybutton.fadeOut();
                }
            }
            mybutton.on("click", backToTop);

            function backToTop() {
                $('html, body').animate({ scrollTop: 0 }, 'fast');
            }
        });
    </script>
    @yield('scripts')
    @livewireScripts
</body>
</html>