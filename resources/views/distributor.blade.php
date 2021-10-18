@extends('layouts.master')

@section('seo_title', $cms->page_title)

@section('content')
    @isset($cms->banner)
        <section class="banner mb-5">
            <img src="{{ optional($cms->banner)->getUrl() }}" alt="" class="img-fluid w-100">
        </section>
    @endisset
    <div class="container" x-data="FilterApp()">
        <div class="mt-5 text-center">
            <h3 class="h5">
                Select Your City
            </h3>
            <hr class="bg-primary-green" style="height: 3px;opacity: 1;">
            <div class="d-none d-md-block">
                <a href="#" class="btn btn-outline-brown"
                   @click.prevent="currentFilter = null"
                   :class="currentFilter === null ? 'active' : ''">
                    Semua Kota
                </a>
                @foreach($cms->cities as $city)
                    <a href="#" class="btn btn-outline-brown"
                       @click.prevent="currentFilter = '{{ $city->name }}'"
                       :class="currentFilter === '{{ $city->name }}' ? 'active' : ''">
                        {{ $city->name }}
                    </a>
                @endforeach
            </div>
            <div class="d-block d-md-none">
                <div class="dropdown">
                    <button class="btn btn-outline-brown d-flex justify-content-between align-items-center w-100 dropdown-toggle" type="button"
                            id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false"
                            x-text="currentFilter === null ? 'Semua Kota' : currentFilter">
                        Semua Kota
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        @foreach($cms->cities as $city)
                            <li>
                                <a class="dropdown-item" href="#"
                                   @click.prevent="currentFilter = '{{ $city->name }}'"
                                   :class="currentFilter === '{{ $city->name }}' ? 'active' : ''">
                                    {{ $city->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="text-center">
                    <h1 class="h4 mb-3">
                        {!! $cms->page_title !!}
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($cms->cities as $city)
                @foreach($city->distributors as $distributor)
                    <div class="col-lg-4 col-md-6 mb-4"
                         x-show="currentFilter === '{{ $city->name }}' || currentFilter === null"
                         x-transition>
                        <div class="card pricelist-card border-0">
                            <div class="card-header text-center py-3">
                                <h5 class="card-title m-0">
                                    {{ $distributor->name }}
                                </h5>
                                <small>
                                    {{ $distributor->city->name }}
                                </small>
                            </div>
                            @if($distributor->description)
                                <div class="card-body py-3 px-4 pb-0">
                                    {!! $distributor->description !!}
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection

@push('after_scripts')
    <script>
        function FilterApp() {
            return {
                currentFilter: null
            };
        }
    </script>
@endpush
