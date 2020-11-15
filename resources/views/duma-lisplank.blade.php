@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')
@php($cms = \Lit\Config\Form\Pages\ProductLisplankConfig::load())

@section('content')
    @isset($cms->banner)
        <section class="banner mb-5">
            <img src="{{ $cms->banner->getUrl() }}" alt="" class="img-fluid w-100">
        </section>
    @endisset
    <div class="container">
        <div class="text-center">
            <h1 class="h4 mb-3">
                {!! $cms->page_title !!}
            </h1>
            {!! $cms->page_description !!}
        </div>
        <div class="text-center">
            <h2 class="h5">Fitur & Keunggulan</h2>
            <div class="mt-3" data-slick>
                @foreach($cms->carousel as $slide)
                    <div class="slide">
                        <img src="{{ $slide->getUrl() }}" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @if($cms->spec_banner)
        <img src="{{ $cms->spec_banner->getUrl() }}" alt="" class="img-fluid">
    @endif
    <div class="container">
        <div class="text-center">
            {!! $cms->spec_description !!}
            <h2 class="h5">
                Dua Tipe Duma Lisplank
            </h2>
            <img src="{{ asset('images/tipe-emboss.png') }}" alt="" class="img-fluid">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <figure class="figure text-center">
                        <figcaption>
                            Lisplank Polos
                        </figcaption>
                        <img src="{{ asset('images/lisplank-polos.png') }}" alt=""
                             class="figure-img img-fluid">
                        <div class="mt-3">
                            <table>
                                <tr>
                                    <td>
                                        Lebar
                                    </td>
                                    <td>: 17 cm</td>
                                </tr>
                                <tr>
                                    <td>Lebar (efektif)</td>
                                    <td>: 15 cm</td>
                                </tr>
                                <tr>
                                    <td>Panjang</td>
                                    <td>: 3 M</td>
                                </tr>
                                <tr>
                                    <td>Tebal</td>
                                    <td>: 1,5 cm</td>
                                </tr>
                            </table>
                        </div>
                    </figure>
                </div>
                <div class="col-md-5">
                    <figure class="figure text-center">
                        <figcaption>
                            Lisplank Emboss
                        </figcaption>
                        <img src="{{ asset('images/lisplank-emboss.png') }}" alt=""
                             class="figure-img img-fluid">
                        <div class="mt-3">
                            <table>
                                <tr>
                                    <td>
                                        Lebar
                                    </td>
                                    <td>: 17 cm</td>
                                </tr>
                                <tr>
                                    <td>Lebar (efektif)</td>
                                    <td>: 15 cm</td>
                                </tr>
                                <tr>
                                    <td>Panjang</td>
                                    <td>: 3 M</td>
                                </tr>
                                <tr>
                                    <td>Tebal</td>
                                    <td>: 1,5 cm</td>
                                </tr>
                            </table>
                        </div>
                    </figure>
                </div>
            </div>
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
            <div class="row">
                @foreach($cms->finishing_images as $image)
                    <div class="col-md-4">
                        <img src="{{ $image->getUrl() }}" alt="" class="img-fluid">
                    </div>
                @endforeach
            </div>

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
                Penanganan
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
