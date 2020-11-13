@extends('layouts.master')

@section('seo_title', 'FAQ')

@section('content')
    <section class="banner">
        <img src="{{ asset('images/banner-faq.png') }}" alt="" class="img-fluid w-100">
    </section>
    <div class="container my-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group input-group--outline">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="faq_search">
                                <i class="fas fa-search fa-fw"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control form-control--outline placeholder-center"
                               placeholder="ketuk untuk mencari" aria-label="cari faq"
                               aria-describedby="faq_search">
                    </div>
                </div>
            </div>
        </div>
        @foreach(range(1, 20) as $faq)
            <div class="faq">
                <div class="faq__question collapsed" data-toggle="collapse" data-target="#faq_{{ $faq }}">
                    lorem ipsum
                    <i class="fas fa-minus"></i>
                </div>
                <div class="collapse" id="faq_{{ $faq }}">
                    <div class="faq__answer">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aspernatur dolor esse
                        eveniet exercitationem hic unde veniam? Aliquid aspernatur dignissimos, doloribus enim fugit
                        laboriosam magni maiores nemo quasi vel.
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
