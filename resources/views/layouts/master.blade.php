@php($active = false)
        <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css">
    @stack('before_styles')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('after_styles')

    <title>@yield('seo_title') | @yield('site_title', 'DUMA - Material Bangunan Masa Depan')</title>
</head>
<body>
<header class="">
    <nav class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg navbar-expand d-none d-lg-block">
                    {{--                    <ul class="navbar-nav language-switcher">--}}
                    {{--                        <li class="nav-item active">--}}
                    {{--                            <a class="nav-link rounded-left" href="#">ID</a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a class="nav-link rounded-right" href="#">EN</a>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                </div>
                <div class="col-12 col-lg-auto">
                    <div class="input-group search-field">
                        <input type="text" class="form-control rounded-0 order-10" placeholder="ketuk untuk mencari"
                               aria-label="Search">
                        <div class="input-group-prepend order-1">
                            <span class="input-group-text">
                                <i class="fas fa-search fa-fw"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg navbar-expand">
                    <ul class="navbar-nav justify-content-lg-end justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kalkulator.html">Kalkulator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hubungi-kami.html">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg" id="main_nav">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="images/logo.png" alt="" class="img-fluid" width="130">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-fw fa-lg"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 justify-content-end text-center">
                    <li class="nav-item {{ 'mengapa-duma' == 'mengapa-duma' ? 'active' : '' }} my-3 my-md-0">
                        <a class="nav-link" href="mengapa-duma.html">Mengapa Duma?</a>
                    </li>
                    <li class="nav-item mb-3 mb-md-0 dropdown">
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
                                    <a class="dropdown-item nav-link" href="duma-panel.html">
                                        Duma Panel
                                    </a>
                                    <a class="dropdown-item nav-link" href="#">
                                        Duma Door
                                    </a>
                                    <a class="dropdown-item nav-link" href="#">
                                        Duma Deck
                                    </a>
                                    <a class="dropdown-item nav-link" href="#">
                                        Duma Lisplank
                                    </a>
                                </div>
                            </div>
                            <a class="dropdown-item nav-link" href="proyek.html">
                                Proyek
                            </a>
                        </div>
                    </li>
                    <li class="nav-item mb-3 mb-md-0">
                        <a class="nav-link" href="daftar-harga-dan-dokumen-lain.html">Daftar Harga & Dokumen Lain</a>
                    </li>
                    <li class="nav-item mb-3 mb-md-0">
                        <a class="nav-link" href="berita-dan-acara.html">Berita & Acara</a>
                    </li>
                    <li class="nav-item mb-3 mb-md-0">
                        <a class="nav-link" href="distributor.html">Distributor</a>
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
<footer style="background: url(images/bg-footer.png) no-repeat top; background-size: cover"
        class="site-footer pt-5 mt-5">
    <div class="sitemap pt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/logo.png" alt="" class="img-fluid mb-3" width="130">
                    <address>
                        Jl. Raya Pilang KM 8. No.88
                        Kec. Wonoayu, Sidoarjo, 61273
                        Indonesia.
                    </address>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis
                    </p>
                </div>
                <div class="col-md-4">
                    <strong>
                        Sitemap
                    </strong>
                    <ul class="list-unstyled mt-3">
                        <li>
                            <a href="index.html">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="mengapa-duma.html">
                                Mengapa DUMA?
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Produk
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Portfolio Proyek
                            </a>
                        </li>
                        <li>
                            <a href="daftar-harga-dan-dokumen-lain.html">
                                Pricelist & Dokumen Lain
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Distributor
                            </a>
                        </li>
                        <li>
                            <a href="hubungi-kami.html">
                                Hubungi Kami
                            </a>
                        </li>
                        <li>
                            <a href="">
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
                <div class="col-md-4">
                    <strong>
                        Contact Info
                    </strong>
                    <address class="mt-3">
                        <a href="tel:62318855588">(031) 8855588</a><br>
                        <a href="tel:62318855799">(031) 8855799</a>
                    </address>
                    <address>
                        <a href="mailto:marketing@duma.co.id" target="_blank">
                            marketing@duma.co.id
                        </a>
                    </address>
                    <address>
                        <a href="https://www.sumberdjajaperkasa.com" target="_blank">
                            www.sumberdjajaperkasa.com
                        </a>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center py-4 mt-5">
        Copyright &copy; {{ date('Y') }} DUMA. All Right Reserved.
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
@stack('before_scripts')
@stack('after_scripts')

<script>
  $('.dropdown-toggle').click(function() {
    $(this).toggleClass('show').next().toggleClass('show');
  });
  $('.dropdown-menu.keep-open').click(function(e) {
    e.stopPropagation();
  });
</script>
</body>
</html>
