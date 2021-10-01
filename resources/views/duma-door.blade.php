@extends('layouts.master')

@php($cms = \Lit\Config\Form\Pages\ProductDoorConfig::load())
@section('seo_title', $cms->page_title)

@push('after_scripts')
    <style>
        body {
            position: relative;
        }
    </style>
    <script>
        new bootstrap.ScrollSpy(document.body, {
            offset: 200,
            target: '#navigator_top'
        });
        new bootstrap.ScrollSpy(document.body, {
            target: '#navigator_bottom'
        });
    </script>
@endpush

@section('content')
    <div class="container container--full-hd">
        @isset($cms->banner)
            <section class="banner mb-5">
                <img data-src="{{ optional($cms->banner)->getUrl() }}" alt="" class="img-fluid w-100 lazyload">
            </section>
        @endisset
    </div>
    <div class="navigator sticky-top mb-md-3 d-none d-md-block" id="navigator_top">
        <div class="container">
            <div class="navigator__rail main_nav navbar-expand-lg">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">
                            Fitur & Keunggulan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#specification">
                            Spesifikasi Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#finishing">
                            Finishing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#installation">
                            Pemasangan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#storage">
                            Penanganan & Penyimpanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faqs">
                            FAQs
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>l
    <div class="container">
        <div class="text-center">
            <h1 class="h4 mb-3">
                {!! $cms->page_title !!}
            </h1>
            {!! $cms->page_description !!}
        </div>
        <div class="anchor" id="features"></div>
        <div class="text-center">
            <h2 class="h5">Fitur & Keunggulan</h2>
            @if($cms->carousel)
                <div class="mt-3">
                    <div class="swiper" data-swiper>
                        <div class="swiper-wrapper">
                            @foreach($cms->carousel as $slide)
                                <div class="swiper-slide">
                                    <img data-src="{{ optional($slide)->getUrl() }}" class="img-fluid w-100 lazyload"
                                         alt="{{ $slide->title }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @if($cms->spec_banner)
        <div class="anchor" id="specification"></div>
        <div class="container container--full-hd mt-5">
            <img data-src="{{ optional($cms->spec_banner)->getUrl() }}" alt="specification banner"
                 class="img-fluid w-100 lazyload">
        </div>
    @endif
    <div class="container mt-3">
        <div class="text-center">
            {!! $cms->spec_description !!}
        </div>
        @if($cms->spec_items)
            <div class="row mt-3 justify-content-between">
                @foreach($cms->spec_items as $item)
                    <div class="col-md-4 mb-4">
                        <figure class="figure figure--full p-3 w-100 h-100 bg-white text-center">
                            <img data-src="{{ optional($item->image)->getUrl('md') }}" alt="{{ $item->title }}"
                                 class="figure-img img-fluid lazyload">
                            <figcaption class="text-center mt-5 fw-bolder">
                                {{ $item->title }}
                            </figcaption>
                            <div class="mt-3 text-muted">
                                {!! $item->spec !!}
                            </div>
                        </figure>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="mt-3">
            <h3 class="h5 text-center">Spesifikasi Teknis</h3>
            @if($cms->compare)
                <div class="mt-3">
                    <table class="table table-bordered">
                        <thead class="bg-primary-green text-center">
                        <tr>
                            <th>{{ $cms->compare_heading_1 }}</th>
                            <th>{{ $cms->compare_heading_2 }}</th>
                            <th>{{ $cms->compare_heading_3 }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cms->compare as $compare)
                            <tr>
                                <th>{{ $compare->property }}</th>
                                <td>{{ $compare->duma }}</td>
                                <td>{{ $compare->other }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
        @if($cms->content)
            @foreach($cms->content as $content)
                <div class="mt-5 text-center">
                    <h3 class="h5">{{ $content->title }}</h3>
                    <div class="text-color-secondary">
                        {!! $content->description !!}
                    </div>
                </div>
                @if($content->items)
                    <div class="row mt-3">
                        @foreach($content->items as $item)
                            @if($item->type == 'simple')
                                <div class="col-6 col-md-3 mb-4">
                                    <figure class="figure text-center w-100 h-100">
                                        @if($item->image)
                                            <img data-src="{{ optional($item->image)->getUrl('md') }}"
                                                 alt="{{ $item->title }}"
                                                 class="figure-img img-fluid lazyload">
                                        @endif
                                        <figcaption class="mt-3 mt-md-5 fw-bolder">
                                            {{ $item->title }}
                                        </figcaption>
                                    </figure>
                                </div>
                            @elseif($item->type == 'full')
                                <div class="{{ $item->full_width ? 'col-md-12' : 'col-md-4' }} mb-4">
                                    <div class="row justify-content-center">
                                        <div class="{{ !$item->full_width ? 'col-md-12' : 'col-md-4' }}">
                                            <figure
                                                class="figure figure--full p-3 w-100 h-100 {{ $item->remove_bg ? 'bg-white' : '' }}">
                                                @if($item->image && !$item->image_last)
                                                    <img data-src="{{ optional($item->image)->getUrl('md') }}"
                                                         alt="{{ $item->title }}"
                                                         class="figure-img img-fluid lazyload mb-3">
                                                @endif
                                                <figcaption class="text-center fw-bolder">
                                                    {{ $item->title }}
                                                </figcaption>
                                                <div class="{{ $item->text_center ? 'text-center' : '' }}">
                                                    {!! $item->spec !!}
                                                </div>
                                                @if($item->image && $item->image_last)
                                                    <img data-src="{{ optional($item->image)->getUrl('md') }}"
                                                         alt="{{ $item->title }}"
                                                         class="figure-img img-fluid lazyload mt-3">
                                                @endif
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            @endforeach
        @endif
    </div>

    <div class="container mt-3">
        <div class="anchor" id="finishing"></div>
        <div class="text-center">
            <h3 class="h5">{{ $cms->finishing_title }}</h3>
            {!! $cms->finishing_description !!}
        </div>
        @if($cms->finishing_content)
            @foreach($cms->finishing_content as $content)
                <div class="row justify-content-between mt-5">
                    <div class="col-md-4">
                        <h3 class="h5">{{ $content->title }}</h3>
                        <div class="text-color-secondary">
                            {{ $content->subtitle }}
                        </div>
                    </div>
                    <div class="col-md-5">
                        {!! $content->description !!}
                    </div>
                </div>
                @if($content->items)
                    <div class="row mt-3 mt-md-5">
                        @foreach($content->items as $item)
                            @if($item->type == 'simple')
                                <div class="col-6 col-md-3 mb-4">
                                    <figure class="figure text-center w-100 h-100 bg-white">
                                        <img data-src="{{ optional($item->image)->getUrl('md') }}"
                                             alt="{{ $item->title }}"
                                             class="figure-img img-fluid lazyload">
                                        <figcaption class="mt-3 fw-bolder">
                                            {{ $item->title }}
                                        </figcaption>
                                    </figure>
                                </div>
                            @elseif($item->type == 'full')
                                <div class="col-md-4 mb-4">
                                    <figure class="figure figure--full p-3 w-100 h-100">
                                        <img data-src="{{ optional($item->image)->getUrl('md') }}"
                                             alt="{{ $item->title }}"
                                             class="figure-img img-fluid lazyload">
                                        <figcaption class="text-center mt-5 fw-bolder">
                                            {{ $item->title }}
                                        </figcaption>
                                        <div class="mt-3">
                                            {!! $item->spec !!}
                                        </div>
                                    </figure>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            @endforeach
        @endif
    </div>

    <div class="container">
        <div class="text-center my-5">
            <h3 class="h5">{{ $cms->doorjamb_title }}</h3>
            {!! $cms->doorjamb_description !!}
        </div>
        @if($cms->doorjamb_items)
            <div class="row mt-3">
                @foreach($cms->doorjamb_items as $item)
                    @if($item->type == 'simple')
                        <div class="col-6 col-md-3 mb-4">
                            <figure class="figure text-center w-100 h-100">
                                @if($item->image)
                                    <img data-src="{{ optional($item->image)->getUrl('md') }}" alt="{{ $item->title }}"
                                         class="figure-img img-fluid lazyload mb-3 mb-md-5">
                                @endif
                                <figcaption class="fw-bolder">
                                    {{ $item->title }}
                                </figcaption>
                            </figure>
                        </div>
                    @elseif($item->type == 'full')
                        <div class="col-md-4 mb-4">
                            <figure class="figure figure--full p-3 w-100 h-100">
                                @if($item->image)
                                    <img data-src="{{ optional($item->image)->getUrl('md') }}" alt="{{ $item->title }}"
                                         class="figure-img img-fluid mb-5 lazyload">
                                @endif
                                <figcaption class="text-center fw-bolder">
                                    {{ $item->title }}
                                </figcaption>
                                <div class="mt-3">
                                    {!! $item->spec !!}
                                </div>
                            </figure>
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    </div>

    <div class="container">
        <div class="text-center">
            <div class="anchor" id="installation"></div>
            <h2 class="h5">
                Pemasangan
            </h2>
            {!! $cms->installation_description !!}
            @if($cms->installation_documents)
                <div class="row justify-content-center mb-5">
                    @foreach($cms->installation_documents as $installation)
                        <div class="col-md-6">
                            <div class="card pricelist-card border-0">
                                <div class="card-header text-center border-0 pt-4">
                                    <h5 class="card-title m-0">
                                        {{ $installation->title }}
                                    </h5>
                                </div>
                                <div class="card-body bg-primary-green mt-n1 pb-4">
                                    @if($installation->type === 'document')
                                        <div class="text-center">
                                            <a href="{{ optional($installation->file)->getUrl() }}" target="_blank"
                                               class="btn btn-brown">
                                                Unduh
                                            </a>
                                        </div>
                                    @elseif($installation->type === 'youtube')
                                        <div class="ratio ratio-16x9">
                                            <iframe data-src="{{ $installation->url }}"
                                                    title="{{ $installation->title }}"
                                                    class="lazyload"
                                                    allowfullscreen></iframe>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <div class="container text-center mt-3">
        <div class="anchor" id="storage"></div>
        <h2 class="h5">
            Penanganan & Penyimpanan
        </h2>
        @if($cms->storage_documents)
            <div class="row justify-content-center mb-5">
                @foreach($cms->storage_documents as $document)
                    <div class="col-md-6">
                        <div class="card pricelist-card border-0">
                            <div class="card-header text-center border-0 pt-4">
                                <h5 class="card-title m-0">
                                    {{ $document->title }}
                                </h5>
                            </div>
                            <div class="card-body bg-primary-green mt-n1 pb-4">
                                <div class="text-center">
                                    <a href="{{ optional($document->file)->getUrl() }}" target="_blank"
                                       class="btn btn-brown">
                                        Unduh
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="text-center">
        <div class="container">
            <div class="anchor" id="faqs"></div>
            <h2 class="h5">
                FAQs
            </h2>
            @if($cms->faqs)
                @foreach($cms->faqs as $faq)
                    @continue(!$faq->question)
                    <div class="faq text-start mb-3 mb-md-5">
                        <div class="faq__question collapsed" data-bs-toggle="collapse"
                             data-bs-target="#faq_{{ $loop->iteration }}">
                            {{ $faq->question }}
                            <i class="fas fa-minus"></i>
                        </div>
                        <div class="collapse" id="faq_{{ $loop->iteration }}">
                            <div class="faq__answer">
                                {!! $faq->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="navigator sticky-top d-block d-lg-none" style="top:auto;bottom: 0;z-index:1010" id="navigator_bottom">
        <div class="container">
            <div class="navigator__rail main_nav navbar-expand-lg shadow-sm border-0">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle py-3 before-none"
                           data-bs-toggle="dropdown" href="#" role="button"
                           aria-expanded="false">Navigasi</a>
                        <ul class="dropdown-menu w-100">
                            <li>
                                <a class="dropdown-item nav-link" href="#features">
                                    Fitur & Keunggulan
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="#specification">
                                    Spesifikasi Produk
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="#finishing">
                                    Finishing
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="#installation">
                                    Pemasangan
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="#storage">
                                    Penanganan & Penyimpanan
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link" href="#faqs">
                                    FAQs
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
