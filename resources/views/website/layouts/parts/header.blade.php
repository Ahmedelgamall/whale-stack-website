        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{ asset('assets/web/') }}/assets/img/logo-white.png" alt="logo"
                            class="img-fluid logo-white" />
                        <img src="{{ asset('assets/web/') }}/assets/img/logo-color.png" alt="logo"
                            class="img-fluid logo-color" />
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
<<<<<<< HEAD
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Home
                            </a>
                            <div
                                class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white homepage-list-wrapper">
                                <div class="dropdown-grid rounded-custom width-full homepage-dropdown">
                                    <div class="dropdown-grid-item bg-white radius-left-side">
                                        <h6 class="drop-heading">Different Home</h6>
                                        <a href="index.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 1</div>
                                                <p>It's for <strong>SaaS Software</strong> Company </p>
                                            </div>
                                        </a>
                                        <a href="index-2.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 2</div>
                                                <p>Modern <strong>Saas agency</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-3.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">3</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Desktop App</div>
                                                <p>
                                                    <strong>Web Software</strong> Company
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-4.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">4</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing</div>
                                                <p>App and <strong>Software</strong> Landing </p>
                                            </div>
                                        </a>
                                        <a href="index-5.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">5</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Software Application</div>
                                                <p>IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-6.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">6</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Startup Agency</div>
                                                <p>Different type of <strong>Agency</strong>&lrm; </p>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="dropdown-grid-item bg-light-subtle">
                                        <h6 class="drop-heading">Different Home</h6>
                                        <a href="index-11.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 11 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Crypto Currency</div>
                                                <p>
                                                    <strong>Crypto Currency</strong> landing page
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-12.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 12 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Game Solutions</div>
                                                <p>
                                                    <strong>Game Server</strong> landing page
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-13.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 13 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Payment Gateway</div>
                                                <p>
                                                    <strong>Payment Gateway</strong> landing page
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-14.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 14 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Digital Marketing</div>
                                                <p>
                                                    <strong>Digital Marketing</strong> landing page
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-16.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 16 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Quiety Insurance</div>
                                                <p>
                                                    <strong>Quiety Insurance</strong> landing
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-19.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 19 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Help Desk</div>
                                                <p>Help Desk Home</p>
                                            </div>
                                        </a>
                                        <a href="index-20.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 20 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Digital Agency</div>
                                                <p>Digital Agency Home</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item bg-light-subtle">
                                        <h6 class="drop-heading">Different Home</h6>
                                        <a href="index-31.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 31 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Ai Content Generator</div>
                                                <p>
                                                    <strong>Saas </strong>Content Generator
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-32.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 32 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Ai SAAS Content Generator</div>
                                                <p>
                                                    <strong>Ai SAAS Content </strong>For Marketing
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-33.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 33 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Ai Image Generation SAAS</div>
                                                <p>
                                                    <strong>Ai image generation </strong>New
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-34.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 34 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Payment Gateway</div>
                                                <p>
                                                    <strong>Payment Gateway </strong>New
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-35.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 35 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Corporate Agency</div>
                                                <p>
                                                    <strong>Agency Website </strong>New
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-36.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 36 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Creative Agency</div>
                                                <p>
                                                    <strong>Agency Website </strong>New
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-37.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 37 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Marketplace Agency</div>
                                                <p>
                                                    <strong>Marketplace Website </strong>New
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-38.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 38 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Job Finder</div>
                                                <p>
                                                    <strong>Job </strong>Finder New
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-39.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 39 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Job Finder 2</div>
                                                <p>
                                                    <strong>Job </strong>Finder New
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
=======
                        <li><a href="{{ route('web.contact-us') }}"
                                class="nav-link dropdown">{{ __('app.Contact_us') }}</a>
>>>>>>> b567b9a18db77ff8ec9e4be8f0c5048ac5fb1ce7
                        </li>
                        <li>
                            <a href="{{ route('web.about') }}" class="nav-link dropdown">{{ __('app.About_us') }}</a>
                        </li>
                        <li><a href="{{ route('web.projects') }}"
                                class="nav-link dropdown">{{ __('app.Projects') }}</a></li>
                        <li><a href="{{ route('web.blogs') }}" class="nav-link dropdown">{{ __('app.Blogs') }}</a>
                        </li>
                        <li><a href="{{ route('web.home') }}" class="nav-link dropdown">{{ __('app.Home') }}</a></li>
                    </ul>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header>
