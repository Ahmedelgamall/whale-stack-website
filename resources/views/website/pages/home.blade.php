@extends('website.layouts.master')
@section('meta')
@endsection
@section('css')
@endsection
@section('content')
    <?php
    $firstSection = $rows->where('section', App\Enums\SectionType::FIRST_SECTION)->first();
    $secondSection = $rows->where('section', App\Enums\SectionType::SECOND_SECTION)->first();
    ?>
    <!-- Hero -->
    <div class="rm-hero pt-120 pb-120 position-relative overflow-hidden">
        <div class="container">
            <div class="position-relative">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <h1 class="rm-hero-title text-white fs-72 fw-800 ff-risk-pri mb-20"> {!! formateTitle($firstSection->title) !!}
                            <br>
                            <img src="{{ asset('assets/web/') }}/assets/img/risk_managment/font.png" alt=""></span>
                        </h1>
                        <p class="text-white fs-20 ff-dmsans fw-500 flh-28">{{ $firstSection->description }}</p>
                        <a href="{{ $firstSection->url }}"
                            class="btn risk-btn-bg risk-btn-hover clr-white ff-risk-pri fs-14 fw-600 mt-30">Start
                            with us</a>
                        <div class="risk-customer-area mt-60">
                            <p class="text-white ff-risk-pri fw-600">See how over 7,700 customers <span
                                    class="risk-highlight-color fw-800">Help the world work</span></p>
                            <div class="risk-customer-logo-wrapper d-flex align-items-center gap-10 flex-wrap">
                                <img class="risk-customer-logo"
                                    src="{{ asset('assets/web/') }}/assets/img/risk_managment/customer.png" alt="">
                                <img class="risk-customer-logo"
                                    src="{{ asset('assets/web/') }}/assets/img/risk_managment/customer_2.png"
                                    alt="">
                                <img class="risk-customer-logo"
                                    src="{{ asset('assets/web/') }}/assets/img/risk_managment/customer_3.png"
                                    alt="">
                                <img class="risk-customer-logo"
                                    src="{{ asset('assets/web/') }}/assets/img/risk_managment/customer_4.png"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8">
                        <div class="position-relative">
                            <img src="{{ asset('storage' . '/' . $firstSection->image) }}" alt="{{ $secondSection->title }}"
                                class="risk-hero-img img-fluid">
                            <a href=""
                                class="risk-click-btn risk-gd-bg rounded-circle d-flex align-items-center justify-content-center position-absolute">
                                <svg width="25" height="32" viewBox="0 0 25 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.39397 1.4711C1.39397 1.4711 11.7558 16.9705 21.1011 30.9492M21.1011 30.9492C14.3501 20.851 23.4213 12.0896 23.4213 12.0896M21.1011 30.9492C14.3501 20.851 2.78667 25.8846 2.78667 25.8846"
                                        stroke="white" stroke-width="2" />
                                </svg>
                            </a>
                            <div class="risk-social d-flex align-items-center flex-column gap-20">
                                <a class="d-flex align-items-center gap-1 ff-risk-pri fs-14 fw-700" href=""><span><i
                                            class="fa-brands fa-facebook-f"></i></span>Facebook</a>
                                <a class="d-flex align-items-center gap-1 ff-risk-pri fs-14 fw-700" href=""><span><i
                                            class="fa-brands fa-linkedin"></i></span>LinkedIn</a>
                                <a class="d-flex align-items-center gap-1 ff-risk-pri fs-14 fw-700" href=""><span><i
                                            class="fa-brands fa-instagram"></i></span>Instagram</a>
                                <a class="d-flex align-items-center gap-1 ff-risk-pri fs-14 fw-700" href=""><span><i
                                            class="fa-brands fa-twitter"></i></span>Twitter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/web/') }}/assets/img/risk_managment/shape/hero.png" alt=""
                    class="hero-shape position-absolute">
            </div>
        </div>
    </div>
    <!-- Hero -->


    <!-- Service Content -->
    <div class="rm-service-content-area pt-60 pb-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="position-relative">
                        <h6 class="risk-sub-text fs-16 ff-risk-pri fw-700 mb-20">Explore How Can I Help You</h6>
                        <h2 class="risk-title risk-color fs-42 ff-risk-pri flh-56 fw-800 mb-20">
                            {!! formateTitle($secondSection->title) !!}
                        </h2>
                        <p class="risk-color-two ff-dmsans fs-16 flh-28 mb-0 fch-50">{{ $secondSection->description }}</p>
                        {{-- <a href="{{ $secondSection->url }}"
                            class="btn risk-outline-btn mt-40 risk-color ff-risk-pri fs-14 fw-700"></a> --}}
                        <img src="{{ asset('storage' . '/' . $secondSection->image) }}" alt="{{ $secondSection->title }}"
                            class="s-one position-absolute">
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('storage' . '/' . $secondSection->image) }}" alt="{{ $secondSection->title }}"
                        class="risk-sc-img img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Service Content -->

    <!--feature service grid section start-->
    <section class="feature-section ptb-120 bg-dark text-white ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h2>{{ __('app.Best Services to Boost Your Business Value') }}</h2>
                        <p>{{ __('app.globally_actualize') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="feature-grid">
                        @foreach ($services as $service)
                            <div class="feature-card  bg-custom-light promo-border-hover border border-2 border-light text-white shadow-sm rounded-custom @if ($loop->first) highlight-card @endif p-5"
                                data-aos="fade-up" data-aos-delay="50">
                                <div class="icon-box d-inline-block rounded-circle bg-primary-soft mb-32">
                                    <i class="fas {{ $service->icon }}"></i>
                                </div>
                                <div class="feature-content">
                                    <h3 class="h5">{{ $service->title }}</h3>
                                    {!! Str::limit($service->description, 300, '...') !!}
                                </div>
                                {{-- <a href="service-single.html"
                                    class="link-with-icon text-decoration-none mt-3">{{ __('app.View_Details') }}<i
                                        class="fas fa-arrow-right"></i></a> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> <!--feature service grid section end-->


    <!--contact us section start-->
    <section class="contact-us ptb-120 position-relative overflow-hidden">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="section-heading" data-aos="fade-up">
                        <h4 class="h5 text-primary">Quick Support</h4>
                        <h2>Get in Touch Today!</h2>
                        <p>Proactively deliver seamless core competencies with scalable. Completely fabricate
                            transparent
                            paradigms. </p>
                    </div>
                    <div class="row justify-content-between pb-5">
                        <div class="col-sm-6 mb-4 mb-md-0 mb-lg-0" data-aos="fade-up" data-aos-delay="50">
                            <div class="icon-box d-inline-block rounded-circle bg-primary-soft">
                                <i class="fas fa-phone fa-2x text-primary"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Call Us</h5>
                                <p>Questions about our product or pricing? Call for support</p>
                                <a href="tel:(415)231-59687" class="read-more-link text-decoration-none"><i
                                        class="fas fa-phone me-2"></i> (415)231-59687</a>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-box d-inline-block rounded-circle bg-danger-soft">
                                <i class="fas fa-headset fa-2x text-danger"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Chat Us</h5>
                                <p>Our support will help you from
                                    <strong>9am to 5pm EST.</strong>
                                </p>
                                <a href="#" class="read-more-link text-decoration-none"><i
                                        class="fas fa-comment me-2"></i> Live Chat Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-7 col-md-12">
                    <div class="register-wrap p-5 bg-white shadow rounded-custom position-relative" data-aos="fade-up"
                        data-aos-delay="150">
                        <form action="#" class="register-form position-relative z-5">
                            <h3 class="mb-5 fw-medium">Fill out the form and we'll be in touch as soon as
                                possible.</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Name" aria-label="name">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Email"
                                            aria-label="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Company website"
                                            aria-label="company-website">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Work email"
                                            aria-label="work-Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="tel" class="form-control" placeholder="Phone number"
                                            aria-label="Phone number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <select class="form-control form-select" name="country" id="country"
                                            required="" data-msg="Please select your country.">
                                            <option value="" selected="" disabled="">Country</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="CA">Canada</option>
                                            <option value="EG">Egypt</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option>
                                            <option value="GR">Greece</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="Ho">Holland</option>
                                            <option value="IT">Italy</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LY">Libya</option>
                                            <option value="OM">Oman</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RO">Romania</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="ES">Spain</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SY">Syria</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="YE">Yemen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" placeholder="Tell us more about your project, needs and budget" style="height: 120px"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label small" for="flexCheckChecked">
                                            Yes, I'd like to receive occasional marketing emails from us. I have the
                                            right to opt out at any time.
                                            <a href="#"> View privacy policy</a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-4 d-block w-100">Get Started
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=" bg-dark position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z--1 py-5"
            style="background: url('{{ asset('assets/web/') }}/assets/img/shape/dot-dot-wave-shape.svg')no-repeat center top">
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
            <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
        </div>
    </section> <!--contact us section end-->


    <!--work process section start-->
    <section class="work-process ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center" data-aos="fade-up">
                        {{-- <h4 class="h5 text-primary">Process</h4> --}}
                        <h2>{{ __('app.We_Follow_Our_Work_Process') }}</h2>
                        <p>Conveniently mesh cooperative services via magnetic outsourcing. Dynamically grow
                            functionalized value whereas accurate e-commerce. </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0"
                        data-aos="fade-up" data-aos-delay="50">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">1</span>
                        </div>
                        <h3 class="h5">{{ __('app.Research') }}</h3>
                        <p class="mb-0">{{ __('app.Uniquely_pursue') }}</p>
                    </div>
                </div>
                <div class="dots-line first"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">2</span>
                        </div>
                        <h3 class="h5">{{ __('app.Designing') }}</h3>
                        <p class="mb-0">{{ __('app.Restore_efficient') }}.</p>
                    </div>
                </div>
                <div class="dots-line first"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-3 mb-lg-0 mb-md-0"
                        data-aos="fade-up" data-aos-delay="150">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">3</span>
                        </div>
                        <h3 class="h5">{{ __('app.Building') }}</h3>
                        <p class="mb-0">{{ __('app.Continually_enhance') }}.</p>
                    </div>
                </div>
                <div class="dots-line first"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-card text-center px-4 py-lg-5 py-4 rounded-custom shadow-hover mb-0"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="process-icon border border-light bg-custom-light rounded-custom p-3">
                            <span class="h2 mb-0 text-primary fw-bold">4</span>
                        </div>
                        <h3 class="h5">{{ __('app.Deliver') }}</h3>
                        <p class="mb-0">{{ __('app.Uniquely_for_compelling') }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--work process section end-->

    <!-- Newsletter Start -->
    <section class="digi-news-letter ah-bg pt-60 pb-120">
        <div class="container">
            <div class="bg-white text-light rounded-custom p-4 p-md-5 p-lg-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="digi-newsletter">
                            <div>
                                <span class="span-arrow text-pink">Best Yout website</span>
                                <img src="{{ asset('assets/web/') }}/assets/img/arro-right.svg" alt="arrow">
                            </div>
                            <h2>Test your Website for Free with Quiety</h2>
                            <p>
                                Intrinsicly cultivate user-centric collaboration and idea-sharing after value-added
                                processes
                                repurpose unique models and global schemas.
                            </p>
                            <form class="mt-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input required type="text" class="form-control bordered-input-st"
                                                placeholder="Name" aria-label="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input required type="tel" class="form-control bordered-input-sec"
                                                placeholder="Phone number" aria-label="Phone number">
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                                                                                            <button type="submit" class="btn btn-primary mt-4 d-block w-100">Get Started
                                                                                            </button>
                                                                                        </div> -->
                                </div>
                                <div class="position-relative digi-news-form">
                                    <input required type="text" class="form-control ah-input-bg"
                                        placeholder="Website Url">
                                    <button class="digi-news-button">Analysis Webiste</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="dg-news-img text-end">
                            <img src="{{ asset('assets/web/') }}/assets/img/d-pie.png" class="img-fluid text-end"
                                alt="pie">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter End -->


    <!--integration section start-->
    <section class="integration-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading" data-aos="fade-up">
                        <h4 class="h5 text-primary">Integration</h4>
                        <h2>We Collaborate with Top Software Company</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="text-lg-end mb-5 mb-lg-0" data-aos="fade-up">
                        <a href="integrations.html" class="btn btn-primary">View All Integrations</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="integration-wrapper position-relative w-100">
                        <!--animated shape start-->
                        <ul
                            class="position-absolute animate-element parallax-element shape-service z--1 d-none d-lg-none d-xl-block">

                            <li class="layer" data-depth="0.02">
                                <img src="{{ asset('assets/web/') }}/assets/img/color-shape/feature-2.svg" alt="shape"
                                    class="img-fluid position-absolute color-shape-2 z-5">
                            </li>
                            <li class="layer" data-depth="0.03">
                                <img src="{{ asset('assets/web/') }}/assets/img/color-shape/feature-3.svg" alt="shape"
                                    class="img-fluid position-absolute color-shape-3">
                            </li>
                        </ul>
                        <!--animated shape end-->
                        <ul class="integration-list list-unstyled mb-0">
                            @foreach ($brands as $brand)
                                <li data-aos="fade-up" data-aos-delay="50">
                                    <div class="single-integration bg-white">
                                        <img src="{{ asset('storage') . '/' . $brand->image }}" alt="integration"
                                            class="img-fluid">
                                        <h6 class="mb-0 mt-4">{{ $brand->name }}</h6>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--integration section end-->

    <!--customer review tab section start-->
    <section class="testimonial-section ptb-120 bg-light-subtle">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center" data-aos="fade-up">
                        <h4 class="h5 text-primary">Testimonial</h4>
                        <h2>What They Say About Us</h2>
                        <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets pontificate
                            alternative architectures with accurate schemas.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                        <div class="swiper testimonialSwiper">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials as $testimonial)
                                    <div class="swiper-slide">
                                        <div class="border border-2 p-5 rounded-custom position-relative">
                                            <img src="{{ asset('assets/web/') }}/assets/img/testimonial/quotes-dot.svg"
                                                alt="quotes" width="100"
                                                class="img-fluid position-absolute left-0 top-0 z--1 p-3">
                                            <div class="d-flex mb-32 align-items-center">
                                                <img src="{{ asset('storage' . '/' . $testimonial->image) }}"
                                                    class="img-fluid me-3 rounded" width="60" alt="user">
                                                <div class="author-info">
                                                    <h6 class="mb-0">{{ $testimonial->name }}</h6>
                                                    <small>{{ $testimonial->job_title }}</small>
                                                </div>
                                            </div>
                                            <blockquote>
                                                {!! $testimonial->description !!}
                                            </blockquote>
                                            <ul class="review-rate mb-0 mt-2 list-unstyled list-inline"
                                                @for ($i = 1; $i < $testimonial->rank; $i++) <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li> @endfor
                                                </ul>
                                                <img src="{{ asset('assets/web/') }}/assets/img/testimonial/quotes.svg"
                                                    alt="quotes"
                                                    class="position-absolute right-0 bottom-0 z--1 pe-4 pb-4">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-nav-control">
                            <span class="swiper-button-next"></span>
                            <span class="swiper-button-prev"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--customer review tab section end-->

    <!-- Projects -->
    {{-- <div class="sections pb-0">
        <div class="sections__head">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7 col-xxl-6">
                        <h2 class="text-center mb-0 heading-text">
                            {{ __('app.create_experience') }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-fluid-fixed">
            <div class="row g-4">
                <div class="col-12">
                    <div class="project-gallery">
                        <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap">
                            @foreach ($projects as $project)
                                <a href="{{ $project->url }}" class="d-inline-block">
                                    <img src="{{ asset('storage') . '/' . $project->image }}" alt="{{ $project->title }}"
                                        class="img-fluid">
                                </a>
                            @endforeach
                        </div>
                        <button class="btn btn-primary project-gallery__btn">
                            All Templates
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /Projects -->



    <!--blog section start-->
    <section class="home-blog-section ptb-120 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading text-center">
                        {{-- <h4 class="text-primary h5">Blog</h4> --}}
                        <h2>Our Latest News and Update</h2>
                        <p>Assertively maximize cost effective methods of iterate team driven manufactured products
                            through equity invested via customized benefits. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="{{ route('web.show.blog', ['slug' => $blog->slug]) }}" class="article-img">
                                <img src="{{ asset('storage' . '/' . $blog->image) }}" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;"
                                        class="d-inline-block text-warning badge bg-warning-soft">{{ $blog->category?->name }}</a>
                                </div>
                                <a href="{{ route('web.show.blog', ['slug' => $blog->slug]) }}">
                                    <h2 class="h5 article-title limit-2-line-text">{{ $blog->title }}</h2>
                                </a>
                                <p class="limit-2-line-text">{!! Str::limit($blog->description, 150, '...') !!}</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        {{-- <div class="avatar">
                                        <img src="{{ asset('assets/web/') }}/assets/img/testimonial/6.jpg" alt="avatar"
                                            width="40" class="img-fluid rounded-circle me-3">
                                    </div> --}}
                                        <div class="avatar-info">
                                            {{-- <h6 class="mb-0 avatar-name">Jane Martin</h6> --}}
                                            <span
                                                class="small fw-medium text-muted">{{ $blog->created_at->format('F d, Y') }}</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="text-center mt-5">
                    <a href="{{ route('web.blogs') }}" class="btn btn-primary">{{ __('app.View_All_Blogs') }}</a>
                </div>
            </div>
        </div>
    </section> <!--blog section end-->

    <!-- Faq -->
    <div class="it-company-faq-area ptb-120 position-relative overflow-hidden">
        <img src="{{ asset('assets/web/') }}/assets/img/it_company/shape/faq.png" alt=""
            class="s-one position-absolute">
        <img src="{{ asset('assets/web/') }}/assets/img/it_company/shape/faq_2.png" alt=""
            class="s-two position-absolute">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="it-company-title it-company-color fs-40 fw-600 flh-56 mb-40">Frequently Asked
                            Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($faqs->chunk(3) as $faqGroup)
                    <div class="col-lg-4">
                        <div class="accordion ca-accordion" id="technologicalQuery">
                            @foreach ($faqGroup as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $faq->id }}"
                                            aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $faq->id }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $faq->id }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        data-bs-parent="#technologicalQuery">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Faq -->
@endsection
@section('js')
@endsection
