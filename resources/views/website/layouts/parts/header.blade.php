        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="{{ route('web.home') }}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        {{-- <img src="{{ asset('assets/web/') }}/assets/img/logo-white.png" alt="logo"
                            class="img-fluid logo-white" />
                        <img src="{{ asset('assets/web/') }}/assets/img/logo-color.png" alt="logo"
                            class="img-fluid logo-color" /> --}}
                            {{-- <h1 style="font-size: 22px; color: #4e1416;">Whale stack</h1> --}}
                            <span style="font-size: 22px; font-weight: 700;" class="risk-gd-text">Whale stack</span>
                    </a>

                    <div class="nav-item dropdown" style="margin-left: 50px;">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @if (app()->getLocale() == 'ar')
                                <img src="https://flagsapi.com/SA/shiny/64.png" style="width: 20px; height: 20px;">
                                العربية
                            @else
                                <img src="https://flagsapi.com/GB/shiny/64.png" style="width: 20px; height: 20px;">
                                English
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                                    <img src="https://flagsapi.com/SA/shiny/64.png" style="width: 20px; height: 20px;">
                                    {{ __('app.Arabic') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                                    <img src="https://flagsapi.com/GB/shiny/64.png" style="width: 20px; height: 20px;">
                                    {{ __('app.English') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                        <i class="flaticon-menu" data-bs-target="#offcanvasWithBackdrop"
                            aria-controls="offcanvasWithBackdrop" data-bs-toggle="offcanvas" role="button"></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li><a href="{{ route('web.contact-us') }}" class="nav-link">{{ __('app.Contact_us') }}</a>
                            </li>
                            <li><a href="{{ route('web.about') }}" class="nav-link">{{ __('app.About_us') }}</a></li>
                            <li><a href="{{ route('web.projects') }}" class="nav-link">{{ __('app.Projects') }}</a>
                            </li>
                            <li><a href="{{ route('web.brands') }}"
                                    class="nav-link dropdown">{{ __('app.Brands') }}</a></li>
                            <li><a href="{{ route('web.blogs') }}" class="nav-link">{{ __('app.Blogs') }}</a></li>

                            <li><a href="{{ route('web.home') }}" class="nav-link">{{ __('app.Home') }}</a></li>
                        </ul>
                    </div>

                    <div style="margin: 0 20px;" class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle">
                            <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-title="Light"><i class="flaticon-sun-1 fs-lg"></i></div>
                            <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-title="Dark"><i class="flaticon-moon-1 fs-lg"></i></div>
                        </a>
                    </div>


                </div>
            </nav>
            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{ asset('assets/web/') }}/assets/img/logo-color.png" alt="logo"
                            class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body z-10">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li><a href="{{ route('web.contact-us') }}"
                                class="nav-link dropdown">{{ __('app.Contact_us') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('web.about') }}" class="nav-link dropdown">{{ __('app.About_us') }}</a>
                        </li>
                        <li><a href="{{ route('web.projects') }}"
                                class="nav-link dropdown">{{ __('app.Projects') }}</a></li>
                        <li><a href="{{ route('web.blogs') }}" class="nav-link dropdown">{{ __('app.Blogs') }}</a>
                        <li><a href="{{ route('web.brands') }}" class="nav-link dropdown">{{ __('app.Brands') }}</a>
                        </li>
                        <li><a href="{{ route('web.home') }}" class="nav-link dropdown">{{ __('app.Home') }}</a></li>
                    </ul>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header>
