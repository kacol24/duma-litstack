@extends('layouts.master')

@php($cms = \Lit\Config\Form\Pages\ContactConfig::load())

@section('seo_title', $cms->seo_title)

@section('content')
    <section class="banner mb-5">
        <img src="{{ asset('images/banner-contact.png') }}" alt="" class="img-fluid w-100">
    </section>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 order-md-5">
                <h3 class="h4">Lokasi</h3>
                <hr class="border-primary-green border-lg">
                <ul class="list-unstyled mt-3 mt-md-5">
                    @foreach($cms->locations as $location)
                        <li class="mb-5">
                            <h4 class="text-color-primary h5">
                                {{ $location->title }}
                            </h4>
                            <address>
                                {!! $location->content !!}
                            </address>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8 mt-5 mt-md-0">
                <h2 class="h4">
                    Leave us your info
                </h2>
                <hr class="border-primary-green border-lg">
                <div class="mt-3 mt-md-5">
                    <form action="">
                        <div class="mb-3">
                            <input type="text" class="form-control border-0 bg-gray" placeholder="Full Name*"
                                   required
                                   name="contact_name" aria-label="full name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control border-0 bg-gray" placeholder="Email*"
                                   required name="contact_email"
                                   aria-label="Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control border-0 bg-gray" placeholder="Subject*"
                                   required
                                   name="contact_subject" aria-label="subject">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control border-0 bg-gray" placeholder="Message*" required
                                      name="contact_message"
                                      aria-label="message"></textarea>
                        </div>
                        <div class="mt-5 text-end">
                            <button type="submit" class="btn btn-brown">
                                Submit Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
