<footer class="site-footer pt-5 mt-auto">
    <div class="sitemap pt-5 container--full-hd"
         style="background: url({{ asset('images/bg-footer.png') }}) no-repeat top/cover;margin:auto;">
        <div class="container pt-5">
            <div class="row justify-content-between pt-5 pb-3">
                <div class="col-md">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid mb-3" width="130">
                    <address class="d-flex">
                        <i class="fas fa-map-marker-alt fa-lg mt-1 me-2"></i>
                        Jl. Raya Pilang KM 8. No.88
                        Kec. Wonoayu, Sidoarjo, 61273
                        Indonesia.
                    </address>
                </div>
                <div class="col-md-1 separator d-none d-md-block"></div>
                <div class="col-md">
                    <strong class="text-dark text-uppercase">
                        Sitemap
                    </strong>
                    <ul class="list-unstyled mt-3">
                        <li>
                            <a href="{{ route('home') }}">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('why_duma') }}">
                                Mengapa DUMA?
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Produk
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('projects.index') }}">
                                Portfolio Proyek
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pricelist') }}">
                                Pricelist & Dokumen Lain
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Distributor
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact.index') }}">
                                Hubungi Kami
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('posts.index') }}">
                                Berita & Acara
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Perusahaan Kami
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1 separator d-none d-md-block"></div>
                <div class="col-md">
                    <strong class="text-dark text-uppercase">
                        Contact Info
                    </strong>
                    <address class="mt-3 d-flex align-items-center">
                        <i class="fas fa-phone fa-lg me-2"></i>
                        <div>
                            <a href="tel:62318855588">(031) 8855588</a><br>
                            <a href="tel:62318855799">(031) 8855799</a>
                        </div>
                    </address>
                    <address class="d-flex align-items-center">
                        <i class="fas fa-envelope fa-lg me-2"></i>
                        <a href="mailto:marketing@duma.co.id" target="_blank">
                            marketing@duma.co.id
                        </a>
                    </address>
                    <address class="d-flex align-items-center">
                        <i class="fas fa-globe fa-lg me-2"></i>
                        <a href="https://www.sumberdjajaperkasa.com" target="_blank">
                            www.sumberdjajaperkasa.com
                        </a>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center py-3">
        Copyright &copy; {{ date('Y') }} DUMA. All Right Reserved.
    </div>
</footer>
