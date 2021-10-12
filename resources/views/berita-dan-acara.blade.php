@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')

@section('content')
    <section class="banner mb-5">
        <img src="{{ asset('images/banner-pricelist.png') }}" alt="" class="img-fluid w-100">
    </section>
    <div class="container">
        <div class="text-center">
            <h2 class="h5 mb-3">
                Berita dan Acara
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                in hendrerit in vulputate velit esse molestie consequat.
            </p>
        </div>
        <div class="row mt-5">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <a href="{{ route('posts.show', $post->slug) }}">
                        <figure class="figure figure--full w-100 h-100 mb-0">
                            <img data-src="{{ optional($post->thumbnail)->getUrl() }}"
                                 alt="{{ $post->title }}"
                                 class="figure-img img-fluid lazyload">
                            <figcaption class="fw-bolder p-3 text-dark">
                                {{ $post->title }}
                            </figcaption>
                            <div class="p-3 pt-0 text-end">
                                Lihat Detail
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
