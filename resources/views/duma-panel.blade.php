@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')
@php($cms = \Lit\Config\Form\Pages\ProductPanelConfig::load())

@section('content')
    <section class="banner mb-5">
        <img src="{{ asset('images/banner-pricelist.png') }}" alt="" class="img-fluid w-100">
    </section>
    <div class="container">
        <div class="text-center">
            <h1 class="h4 mb-3">
                Duma® Panel<br>
                NATURE COMES AT REASONABLE PRICES
            </h1>
            <p>
                DUMA® Premium Wall and Ceiling Panel adalah panel pelapis berbahan wood plastic composite (WPC) yang
                didesain untuk menutup, melindungi dan meningkatkan estetika dinding dan plafon interior anda. DUMA®
                Panel memiliki tampilan natural serat kayu layaknya kayu asli dengan ketahanan dan jangka hidup lama
                yang dimiliki oleh PVC. DUMA® Premium Wall and Ceiling Panel adalah solusi terbaik untuk kebutuhan
                pelapis dinding dan plafon interior bangungn Anda.
            </p>
        </div>
        {{--        <div class="text-center">--}}
        {{--            <h2 class="h5">Fitur & Keunggulan</h2>--}}
        {{--            carousel goes here--}}
        {{--        </div>--}}
    </div>
    {{--    spec banner--}}
    <div class="container">
        <div class="text-center">
            <p>
                DUMA® Premium Wall and Ceiling Panel menyediakan banyak pilihan profil dan warna yang berbeda. Setiap
                profil memiliki tekstur serat kayu dan rasa permukaan layaknya kayu asli. Selain itu kami juga
                menyediakan beberapa pililhan profil list plafon, lis tengah, lis siku, lis lantau, dan juga partisi
                atau para - para. Di bawah ini anda dapat melihat informasi lengkap serta detail teknis untuk semua
                profil
                DUMA®:
            </p>
        </div>
        @foreach($cms->content as $content)
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <h3 class="h5">{{ $content->title }}</h3>
                    <div class="text-color-secondary">
                        {{ $content->subtitle }}
                    </div>
                </div>
                <div class="col-md-5">
                    {!! $content->description !!}
                </div>
            </div>
            <div class="row">
                @foreach($content->items as $item)
                    @if($item->type == 'simple')
                        <div class="col-md-3">
                            <figure class="figure text-center">
                                <img src="{{ $item->image->getUrl() }}" alt="{{ $item->title }}"
                                     class="figure-img img-fluid">
                                <figcaption>
                                    {{ $item->title }}
                                </figcaption>
                            </figure>
                        </div>
                    @elseif($item->type == 'full')
                        <div class="col-md-4">
                            <figure class="figure figure--full p-3">
                                <img src="{{ $item->image->getUrl() }}" alt="{{ $item->title }}"
                                     class="figure-img img-fluid">
                                <figcaption class="text-center">
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
        <div class="text-center">
            <h2 class="h5">
                Finishing
            </h2>
            {!! $cms->finishing_description !!}

            <h2 class="h5 mt-5">
                Pemasangan
            </h2>
            {!! $cms->installation_description !!}
            <div class="row justify-content-center">
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

            <h2 class="h5 mt-5">
                Penanganan & Penyimpanan
            </h2>
            <div class="row justify-content-center">
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

            <h2 class="h5 mt-5">
                FAQs
            </h2>
            @foreach($cms->faqs as $faq)
                <div class="faq">
                    <div class="faq__question collapsed" data-toggle="collapse"
                         data-target="#faq_{{ $loop->iteration }}">
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
