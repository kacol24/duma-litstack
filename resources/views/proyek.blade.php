@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')

@section('content')
    <section class="banner mb-5">
        <img src="{{ asset('images/banner-pricelist.png }}" alt="" class="img-fluid w-100">
    </section>
    <div class="container">
        <div class="text-center">
            <h2 class="h5 mb-3">
                PROYEK
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                in hendrerit in vulputate velit esse molestie consequat.
            </p>
        </div>
        <div class="row mt-5">
            @foreach(range(1, 9) as $post)
                <div class="col-md-4">
                    <a href="" class="d-block mb-4">
                        <img src="{{ asset('images/carousel-link.jpg') }}" alt="" class="img-fluid">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
