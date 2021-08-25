@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')
@php($cms = \Lit\Config\Form\Pages\ProjectConfig::load())
@php($projects = App\Models\Project::active()->get())

@section('content')
    <div class="container container--full-hd">
        @isset($cms->banner)
            <section class="banner mb-5">
                <img src="{{ $cms->banner->getUrl() }}" alt="" class="img-fluid w-100">
            </section>
        @endisset
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <h1 class="h4 mb-3">
                        {!! $cms->page_title !!}
                    </h1>
                    {!! $cms->page_description !!}
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($projects as $project)
                <div class="col-md-4">
                    <a href="{{ $project->thumbnail->getUrl() }}" class="d-block mb-4"
                       @if($project->thumbnail->hasCustomProperty('title'))
                       data-caption="{{ $project->thumbnail->getCustomProperty('title') }}"
                       @endif
                       data-fancybox="project_{{ $project->id }}" title="{{ $project->title }}">
                        <figure class="figure figure--full w-100 h-100">
                            <img data-src="{{ $project->thumbnail->getUrl('thumbnail') }}" alt="{{ $project->title }}"
                                 class="figure-img img-fluid lazyload">
                            <figcaption class="text-center fw-bolder p-3 text-dark">
                                {{ $project->title }}
                            </figcaption>
                            <div class="p-3 text-dark pt-0">
                                <table class="w-100">
                                    @if($project->location)
                                        <tr>
                                            <th>Location</th>
                                            <td>: {{ $project->location }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th>Distributor</th>
                                        <td>: {{ $project->distributor->name }}</td>
                                    </tr>
                                </table>
                                <div class="mt-3">
                                    {!! $project->description !!}
                                </div>
                            </div>
                        </figure>
                    </a>
                    <div class="d-none">
                        @foreach($project->images as $image)
                            @continue($loop->first)
                            <a href="{{ $image->getUrl() }}" class="d-block mb-4"
                               @if($image->hasCustomProperty('title'))
                               data-caption="{{ $image->getCustomProperty('title') }}"
                               @endif
                               data-fancybox="project_{{ $project->id }}" title="{{ $project->title }}">
                                <img src="{{ $image->getUrl('thumbnail') }}" alt="" class="img-fluid"></a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('before_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.0-beta.2/dist/fancybox.min.css">
@endpush

@push('before_scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.0-beta.2/dist/fancybox.umd.min.js"></script>
@endpush
