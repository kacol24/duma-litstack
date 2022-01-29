@extends('layouts.master')

@section('seo_title', 'Home')

@php($heroSlider = [
    asset('images/banners/SlideDumaLunarNewYear.jpg'),
    route('why_duma') => asset('images/banners/SlideBannerMaterialBangunan.jpg'),
    route('product.duma_panel') => asset('images/banners/SlideBannerPanel.jpg'),
    route('product.duma_door') => asset('images/banners/SlideBannerPintukusen.jpg'),
    route('product.duma_deck') => asset('images/banners/SlideBannerDumaDeck.jpg'),
    route('product.duma_lisplank') => asset('images/banners/SlideBannerLisplank.jpg'),
])

@php($featuredProjects = App\Models\Project::active()->inRandomOrder()->limit(2)->get())

@section('content')
    <div class="hero-slider container--full-hd">
        <div class="px-0 overflow-hidden">
            <div class="swiper" data-swiper>
                <div class="swiper-wrapper">
                    @foreach($heroSlider as $route => $slide)
                        <div class="swiper-slide">
                            <a href="{{ is_int($route) ? '#' : $route }}" class="hero-slider__slide">
                                <img src="{{ $slide }}" alt="" class="img-fluid w-100">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <section class="intro my-md-5 py-5">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <img src="{{ asset('images/logo@3x.png') }}" alt="" class="img-fluid w-100">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        DUMA<sup>®</sup> adalah merek dari lini produk WPC
                        produksi dari PT. Sumber Djaja Perkasa sejak tahun 2003. WPC adalah material yang terbuat dari
                        campuran serbuk kayu dengan biji plastik.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features my-md-5 py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bolder">
                Apa Itu DUMA<sup>&reg;</sup>?
            </h2>
            <div class="row">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="blurb text-center text-md-start">
                        <div class="blurb__image mb-2 mb-md-4">
                            <img src="{{ asset('images/icons/icon-check.png') }}" alt=""
                                 class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class="blurb__title">
                            Pengolahan Bahan Ideal
                        </h3>
                        <div class="blurb__content mt-2 mt-md-3">
                            Serbuk kayu DUMA<sup>®</sup> diperoleh dari limbah kayu yang dihasilkan dari produsen kayu,
                            sehingga
                            kita hanya menggunakan limbah kayu yang seharusnya akan dibuang di tempat pembuangan sampah.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="blurb text-center text-md-start">
                        <div class="blurb__image mb-2 mb-md-4">
                            <img src="{{ asset('images/icons/icon-lightbulb.png') }}" alt=""
                                 class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class="blurb__title">
                            Campuran Orisinilitas
                        </h3>
                        <div class="blurb__content mt-2 mt-md-3">
                            DUMA<sup>®</sup> menggunakan campuran bahan plastik PVC orisinil dan daur ulang untuk
                            menciptakan
                            produk dengan kekuatan dan performa terbaik.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="blurb text-center text-md-start">
                        <div class="blurb__image mb-2 mb-md-4">
                            <img src="{{ asset('images/icons/icon-hourglass.png') }}" alt=""
                                 class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class="blurb__title">
                            Kualitas Terbaik
                        </h3>
                        <div class="blurb__content mt-2 mt-md-3">
                            DUMA<sup>®</sup> menggunakan campuran bahan plastik PVC orisinil dan daur ulang untuk
                            menciptakan
                            produk dengan kekuatan dan performa terbaik.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-duma position-relative container--full-hd">
        <img src="{{ asset('images/bg-why-duma.png') }}" alt="" class="w-100 img-fluid">
        <div class="container">
            <div class="row justify-content-center d-block d-md-none">
                <div class="col-md-10">
                    <div class="row justify-content-between py-md-5 my-md-5">
                        <div class="col-md-4">
                            <h2 class="fw-bolder">
                                Mengapa DUMA<sup>&reg;</sup>
                            </h2>
                        </div>
                        <div class="col-md-4">
                            <p>
                                Mengapa DUMA<sup>®</sup> adalah sebuah material bahan bangunan untuk masa depan dan
                                mengapa
                                DUMA<sup>®</sup>
                                adalah
                                pilihan yang tepat untuk Anda.
                            </p>
                            <a href="#" class="btn btn-brown fw-bolder">
                                Lihat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute w-100 d-none d-md-block" style="top: 30px;left: 0;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="row justify-content-between py-md-5 my-md-5">
                                <div class="col-md-4">
                                    <h2 class="fw-bolder">
                                        Mengapa DUMA<sup>&reg;</sup>
                                    </h2>
                                </div>
                                <div class="col-md-4">
                                    <p>
                                        Mengapa DUMA<sup>®</sup> adalah sebuah material bahan bangunan untuk masa depan
                                        dan mengapa
                                        DUMA<sup>®</sup>
                                        adalah
                                        pilihan yang tepat untuk Anda.
                                    </p>
                                    <a href="#" class="btn btn-brown fw-bolder">
                                        Lihat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="carousel-links pt-5">
        <div class="container">
            <div class="row justify-content-between align-items-end">
                <div class="col-md-4">
                    <h3>
                        Lebih Dekat Dengan DUMA<sup>®</sup>?
                    </h3>
                    <p>
                        Mengapa DUMA<sup>®</sup> adalah sebuah material bahan bangunan untuk masa depan dan mengapa DUMA<sup>®</sup>
                        adalah
                        pilihan yang tepat untuk Anda.
                    </p>
                </div>
                <div class="col-md-auto d-none d-md-block">
                    <div class="mt-4 text-center text-md-end">
                        <a href="{{ route('projects.index') }}" class="btn btn-brown fw-bolder">
                            Lihat Semua Proyek
                            <i class="fas fa-fw fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                @foreach($featuredProjects as $project)
                    <div class="col-md-6 mb-3 mb-md-0">
                        <figure class="figure figure--full w-100 h-100">
                            <img data-src="{{ $project->thumbnail->getUrl('thumbnail') }}" alt="{{ $project->title }}"
                                 class="figure-img img-fluid lazyload w-100">
                            <figcaption class="text-center fw-bolder p-3 text-dark">
                                {{ $project->title }}
                                <small class="fw-normal d-block">
                                    {{ $project->category->title }}
                                </small>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 text-center text-md-end d-block d-md-none">
                <a href="{{ route('projects.index') }}" class="btn btn-brown fw-bolder">
                    Lihat Semua Proyek
                    <i class="fas fa-fw fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
