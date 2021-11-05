@extends('layouts.master')

@php($cms = \Lit\Config\Form\Pages\AboutConfig::load())
@section('seo_title', $cms->meta_title)

@section('content')
    @isset($cms->banner)
        <section class="banner mb-5">
            <img src="{{ optional($cms->banner)->getUrl() }}" alt="" class="img-fluid w-100">
        </section>
    @endisset
    <div class="container">
        <div class="text-center">
            <h1 class="h4 mb-3">
                Tentang Duma
            </h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto at blanditiis consectetur
            dignissimos eaque enim esse ex, fugiat id laboriosam non quis, repellat? Distinctio ex fugiat itaque nobis
            reprehenderit.
        </div>
    </div>
    <div class="container">
        <div class="text-center">
            <h2 class="h5 mb-3">
                Perjalanan
            </h2>
        </div>
        @foreach($cms->timelines as $timeline)
            <div class="timeline">
                <div class="timeline__year-container sticky-top">
                    <a href="#timeline_{{ Str::slug($timeline->year) }}" class="timeline__year sticky-top">
                        {{ $timeline->year }}
                    </a>
                </div>
                <div class="timeline__content">
                    @foreach($timeline->timeline_item as $content)
                        @if($content->type == 'images')
                            <div class="row g-0 mb-3">
                                @foreach($content->images as $image)
                                    <div class="col-md-4">
                                        <img src="{{ optional($image)->getUrl() }}"
                                             class="img-fluid w-100">
                                    </div>
                                @endforeach
                            </div>
                        @elseif($content->type === 'text')
                            <div class="mb-3">
                                {!! $content->text !!}
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
