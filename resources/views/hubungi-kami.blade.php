@extends('layouts.master')

@section('seo_title', 'Hubungi Kami')

@section('content')
    <section class="banner mb-5">
        <img src="images/banner-contact.png" alt="" class="img-fluid w-100">
    </section>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 order-md-5">
                <h3 class="h4">Lokasi</h3>
                <hr class="border-primary-green border-lg">
                <ul class="list-unstyled mt-3 mt-md-5">
                    <li>
                        <h4 class="text-color-primary h5">
                            Factory
                        </h4>
                        <address>
                            <strong class="text-uppercase">
                                PT. Sumber Djaja Perkasa
                            </strong><br>
                            JL. RAYA PILANG KM 8 NO. 88<br>
                            KEC. WONOAYU SIDOARJO 61273<br>
                            <br>
                            TELP: <a href="tel:+62318855588">+62 31 885 5588</a><br>
                            FAX: +62 31 885 5799<br>
                            WA: <a href="https://wa.me/628113550057">+62 811 3550 057</a><br>
                            <br>
                            E-MAIL:<br>
                            <a href="mailto:marketing@sumberdjajaperkasa.com">marketing@sumberdjajaperkasa.com</a><br>
                            <br>
                            WEBSITE:<br>
                            <a href="https://sumberdjajaperkasa.com/" target="_blank">www.sumberdjajaperkasa.com</a>
                        </address>
                    </li>
                    <li class="mt-5">
                        <h4 class="text-color-primary h5">
                            Jakarta Office
                        </h4>
                        <address>
                            RUKAN SEDAYU SQUARE BLOK M<br>
                            NO 005 RT 006 RW 012<br>
                            JL. KAMAL RAYA OUTERING ROAD<br>
                            KEL. CENGKARENG BARAT<br>
                            KEC. CENGKARENG<br>
                            JAKARTA BARAT 11730<br>
                            <br>
                            TELP: <a href="tel:+622122553677">+62 21 225 53677</a><br>
                            HP (WA): <a href="https://wa.me/6282111953395">+62 82 111 953395</a>
                        </address>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 mt-5 mt-md-0">
                <h2 class="h4">
                    Leave us your info
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
