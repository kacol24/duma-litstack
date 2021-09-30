@extends('layouts.master')

@section('seo_title', $cms->page_title)

@section('content')
    @isset($cms->banner)
        <section class="banner mb-5">
            <img src="{{ optional($cms->banner)->getUrl() }}" alt="" class="img-fluid w-100">
        </section>
    @endisset
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <h1 class="h4 mb-3">
                        {!! $cms->page_title !!}
                    </h1>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @isset($cms->distributors)
                @foreach($cms->distributors as $distributor)
                    <div class="col-md-6 mb-4">
                        <div class="card pricelist-card border-0">
                            <div class="card-header text-center py-5">
                                <h5 class="card-title m-0">
                                    {{ $distributor->name }}
                                </h5>
                            </div>
                            <div class="card-body p-5">
                                {!! $distributor->details !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
@endsection
