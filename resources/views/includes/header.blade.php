<header class="sticky-top">
    <nav class="top-bar">
        <div class="container">
            <div class="row">
                {{--                <div class="col-12 col-lg navbar-expand d-none d-lg-block">--}}
                {{--                    <ul class="navbar-nav language-switcher">--}}
                {{--                        <li class="nav-item active">--}}
                {{--                            <a class="nav-link rounded-left" href="#">ID</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="nav-item">--}}
                {{--                            <a class="nav-link rounded-right" href="#">EN</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-auto">--}}
                {{--                    <div class="input-group search-field">--}}
                {{--                        <input type="text" class="form-control rounded-0 order-10" placeholder="ketuk untuk mencari"--}}
                {{--                               aria-label="Search">--}}
                {{--                        <div class="input-group-prepend order-1">--}}
                {{--                                                <span class="input-group-text">--}}
                {{--                                                    <i class="fas fa-search fa-fw"></i>--}}
                {{--                                                </span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="col-12 col-lg navbar-expand">
                    <ul class="navbar-nav justify-content-lg-end justify-content-center">
                        <li class="nav-item mb-3 mb-md-0">
                            <a class="nav-link" href="#">Tentang Duma</a>
                        </li>
                        <li class="nav-item mb-3 mb-md-0 {{ request()->routeIs(['posts.*']) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('posts.index') }}">Berita & Acara</a>
                        </li>
                        <li class="nav-item mb-3 mb-md-0 {{ request()->routeIs(['distributor']) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('distributor') }}">Distributor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">FAQs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg shadow-sm" id="main_nav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid" width="130">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-fw fa-lg"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 justify-content-end text-start text-lg-center">
                    <li class="nav-item {{ request()->routeIs(['why_duma']) ? 'active' : '' }} my-3 my-md-0">
                        <a class="nav-link" href="{{ route('why_duma') }}">Mengapa Duma?</a>
                    </li>
                    <li class="nav-item mb-3 mb-md-0 dropdown {{ request()->routeIs(['product.*']) ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="product_projects_nav_dropdown"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Produk
                        </a>
                        <div class="dropdown-menu keep-open rounded-0 mt-0 p-0"
                             aria-labelledby="product_projects_nav_dropdown">
                            <a class="dropdown-item nav-link {{ request()->routeIs(['product.duma_panel']) ? 'active' : '' }}"
                               href="{{ route('product.duma_panel') }}">
                                Duma Panel
                            </a>
                            <a class="dropdown-item nav-link {{ request()->routeIs(['product.duma_door']) ? 'active' : '' }}"
                               href="{{ route('product.duma_door') }}">
                                Duma Door
                            </a>
                            <a class="dropdown-item nav-link {{ request()->routeIs(['product.duma_deck']) ? 'active' : '' }}"
                               href="{{ route('product.duma_deck') }}">
                                Duma Deck
                            </a>
                            <a class="dropdown-item nav-link {{ request()->routeIs(['product.duma_lisplank']) ? 'active' : '' }}"
                               href="{{ route('product.duma_lisplank') }}">
                                Duma Lisplank
                            </a>
                        </div>
                    </li>
                    <li class="nav-item mb-3 mb-md-0 {{ request()->routeIs(['projects.*']) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('projects.index') }}">
                            Proyek
                        </a>
                    </li>
                    <li class="nav-item mb-3 mb-md-0 {{ request()->routeIs(['pricelist']) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('pricelist') }}">Daftar Harga & Dokumen Lain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
