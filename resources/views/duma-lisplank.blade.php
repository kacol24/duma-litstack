@extends('layouts.master')

@php($cms = \Lit\Config\Form\Pages\ProductLisplankConfig::load())
@section('seo_title', $cms->page_title)

@php($onpageNavigation = [
    'features' => 'Fitur & Keunggulan',
    'specification' => 'Spesifikasi Produk',
    'installation' => 'Pemasangan',
    'accessories' => 'Aksesoris Produk',
    'faqs' => 'FAQs'
])

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
    @include('components.onpageNavigation', ['items' => $onpageNavigation, 'type' => 'top'])
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
        </div>
    </div>
    <div class="anchor" id="specification"></div>
    @if($cms->spec_banner)
        <div class="container container--full-hd mt-5">
            <img data-src="{{ optional($cms->spec_banner)->getUrl() }}" alt="specification banner"
                 class="img-fluid w-100 lazyload">
        </div>
    @endif

    <div class="container mt-3">
        <div class="text-center">
            {!! $cms->spec_description !!}
            <h2 class="h5">
                {{ $cms->spec_type_intro_title }}
            </h2>
            <img data-src="{{ optional($cms->spec_type_intro_image)->getUrl() }}" alt="specification type image"
                 class="img-fluid w-100 lazyload">
        </div>
        @foreach($cms->content as $content)
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
            <div class="row mt-3 justify-content-between">
                @foreach($content->items as $item)
                    @if($item->type == 'simple')
                        <div class="col-6 col-md-3 mb-4">
                            <figure class="figure text-center w-100 h-100">
                                <img data-src="{{ optional($item->image)->getUrl('md') }}" alt="{{ $item->title }}"
                                     class="figure-img img-fluid lazyload">
                                <figcaption class="mt-3 mt-md-5 fw-bolder">
                                    {{ $item->title }}
                                </figcaption>
                            </figure>
                        </div>
                    @elseif($item->type == 'full')
                        <div class="col-md-4 mb-4">
                            <figure class="figure figure--full p-3 w-100 h-100">
                                <img data-src="{{ optional($item->image)->getUrl('md') }}" alt="{{ $item->title }}"
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
        @endforeach

        <div class="text-center">
            <div class="anchor" id="accessories"></div>
            <h2 class="h5">
                Aksesoris Produk
            </h2>
            <p>
                {{ nl2br($cms->accessories_description) }}
            </p>
            <div class="row mt-3">
                @foreach($cms->accessories as $item)
                    @if($item->type == 'simple')
                        <div class="col-6 col-md-3 mb-4">
                            <figure class="figure text-center w-100 h-100">
                                <img data-src="{{ optional($item->image)->getUrl('md') }}" alt="{{ $item->title }}"
                                     class="figure-img img-fluid lazyload">
                                <figcaption class="mt-3 mt-md-5 fw-bolder">
                                    {{ $item->title }}
                                </figcaption>
                            </figure>
                        </div>
                    @elseif($item->type == 'full')
                        <div class="col-md-4 mb-4">
                            <figure class="figure figure--full p-3 w-100 h-100">
                                <img data-src="{{ optional($item->image)->getUrl('md') }}" alt="{{ $item->title }}"
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
        </div>

        <div class="text-center">
            <div class="anchor" id="installation"></div>
            <h2 class="h5">
                Pemasangan
            </h2>
            {!! $cms->installation_description !!}
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
                                        <iframe data-src="{{ $installation->url }}" title="{{ $installation->title }}"
                                                class="lazyload"
                                                allowfullscreen></iframe>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="anchor" id="faqs"></div>
            <h2 class="h5">
                FAQs
            </h2>
            @foreach($cms->faqs as $faq)
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
        </div>
    </div>
    @include('components.onpageNavigation', ['items' => $onpageNavigation])
@endsection
