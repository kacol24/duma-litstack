@extends('layouts.master')

@section('seo_title', 'Home')

@section('content')
    <div class="hero-slider" style="background: url({{ asset('images/bg-hero-slider.png') }}) no-repeat bottom/cover">
        <div class="hero-slider__slide">
            <img src="{{ asset('images/hero-slide.png') }}" alt="" class="img-fluid w-100">
        </div>
    </div>
    <section class="intro my-5 py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    DUMA® adalah merek dari lini produk WPC
                    produksi dari PT. Sumber Djaja Perkasa sejak tahun 2003. WPC adalah material yang terbuat dari
                    campuran serbuk kayu dengan biji plastik.
                </div>
            </div>
        </div>
    </section>
    <section class="features my-5 py-5">
        <div class="container">
            <h2 class="text-center mb-lg-5">
                Mengapa DUMA<sup>&reg;</sup>
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="blurb">
                        <div class="blurb__image">
                            <img src="{{ asset('images/icons/icon-check.png') }}" alt=""
                                 class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class="blurb__title">
                            Pengolahan Bahan Ideal
                        </h3>
                        <div class="blurb__content">
                            Serbuk kayu DUMA® diperoleh dari limbah kayu yang dihasilkan dari produsen kayu, sehingga
                            kita hanya menggunakan limbah kayu yang seharusnya akan dibuang di tempat pembuangan sampah.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blurb">
                        <div class="blurb__image">
                            <img src="{{ asset('images/icons/icon-lightbulb.png') }}" alt=""
                                 class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class="blurb__title">
                            Campuran Orisinilitas
                        </h3>
                        <div class="blurb__content">
                            DUMA® menggunakan campuran bahan plastik PVC orisinil dan daur ulang untuk menciptakan
                            produk dengan kekuatan dan performa terbaik.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blurb">
                        <div class="blurb__image">
                            <img src="{{ asset('images/icons/icon-hourglass.png') }}" alt=""
                                 class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class="blurb__title">
                            Kualitas Terbaik
                        </h3>
                        <div class="blurb__content">
                            DUMA® menggunakan campuran bahan plastik PVC orisinil dan daur ulang untuk menciptakan
                            produk dengan kekuatan dan performa terbaik.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-duma">
        <div class="position-absolute">
            <img src="{{ asset('images/bg-why-duma.png') }}" alt="" class="w-100 img-fluid">
        </div>
        <div class="container py-5 mt-5">
            <div class="row justify-content-between" style="margin-top: 200px;">
                <div class="col-md-4">
                    <h2>
                        Mengapa DUMA<sup>&reg;</sup>
                    </h2>
                </div>
                <div class="col-md-4">
                    <p>
                        Mengapa DUMA® adalah sebuah material bahan bangunan untuk masa depan dan mengapa DUMA® adalah
                        pilihan yang tepat untuk Anda.
                    </p>
                    <a href="#" class="btn btn-brown">
                        Lihat
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="carousel-links" style="margin-top: 900px">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>
                        Lebih Dekat Dengan DUMA®?
                    </h3>
                    <p>
                        Mengapa DUMA® adalah sebuah material bahan bangunan untuk masa depan dan mengapa DUMA® adalah
                        pilihan yang tepat untuk Anda.
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <a href="">
                        <img src="{{ asset('images/carousel-link.jpg') }}" alt="" class="img-fluid w-100">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="">
                        <img src="{{ asset('images/carousel-link.jpg') }}" alt="" class="img-fluid w-100">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
