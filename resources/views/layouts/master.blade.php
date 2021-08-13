<!doctype html>
<html lang="en">
<head class="">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    @stack('before_styles')
    <link rel="stylesheet" href="{{ mix('css/app.css', '../public') }}">
    @stack('after_styles')

    <title>@yield('seo_title') | @yield('site_title', 'DUMA - Material Bangunan Masa Depan')</title>
</head>
<body>
<header class="sticky-top">
    <nav class="top-bar">
        <div class="container">
            <div class="row">
                {{--                <div class="col-12 col-lg navbar-expand d-none d-lg-block">--}}
                {{--                    <ul class="navbar-nav language-switcher">--}}
                {{--                        <li class="nav-item active">--}}
                {{--                            <a class="nav-link rounded-left" href="#">ID</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="nav-item">--}}
                {{--                            <a class="nav-link rounded-right" href="#">EN</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-auto">--}}
                {{--                    <div class="input-group search-field">--}}
                {{--                        <input type="text" class="form-control rounded-0 order-10" placeholder="ketuk untuk mencari"--}}
                {{--                               aria-label="Search">--}}
                {{--                        <div class="input-group-prepend order-1">--}}
                {{--                                                <span class="input-group-text">--}}
                {{--                                                    <i class="fas fa-search fa-fw"></i>--}}
                {{--                                                </span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-12 col-lg navbar-expand">
                    <ul class="navbar-nav justify-content-lg-end justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('calculator.index') }}">Kalkulator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact.index') }}">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg shadow-sm" id="main_nav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid" width="130">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-fw fa-lg"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 justify-content-end text-center">
                    <li class="nav-item {{ request()->routeIs(['why_duma']) ? 'active' : '' }} my-3 my-md-0">
                        <a class="nav-link" href="{{ route('why_duma') }}">Mengapa Duma?</a>
                    </li>
                    <li class="nav-item mb-3 mb-md-0 dropdown {{ request()->routeIs(['product.*']) ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle hover-show" href="#" id="product_projects_nav_dropdown"
                           role="button"
                           aria-haspopup="true" aria-expanded="false">
                            Produk & Proyek
                        </a>
                        <div class="dropdown-menu rounded-0 mt-0 p-0"
                             aria-labelledby="product_projects_nav_dropdown">
                            <div class="dropdown-item p-0 dropright">
                                <a href="#" class="dropdown-toggle hover-show nav-link" aria-haspopup="true"
                                   id="product_nav_dropdown" aria-expanded="false">
                                    Produk
                                </a>
                                <div class="dropdown-menu keep-open rounded-0 ml-0 p-0"
                                     aria-labelledby="product_nav_dropdown">
                                    <a class="dropdown-item nav-link {{ request()->routeIs(['product.duma_panel']) ? 'active' : '' }}"
                                       href="{{ route('product.duma_panel') }}">
                                        Duma Panel
                                    </a>
                                    <a class="dropdown-item nav-link {{ request()->routeIs(['product.duma_door']) ? 'active' : '' }}"
                                       href="{{ route('product.duma_door') }}">
                                        Duma Door
                                    </a>
                                    <a class="dropdown-item nav-link {{ request()->routeIs(['product.duma_deck']) ? 'active' : '' }}"
                                       href="{{ route('product.duma_deck') }}">
                                        Duma Deck
                                    </a>
                                    <a class="dropdown-item nav-link {{ request()->routeIs(['product.duma_lisplank']) ? 'active' : '' }}"
                                       href="{{ route('product.duma_lisplank') }}">
                                        Duma Lisplank
                                    </a>
                                </div>
                            </div>
                            <a class="dropdown-item nav-link" href="{{ route('projects.index') }}">
                                Proyek
                            </a>
                        </div>
                    </li>
                    <li class="nav-item mb-3 mb-md-0 {{ request()->routeIs(['pricelist']) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('pricelist') }}">Daftar Harga & Dokumen Lain</a>
                    </li>
                    <li class="nav-item mb-3 mb-md-0 {{ request()->routeIs(['posts.*']) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('posts.index') }}">Berita & Acara</a>
                    </li>
                    <li class="nav-item mb-3 mb-md-0 {{ request()->routeIs(['distributor']) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('distributor') }}">Distributor</a>
                    </li>
                    <li class="nav-item mb-3 mb-md-0">
                        <a class="nav-link" href="#">Tentang Duma</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer class="site-footer pt-5 mt-5">
    <div class="sitemap pt-5 container--full-hd"
         style="background: url({{ asset('images/bg-footer.png') }}) no-repeat top/cover;margin:auto;">
        <div class="container pt-5">
            <div class="row justify-content-between pt-5 pb-3">
                <div class="col-md">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid mb-3" width="130">
                    <address class="d-flex">
                        <i class="fas fa-map-marker-alt fa-lg mt-1 me-2"></i>
                        Jl. Raya Pilang KM 8. No.88
                        Kec. Wonoayu, Sidoarjo, 61273
                        Indonesia.
                    </address>
                </div>
                <div class="col-md-auto separator d-none d-md-block"></div>
                <div class="col-md">
                    <strong>
                        Sitemap
                    </strong>
                    <ul class="list-unstyled mt-3">
                        <li>
                            <a href="{{ route('home') }}">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('why_duma') }}">
                                Mengapa DUMA?
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Produk
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('projects.index') }}">
                                Portfolio Proyek
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pricelist') }}">
                                Pricelist & Dokumen Lain
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Distributor
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}">
                                Hubungi Kami
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('posts.index') }}">
                                Berita & Acara
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Perusahaan Kami
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-auto separator d-none d-md-block"></div>
                <div class="col-md">
                    <strong>
                        Contact Info
                    </strong>
                    <address class="mt-3 d-flex align-items-center">
                        <i class="fas fa-phone fa-lg me-2"></i>
                        <div>
                            <a href="tel:62318855588">(031) 8855588</a><br>
                            <a href="tel:62318855799">(031) 8855799</a>
                        </div>
                    </address>
                    <address class="d-flex align-items-center">
                        <i class="fas fa-envelope fa-lg me-2"></i>
                        <a href="mailto:marketing@duma.co.id" target="_blank">
                            marketing@duma.co.id
                        </a>
                    </address>
                    <address class="d-flex align-items-center">
                        <i class="fas fa-globe fa-lg me-2"></i>
                        <a href="https://www.sumberdjajaperkasa.com" target="_blank">
                            www.sumberdjajaperkasa.com
                        </a>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center py-3">
        Copyright &copy; {{ date('Y') }} DUMA. All Right Reserved.
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@stack('before_scripts')
@stack('after_scripts')

<script>
    $('.dropdown-toggle').click(function() {
        $(this).toggleClass('show').next().toggleClass('show');
    });
    $('.dropdown-menu.keep-open').click(function(e) {
        e.stopPropagation();
    });
    $('[data-slick]').slick();
</script>
</body>
</html>
