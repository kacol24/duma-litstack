@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')

@section('content')
    <section class="banner mb-5">
        <img src="{{ asset('images/banner-pricelist.png') }}" alt="" class="img-fluid w-100">
    </section>
    <div class="container">
        <div class="text-center">
            <h2 class="h5 mb-3">
                Select Your City
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                in hendrerit in vulputate velit esse molestie consequat.
            </p>
        </div>
        <div class="row mt-5">
            <div class="col-12 my-5 text-center">
                Lorem Ipsum
            </div>
            @foreach(range(1, 4) as $distributor)
                <div class="col-md-6 mb-4">
                    <div class="card pricelist-card border-0">
                        <div class="card-header text-center py-5">
                            <h5 class="card-title m-0">Special title treatment</h5>
                        </div>
                        <div class="card-body p-5">
                            <ul class="pricing-list text-center">
                                <li class="py-4">
                                    <i class="fas fa-check fa-fw fa-2x mr-3"></i>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li class="py-4">
                                    <i class="fas fa-check fa-fw fa-2x mr-3"></i>
                                    Lorem ipsum dolor sit amet
                                </li>
                            </ul>
                            <div class="text-center mt-5">
                                <a href="#" class="btn btn-brown">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
