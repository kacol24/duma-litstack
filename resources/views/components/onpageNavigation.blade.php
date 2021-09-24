@if(isset($type) && $type == 'top')
    <div class="navigator sticky-top mb-md-3 d-none d-md-block" id="navigator_top">
        <div class="container">
            <div class="navigator__rail main_nav navbar-expand-lg">
                <ul class="navbar-nav justify-content-center">
                    @foreach($items as $anchor => $navigation)
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ $anchor }}">
                                {{ $navigation }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@else
    <div class="navigator sticky-top d-block d-lg-none" style="top:auto;bottom: 0;z-index:1010" id="navigator_bottom">
        <div class="container">
            <div class="navigator__rail main_nav navbar-expand-lg shadow-sm border-0">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle py-3 before-none"
                           data-bs-toggle="dropdown" href="#" role="button"
                           aria-expanded="false">Navigasi</a>
                        <ul class="dropdown-menu w-100">
                            @foreach($items as $anchor => $navigation)
                                <li>
                                    <a class="dropdown-item nav-link" href="#{{ $anchor }}">
                                        {{ $navigation }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endif
