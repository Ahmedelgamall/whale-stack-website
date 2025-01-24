        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{ asset('assets/web/') }}/assets/img/logo-white.png" alt="logo"
                            class="img-fluid logo-white" />
                        <img src="{{ asset('assets/web/') }}/assets/img/logo-color.png" alt="logo"
                            class="img-fluid logo-color" />
                    </a>

                    <div class="dropdown" tab-index="0">
                        <button id="dropdown-btn"></button>
                        <ul class="dropdown-content" id="dropdown-content"></ul>
                    </div>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                        <i class="flaticon-menu" data-bs-target="#offcanvasWithBackdrop"
                            aria-controls="offcanvasWithBackdrop" data-bs-toggle="offcanvas" role="button"></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li><a href="{{ route('web.contact-us') }}" class="nav-link">{{ __('app.Contact_us') }}</a></li>
                            <li><a href="about-us.html" class="nav-link">{{ __('app.About_us') }}</a></li>
                            <li><a href="portfolio.html" class="nav-link">{{ __('app.Projects') }}</a></li>
                            <li><a href="{{ route('web.blogs') }}" class="nav-link">{{ __('app.Blogs') }}</a></li>
                            <li><a href="{{ route('web.home') }}" class="nav-link">{{ __('app.Home') }}</a></li>
                        </ul>
                    </div>

                    <div style="margin: 0 20px;"
                        class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
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
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body z-10">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <div class="dropdown-grid-item bg-white">
                                        <h6 class="drop-heading">Different Home</h6>
                                        <a href="index-21.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 21 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Software Company</div>
                                                <p>Software Company Home</p>
                                            </div>
                                        </a>
                                        <a href="index-22.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 22 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Creative Agency</div>
                                                <p>
                                                    <strong>Creative Agency</strong> landing
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-23.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 23 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Digital Marketing Agency</div>
                                                <p>
                                                    <strong>Digital Marketing </strong>Agency landing
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-24.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 24 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Design Agency</div>
                                                <p>
                                                    <strong>Design Agency </strong>Home One
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-25.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 25 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Design Agency</div>
                                                <p>
                                                    <strong>Design Agency </strong>Home Two
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-26.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 26 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Agency Home</div>
                                                <p>
                                                    <strong>Agency Home </strong>New
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-27.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 27 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Creative Agency</div>
                                                <p>
                                                    <strong>Creative Agency </strong>Two
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-28.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 28 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Risk Managment</div>
                                                <p>
                                                    <strong>Risk Managment </strong>Home
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-29.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 29 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">It Company</div>
                                                <p>
                                                    <strong>It Company </strong>Home
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-30.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold"> 30 </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Ai Home</div>
                                                <p>
                                                    <strong>Ai Company </strong>Home
                                                </p>
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
                        </li>
                        <li><a href="services.html" class="nav-link">Services</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <div class="dropdown-grid-item bg-white radius-left-side">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="header.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-menu"></i>
                                            </span>
                                            <div class="drop-title">Navigations</div>
                                        </a>
                                        <a href="hero-sections.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-layer"></i>
                                            </span>
                                            <div class="drop-title">Hero Sections</div>
                                        </a>
                                        <a href="testimonials.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-phone-book"></i>
                                            </span>
                                            <div class="drop-title">Testimonials</div>
                                        </a>
                                        <a href="call-to-action.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-flash"></i>
                                            </span>
                                            <div class="drop-title">Call to Action</div>
                                        </a>
                                        <a href="tab-style.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-settings"></i>
                                            </span>
                                            <div class="drop-title">Tab Style</div>
                                        </a>
                                        <a href="services-style.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-graduation-cap"></i>
                                            </span>
                                            <div class="drop-title">Services Style</div>
                                        </a>
                                        <a href="work-process.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-folder"></i>
                                            </span>
                                            <div class="drop-title">Work Process</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item last-item bg-light-subtle radius-right-side">
                                        <a href="#">
                                            <img src="{{ asset('assets/web/') }}/assets/img/feature-img3.jpg"
                                                alt="add" class="img-fluid rounded-custom" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full">
                                    <div class="dropdown-grid-item bg-white radius-left-side">
                                        <h6 class="drop-heading">Useful Links</h6>
                                        <a href="about-us.html" class="dropdown-link px-0">
                                            <span class="me-2">
                                                <i class="flaticon-fingerprint"></i>
                                            </span>
                                            <div class="drop-title">About Us</div>
                                        </a>
                                        <a href="contact-us.html" class="dropdown-link px-0">
                                            <span class="me-2">
                                                <i class="flaticon-phone-book"></i>
                                            </span>
                                            <div class="drop-title">Contact Us</div>
                                        </a>
                                        <a href="services.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-pie-chart"></i>
                                            </span>
                                            <div class="drop-title">Services</div>
                                        </a>
                                        <a href="service-single.html" class="dropdown-link px-0">
                                            <span class="me-2">
                                                <i class="flaticon-server-storage"></i>
                                            </span>
                                            <div class="drop-title">Services Single</div>
                                        </a>
                                        <a href="blog.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-clipboard"></i>
                                            </span>
                                            <div class="drop-title">Our Latest News</div>
                                        </a>
                                        <a href="blog-single.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-menu"></i>
                                            </span>
                                            <div class="drop-title">News Details</div>
                                        </a>
                                        <a href="career.html" class="dropdown-link px-0">
                                            <span class="me-2">
                                                <i class="flaticon-graduate"></i>
                                            </span>
                                            <div class="drop-title">Career</div>
                                        </a>
                                        <a href="career-single.html" class="dropdown-link px-0">
                                            <span class="me-2">
                                                <i class="flaticon-pen-tool"></i>
                                            </span>
                                            <div class="drop-title">Career Single</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item radius-right-side bg-light-subtle">
                                        <h6 class="drop-heading">Utility Pages</h6>
                                        <a href="style-guide.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-web-programming"></i>
                                            </span>
                                            <div class="drop-title">Style Guide</div>
                                        </a>
                                        <a href="support.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-headset"></i>
                                            </span>
                                            <div class="drop-title">Help Center</div>
                                        </a>
                                        <a href="support-single.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-envelope"></i>
                                            </span>
                                            <div class="drop-title">Help Details</div>
                                        </a>
                                        <a href="team.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-avatar"></i>
                                            </span>
                                            <div class="drop-title">Our Team</div>
                                        </a>
                                        <a href="request-demo.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-vector"></i>
                                            </span>
                                            <div class="drop-title">Request for Demo</div>
                                        </a>
                                        <a href="login.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-download"></i>
                                            </span>
                                            <div class="drop-title">User Login</div>
                                        </a>
                                        <a href="register.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-logout"></i>
                                            </span>
                                            <div class="drop-title">User SignUp</div>
                                        </a>
                                        <a href="password-reset.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-garbage"></i>
                                            </span>
                                            <div class="drop-title">Recovery Account</div>
                                        </a>
                                        <a href="404.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-web-programming"></i>
                                            </span>
                                            <div class="drop-title">404 Page</div>
                                        </a>
                                        <a href="coming-soon.html" class="dropdown-link">
                                            <span class="me-2">
                                                <i class="flaticon-reload"></i>
                                            </span>
                                            <div class="drop-title">Coming Soon</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header>