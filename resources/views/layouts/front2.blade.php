
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Title Section --}}
        <title>Generusbatuaji</title>

        {{-- Favicon --}}
        <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        {{-- Global Css --}}
        @if(parse_url(url('/'), PHP_URL_SCHEME) == 'HTTPS')
                    
            <!-- Vendor CSS Files -->
            <link href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
            <link href="{{ secure_asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
            <link href="{{ secure_asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
            <link href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

            <!-- Template Main CSS File -->
            <link href="{{ secure_asset('assets/css/main.css') }}" rel="stylesheet">
            <link href="{{ secure_asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />

            <!-- Main CSS Calendar -->
            <link rel="stylesheet" href="{{ secure_asset('assets/css/evo-calendar.midnight-blue.min.css') }}">
            <link rel="stylesheet" href="{{ secure_asset('assets/css/evo-calendar.min.css') }}">
            <link rel="stylesheet" href="{{ secure_asset('assets/css/calendar.css') }}">

        @else
            <!-- Vendor CSS Files -->
            <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

            <!-- Template Main CSS File -->
            <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
            <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />

            <!-- Main CSS Calendar -->
            <link rel="stylesheet" href="{{ asset('assets/css/evo-calendar.midnight-blue.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/evo-calendar.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">

        @endif

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <style>
            .symbol {
                    display: inline-block;
                    -ms-flex-negative: 0;
                    flex-shrink: 0;
                    position: relative;
                    border-radius: 0.42rem;
                }
        </style>
            
    </head>

    <body>

        @include('layouts.base.header2')

        @yield('content')

        @include('layouts.base.footer2')
        
        {{-- Global JS scripts --}}
        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        {{-- Includable JS --}}
        @yield('scripts')

       
    </body>
</html>

