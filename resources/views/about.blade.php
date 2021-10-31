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
    <section class="history">
        <div class="container">
            <div class="text-center">
                <h2 class="h5 mb-3">
                    Perjalanan
                </h2>
            </div>
            <div class="row">
                <div class="col-md-10 order-md-5">
                    <div class="tab-content">
                        @foreach($cms->timelines as $timeline)
                            <div id="timeline_{{ $timeline->year }}"
                                 class="tab-pane fade {{ $loop->first ? 'show active' : '' }}">
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
                        @endforeach
                    </div>
                </div>
                <div class="col-md-2 order-md-1 sticky-top sticky-timeline">
                    <ul class="nav timeline-spy sticky-top" id="timeline-list">
                        @foreach($cms->timelines as $timeline)
                            <li class="nav-item d-none d-md-block">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                   data-bs-toggle="tab"
                                   href="#timeline_{{ $timeline->year }}">
                                    {{ $timeline->year }}
                                </a>
                            </li>
                        @endforeach
                        <li class="nav-item dropdown w-100 text-center d-md-none">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Tahun</a>
                            <ul class="dropdown-menu w-100">
                                @foreach($cms->timelines as $timeline)
                                    <li>
                                        <a class="dropdown-item"
                                           data-bs-toggle="tab"
                                           href="#timeline_{{ $timeline->year }}">
                                            {{ $timeline->year }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
