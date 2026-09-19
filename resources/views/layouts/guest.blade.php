{{-- SAVE AS: resources/views/layouts/guest.blade.php (overwrite entirely, don't @extends anything here) --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sambhavam - Learn. Innovate. Lead. Create Impact.</title>
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
        

        <!-- Breeze / Tailwind assets, needed for the login/register form styling -->
      

        <style>
            .guest-auth-wrap {
                min-height: 60vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 60px 20px;
                background: #f7f9fc;
            }

            .bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(252 111 10);
            }

            .text-gray-600 {
                color: rgb(13 75 155);
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">

        @include('partials.header')

        <div class="guest-auth-wrap">
            <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        @include('partials.footer')

        <!-- Your site's existing JS (same ones your public pages load) -->
        <script src="{{ asset('js/vendor/jquary-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap-bundle.js') }}"></script>
        <script src="{{ asset('js/vendor/swiper.min.js') }}"></script>
        <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>