        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top footer-light ptb-120">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="{{ asset('assets/web/') }}/assets/img/logo-white.png" alt="logo"
                                        class="img-fluid logo-white">
                                    <img src="{{ asset('assets/web/') }}/assets/img/logo-color.png" alt="logo"
                                        class="img-fluid logo-color">
                                </div>
                                <p>{{ __('app.Our_latest_news') }}.</p>

                                <form id="subscribtionForm" class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2"
                                        placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..."
                                        class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10{{ __('app.Overall_rating') }}</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row hidden-footer">
                                <div class="col-md-6 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>{{ __('app.Primary Pages') }}</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="{{ route('web.home') }}"
                                                    class="text-decoration-none">{{ __('app.Home') }}</a></li>
                                            <li><a href="{{ route('web.about') }}"
                                                    class="text-decoration-none">{{ __('app.About_us') }}</a>
                                            </li>
                                            <li><a href="{{ route('web.blogs') }}"
                                                    class="text-decoration-none">{{ __('app.Blogs') }}</a>
                                            </li>
                                            <li><a href="{{ route('web.projects') }}"
                                                    class="text-decoration-none">{{ __('app.Projects') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>{{ __('app.Pages') }}</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="{{ route('web.blogs') }}" class="text-decoration-none">{{ __('app.Blogs') }}</a></li>
                                            <li><a href="{{ route('web.contact-us') }}" class="text-decoration-none">{{ __('app.Contact_us') }}</a>
                                            </li>
                                            <li><a href="#" class="text-decoration-none">{{ __('app.Careers') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>{{ __('app.Template') }}</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="{{ route('web.contact-us') }}" class="text-decoration-none">{{ __('app.Contact_us') }}</a>
                                            </li>
                                            <li><a href="#" class="text-decoration-none">{{ __('app.Privacy and policy') }}</a></li>
                                            <li><a href="#" class="text-decoration-none">{{ __('app.Customer Review') }}</a></li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom footer-light py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy;whale stack Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="{{ getSettingOf('facebook') }}"
                                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="{{ getSettingOf('instagram') }}"
                                            target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="{{ getSettingOf('youtube') }}"
                                            target="_blank"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="{{ getSettingOf('twitter') }}"
                                            target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="{{ getSettingOf('linkedin') }}"
                                            target="_blank"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->

            <div class="sticky-buttons">
                <a href="https://wa.me/+201001894940" class="whatsapp-button" target="_blank" aria-label="Chat with us on WhatsApp">
                  <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp Icon">
                </a>
                <a href="tel:+201001894940" class="call-button" aria-label="Call us">
                <img src="https://img.icons8.com/color/48/000000/phone.png" alt="Call Icon">
                </a>
              </div>
        </footer>
