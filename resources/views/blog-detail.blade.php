@extends('layouts.master')

@section('seo_title', $post->title)

@section('content')
    <div class="container mt-5">
        <h1 class="h3 text-color-primary">
            {{ $post->title }}
        </h1>
        <small>
            {{ $post->published_at ? $post->published_at->format('d F Y') : $post->created_at->format('d F Y') }}
        </small>
        <article class="mt-3">
            <img src="{{ $post->thumbnail->getUrl() }}" class="img-fluid w-100 mb-3" alt="{{ $post->title }}">
            <p>
                {!! $post->excerpt !!}
            </p>
            {!! $post->body !!}
            <div class="row">
                @foreach($post->images as $image)
                    @continue($loop->first)
                    <div class="col-md-3">
                        <img src="{{ $image->getUrl() }}" class="img-fluid w-100">
                    </div>
                @endforeach
            </div>
        </article>
    </div>
@endsection
