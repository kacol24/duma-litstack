@extends('layouts.master')

@section('seo_title', 'Mengapa Duma?')

@php($projectCategories = $cms->project_categories->sortBy('order_column'))

@section('content')
    @isset($cms->banner)
        <div class="container container--full-hd">
            <section class="banner mb-5">
                <img src="{{ $cms->banner->getUrl() }}" alt="" class="img-fluid w-100">
            </section>
        </div>
    @endisset
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
        <div class="row mt-5 justify-content-center"
             x-data="{
                categories: categories
             }">
            <template x-for="category in categories">
                <div class="col-auto">
                    <a href="#" class="btn btn-outline-brown fw-bolder rounded-pill"
                       @click="$store.selectedCategory.setCategory(category.title)"
                       :class="$store.selectedCategory.category == category.title ? 'active' : ''"
                       x-text="category.title" :title="category.title"
                    >
                    </a>
                </div>
            </template>
        </div>
        <div class="row mt-5" id="ProjectSelector" x-data>
            @foreach($projects as $project)
                <div class="col-md-4" x-show="$store.selectedCategory.category === '{{ $project->category->title }}'"
                     x-transition x-transition:leave.duration="0">
                    <a href="#" class="d-block mb-4"
                       @click.prevent='$store.selectedProject.setProject(@json($project))'>
                        <figure class="figure figure--full w-100 h-100">
                            <img data-src="{{ $project->thumbnail->getUrl('thumbnail') }}" alt="{{ $project->title }}"
                                 class="figure-img img-fluid lazyload">
                            <figcaption class="text-center fw-bolder p-3 text-dark">
                                {{ $project->title }}
                                <small class="fw-normal d-block">
                                    {{ $project->category->title }}
                                </small>
                            </figcaption>
                            <div class="p-3 text-end">
                                Lihat Detail
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="modal fade" id="project_detail_modal" tabindex="-1" aria-hidden="true" x-data>
        <div class="modal-dialog modal-dialog-scrollable modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" x-text="$store.selectedProject.title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="contaier-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <template x-for="image in $store.selectedProject.images">
                                            <div class="swiper-slide">
                                                <div class="swiper-zoom-container">
                                                    <img
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA+gAAAAKCAQAAACNzrx7AAAAOklEQVR42u3VQREAAAzCsOHf9HTAJRL6aQ4AqBcJAMDQAQBDBwAMHQAwdAAwdADA0AEAQwcADB0Atjz8IAALxMx7mQAAAABJRU5ErkJggg=="
                                                        alt="" :src="image.url" class="img-fluid user-select-none">
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-5 mt-md-0">
                                <template x-if="$store.selectedProject.categoryName">
                                    <dl class="row">
                                        <dt class="col-md-3">Kategori</dt>
                                        <dd class="col-sm-9" x-text="$store.selectedProject.categoryName">DUMA</dd>
                                    </dl>
                                </template>
                                <template x-if="$store.selectedProject.location">
                                    <div>
                                        <hr>
                                        <dl class="row">
                                            <dt class="col-md-3">Lokasi</dt>
                                            <dd class="col-sm-9" x-text="$store.selectedProject.location">Lokasi
                                                Proyek
                                            </dd>
                                        </dl>
                                    </div>
                                </template>
                                <template x-if="$store.selectedProject.distributorName">
                                    <div>
                                        <hr>
                                        <dl class="row">
                                            <dt class="col-md-3">Distributor</dt>
                                            <dd class="col-md-9" x-text="$store.selectedProject.distributorName">Nama
                                                Distributor
                                            </dd>
                                        </dl>
                                    </div>
                                </template>
                                <template x-if="$store.selectedProject.description">
                                    <div>
                                        <hr>
                                        <div x-html="$store.selectedProject.description"></div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed w-100 h-100 align-items-center justify-content-center text-white d-none"
         style="top: 0;left: 0;background-color:rgba(0, 0, 0, 0.7);z-index:99999;">
        <div class="d-flex align-items-center">
            <i class="fas fa-fw fa-lg fa-spin fa-sync me-2"></i> Loading...
        </div>
    </div>
@endsection

@push('before_styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@7.0.2/swiper-bundle.min.css">
    <style>
        :root {
            --swiper-theme-color: #a1d364;
        }
    </style>
@endpush

@push('before_scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@7.0.2/swiper-bundle.min.js"></script>
@endpush

@push('after_scripts')
    <script>
        var categories = @json($projectCategories);

        var ProjectModal = new bootstrap.Modal(document.getElementById('project_detail_modal'), {
            backdrop: 'static'
        });

        var swiper = new Swiper('.swiper', {
            mousewheel: true,
            zoom: true,
            grabcursor: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
                clickable: true
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });

        document.addEventListener('alpine:init', function() {
            Alpine.store('selectedProject', {
                title: '',
                location: '',
                distributorName: '',
                categoryName: '',
                description: '',
                images: [],
                setProject: function(project) {
                    this.title = project.title;
                    this.location = project.location;
                    this.distributorName = project.distributor_name;
                    this.categoryName = project.category_name;
                    this.description = project.description;
                    this.images = project.images;

                    swiper.slideTo(0);
                    ProjectModal.show();
                }
            });
            Alpine.store('selectedCategory', {
                category: categories[0].title,

                setCategory: function(category) {
                    this.category = category;
                }
            });
        });
    </script>
@endpush
