@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')
@php($cms = \Lit\Config\Form\Pages\ProductPanelConfig::load())

@push('after_scripts')
    <style>
        body {
            position: relative;
        }

        .slick-next {
            right: 15px;
        }

        .slick-prev {
            left: 15px;
            z-index: 1;
        }
    </style>
    <script>
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            offset: 200,
            target: '#navigator'
        });
    </script>
@endpush

@section('content')
    <div class="container container--full-hd">
        @isset($cms->banner)
            <section class="banner mb-5">
                <img data-src="{{ $cms->banner->getUrl() }}" alt="" class="img-fluid w-100 lazyload">
            </section>
        @endisset
    </div>
    <div class="navigator sticky-top pb-3" id="navigator">
        <div class="container" id="main_nav">
            <div class="navigator__rail navbar-nav">
                <ul class="nav nav-pills justify-content-center">
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
    </div>
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
            <div class="mt-3" data-slick='{
                "dots": true
            }'>
                @foreach($cms->carousel as $slide)
                    <div class="slide">
                        <img data-src="{{ $slide->getUrl() }}" class="img-fluid w-100 lazyload"
                             alt="{{ $slide->title }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @if($cms->spec_banner)
        <div class="anchor" id="specification"></div>
        <div class="container container--full-hd mt-5">
            <img data-src="{{ $cms->spec_banner->getUrl() }}" alt="specification banner"
                 class="img-fluid w-100 lazyload">
        </div>
    @endif
    <div class="container mt-3">
        <div class="text-center">
            {!! $cms->spec_description !!}
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
            <div class="row mt-3">
                @foreach($content->items as $item)
                    @if($item->type == 'simple')
                        <div class="col-6 col-md-3 mb-4">
                            <figure class="figure text-center w-100 h-100">
                                <img data-src="{{ $item->image->getUrl('md') }}" alt="{{ $item->title }}"
                                     class="figure-img img-fluid lazyload">
                                <figcaption class="mt-3 mt-md-5 fw-bolder">
                                    {{ $item->title }}
                                </figcaption>
                            </figure>
                        </div>
                    @elseif($item->type == 'full')
                        <div class="col-md-4 mb-4">
                            <figure class="figure figure--full p-3 w-100 h-100">
                                <img data-src="{{ $item->image->getUrl('md') }}" alt="{{ $item->title }}"
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
        <hr>
        <div class="anchor" id="finishing"></div>
        <div class="text-center">
            <h2 class="h5">
                Finishing
            </h2>
            {!! $cms->finishing_description !!}
            <div class="row mb-5">
                @foreach($cms->finishing_images as $image)
                    <div class="col-md-4">
                        <img data-src="{{ $image->getUrl() }}" alt="" class="img-fluid lazyload">
                    </div>
                @endforeach
            </div>

            <div class="anchor" id="installation"></div>
            <h2 class="h5">
                Pemasangan
            </h2>
            {!! $cms->installation_description !!}
            <div class="row justify-content-center mb-5">
                @foreach($cms->installation_documents as $document)
                    <div class="col-md-6">
                        <div class="card pricelist-card border-0">
                            <div class="card-header text-center border-0 pt-4">
                                <h5 class="card-title m-0">
                                    {{ $document->title }}
                                </h5>
                            </div>
                            <div class="card-body bg-primary-green mt-n1 pb-4">
                                <div class="text-center">
                                    <a href="{{ $document->file->getUrl() }}" target="_blank" class="btn btn-brown">
                                        Unduh
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="anchor" id="storage"></div>
            <h2 class="h5">
                Penanganan & Penyimpanan
            </h2>
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
                                    <a href="{{ $document->file->getUrl() }}" target="_blank" class="btn btn-brown">
                                        Unduh
                                    </a>
                                </div>
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
                <div class="faq text-start">
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
@endsection
