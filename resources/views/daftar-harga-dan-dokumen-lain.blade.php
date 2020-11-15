@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')
@php($cms = \Lit\Config\Form\Pages\PricelistConfig::load())

@section('content')
    @isset($cms->banner)
        <section class="banner mb-5">
            <img src="{{ $cms->banner->getUrl() }}" alt="" class="img-fluid w-100">
        </section>
    @endisset
    <div class="container">
        <div class="text-center">
            <h2 class="h5 mb-3">
                {{ $cms->pricelist_title }}
            </h2>
            {!! $cms->pricelist_description !!}
        </div>
        <div class="row mt-5">
            @foreach($cms->pricelist_files as $upload)
                <div class="col-md-6">
                    <div class="card pricelist-card border-0">
                        <div class="card-header text-center py-5">
                            <h5 class="card-title m-0">
                                {{ $upload->title }}
                            </h5>
                        </div>
                        <div class="card-body p-5">
                            <div class="text-center mt-5">
                                <a href="{{ $upload->file->getUrl() }}" target="_blank" class="btn btn-brown">Unduh</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-40 mb-5">
        <div class="text-center">
            <h2 class="h5 mb-3">
                {{ $cms->documents_title }}
            </h2>
            {!! $cms->documents_description !!}
        </div>
        <div class="row mt-5">
            @foreach($cms->documents_files as $upload)
                <div class="col-md-6">
                    <div class="card pricelist-card border-0">
                        <div class="card-header text-center py-5">
                            <h5 class="card-title m-0">
                                {{ $upload->title }}
                            </h5>
                        </div>
                        <div class="card-body p-5">
                            <div class="text-center mt-5">
                                <a href="{{ $upload->file->getUrl() }}" target="_blank" class="btn btn-brown">Unduh</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
