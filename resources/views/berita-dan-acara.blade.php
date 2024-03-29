@extends('layouts.master')

@section('seo_title', $cms->page_title)

@section('content')
    @isset($cms->banner)
        <div class="container container--full-hd">
            <section class="banner mb-5">
                <img data-src="{{ optional($cms->banner)->getUrl() }}" alt="" class="img-fluid w-100 lazyload">
            </section>
        </div>
    @endisset
    <div class="container">
        <div class="text-center">
            <h2 class="h5 mb-3">
                {{ $cms->page_title }}
            </h2>
            {!! $cms->page_description !!}
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
