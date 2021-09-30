@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')
@php($cms = \Lit\Config\Form\Pages\DistributorConfig::load())

@section('content')
    @isset($cms->banner)
        <section class="banner mb-5">
            <img src="{{ optional($cms->banner)->getUrl() }}" alt="" class="img-fluid w-100">
        </section>
    @endisset
    <div class="container">
        <div class="text-center">
            {{--            <h2 class="h5 mb-3">--}}
            {{--                Select Your City--}}
            {{--            </h2>--}}
            {{--            <p>--}}
            {{--                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut--}}
            {{--                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation--}}
            {{--                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor--}}
            {{--                in hendrerit in vulputate velit esse molestie consequat.--}}
            {{--            </p>--}}
        </div>
        <div class="row mt-5">
            <div class="col-12 my-5 text-center">
                Distributors
            </div>
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
