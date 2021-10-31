<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5d4118">
    <meta name="msapplication-TileColor" content="#a1d364">
    <meta name="theme-color" content="#a1d364">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7.0.2/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.5/dist/fancybox.min.css">
    @stack('before_styles')
    <link rel="stylesheet" href="{{ mix('css/app.css', '../public') }}">
    @stack('after_styles')
    <style>
        :root {
            --swiper-theme-color: #93ba5a;
        }
    </style>

    <title>@yield('seo_title') | @yield('site_title', 'DUMA - Material Bangunan Masa Depan')</title>

    <script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js" defer></script>
</head>
<body class="d-flex flex-column h-100" @stack('body_attributes')>

<div class="flex-shrink-0">
    @include('includes.header')
    <main id="site_main">
        @yield('content')
    </main>
</div>
@include('includes.footer')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@7.0.2/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.5/dist/fancybox.umd.min.js"></script>
@stack('before_scripts')
@stack('after_scripts')

<script>
    var carousel = document.querySelectorAll('[data-swiper]');

    carousel.forEach(function(e) {
        new Swiper(e, {
            grabcursor: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
                clickable: true
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    });
</script>
</body>
</html>
