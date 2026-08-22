<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Sambhavam - Learn. Innovate. Lead. Create Impact.')">

    <!-- Site Title -->
    <title>@yield('title', 'Sambhavam - Learn. Innovate. Lead. Create Impact.')</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/venobox.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/keyframe-animation.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}?v={{ filemtime(public_path('css/main.css')) }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    {{-- Page-specific extra CSS (e.g. a page that only needs a small tweak) --}}
    @stack('styles')
</head>

<body>

    @include('partials.header')

    {{-- Every page's unique content goes here --}}
    @yield('content')

    @include('partials.footer')

    <!-- JS here -->
    <script src="{{ asset('js/vendor/jquary-3.6.0.min.js') }} "></script>
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap-bundle.js') }} "></script>
    <script src="{{ asset('js/vendor/jquery.isotope.js') }} "></script>
    <script src="{{ asset('js/vendor/waypoints.min.js') }} "></script>
    <script src="{{ asset('js/vendor/moment.min.js') }} "></script>
    <script src="{{ asset('js/vendor/daterangepicker.min.js') }} "></script>
    <script src="{{ asset('js/vendor/venobox.min.js') }} "></script>
    <script src="{{ asset('js/vendor/odometer.min.js') }} "></script>
    <script src="{{ asset('js/vendor/countdown.js') }} "></script>
    <script src="{{ asset('js/vendor/meanmenu.js') }} "></script>
    <script src="{{ asset('js/vendor/smooth-scroll.js') }} "></script>
    <script src="{{ asset('js/vendor/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.carouselTicker.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/vendor/nice-select.js') }}"></script>
    <script src="{{ asset('js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    {{-- Page-specific extra JS (e.g. the hero swiper init only home.blade.php needs) --}}
    @stack('scripts')

</body>
</html>
