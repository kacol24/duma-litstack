@extends('layouts.master')

@section('seo_title', 'Hubungi Kami')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-md-8 mt-5 mt-md-0">
                <h2 class="h4">
                    Kalkulator
                </h2>
                <hr class="border-primary-green border-lg">
                <div class="mt-3 mt-md-5">
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control border-0 bg-gray rounded-0" placeholder="Full Name*" required
                                   name="contact_name" aria-label="full name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 bg-gray rounded-0" placeholder="Email*" required name="contact_email"
                                   aria-label="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-0 bg-gray rounded-0" placeholder="Subject*" required
                                   name="contact_subject" aria-label="subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control border-0 bg-gray rounded-0" placeholder="Message*" required name="contact_message"
                                      aria-label="message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-brown text-uppercase rounded-0">
                                Submit Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
