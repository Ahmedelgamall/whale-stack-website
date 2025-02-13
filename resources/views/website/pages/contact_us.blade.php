@extends('website.layouts.master')
<?php $seo = getMetaOf(App\Enums\PageType::CONTACT_US); ?>
@section('title')
    {{ isset($seo) ? $seo->meta_title : 'Contact Us Page' }}
@endsection
@section('meta')
    <meta name="description" content="{{ isset($seo) ? $seo->meta_description : '' }}">
    <meta name="keywords" content="{{ isset($seo) ? $seo->meta_keyword : '' }}">
    <meta name="author" content="Ahmed Elgamal">
@endsection
@section('css')
@endsection
@section('content')
    <!--page header section start-->
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('{{ asset('assets/web/') }}/assets/img/page-header-bg.svg')no-repeat bottom left">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h1 class="display-5 fw-bold">{{ __('app.Contact Us') }}</h1>
                    <p class="lead">{{ __('app.Seamlessly') }}.</p>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <!--page header section end-->

    <!--contact us promo section start-->
    <section class="contact-promo ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div
                        class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                        <span class="fas fa-comment fa-3x text-primary"></span>
                        <div class="contact-promo-info mb-4">
                            <h5>{{ __('app.Chat with us') }}</h5>
                            <p>{{ __('app.We\'ve got live Social Experts waiting to help you') }} <strong>{{ __('app.monday to friday') }}</strong> {{ __('app.from') }}
                                <strong>{{ __('app.9am to 5pm EST') }}.</strong>
                            </p>
                        </div>
                        <a href="mailto:{{ getSettingOf('website_email') }}" class="btn btn-link mt-auto">{{ __('app.Chat with us') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div
                        class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                        <span class="fas fa-envelope fa-3x text-primary"></span>
                        <div class="contact-promo-info mb-4">
                            <h5>{{ __('app.Email Us') }}</h5>
                            <p>{{ __('app.Simple drop us an email at') }} <strong>{{ getSettingOf('website_email') }}</strong>
                                {{ __('app.and you\'ll receive a reply within 24 hours') }}</p>
                        </div>
                        <a href="mailto:{{ getSettingOf('website_email') }}" class="btn btn-primary mt-auto">{{ __('app.Email Us') }}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div
                        class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                        <span class="fas fa-phone fa-3x text-primary"></span>
                        <div class="contact-promo-info mb-4">
                            <h5>{{ __('app.Give us a call') }}</h5>
                            <p>{{ __('app.Give_us') }} <strong>{{ __('app.monday to frida') }}y</strong> {{ __('app.from') }}
                                <strong>{{ __('app.9am to 5pm EST') }}.</strong>
                            </p>
                        </div>
                        <a href="tel:{{ getSettingOf('website_phone') }}" class="btn btn-link mt-auto">{{ getSettingOf('website_phone') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo section end-->

    <!--contact us form start-->
    <section class="contact-us-form pt-60 pb-120"
        style="background: url('{{ asset('assets/web/') }}/assets/img/shape/contact-us-bg.svg')no-repeat center bottom">
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-heading">
                        <h2>{{ __('app.Talk to Our Sales') }}</h2>
                        <p>{{ __('app.Collaboratively promote') }}.</p>
                    </div>
                    <form id="contactForm" class="register-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="firstName" class="mb-1">{{ __('app.First name') }} <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="first_name" class="form-control" id="firstName" required
                                        placeholder="{{ __('app.First name') }}" aria-label="First name">
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <label for="lastName" class="mb-1">{{ __('app.Last name') }}</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="last_name" class="form-control" id="lastName" placeholder="{{ __('app.Last name') }}"
                                        aria-label="Last name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="phone" class="mb-1">{{ __('app.Phone') }} <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="phone" class="form-control" id="phone" required placeholder="{{ __('app.Phone') }}"
                                        aria-label="Phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="mb-1">{{ __('app.Email') }}<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input type="email" name="email" class="form-control" id="email" required placeholder="{{ __('app.Email') }}"
                                        aria-label="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="yourMessage" class="mb-1">{{ __('app.Message') }} <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <textarea class="form-control" name="message" id="yourMessage" required placeholder="{{ __('app.How can we help you?') }}" style="height: 120px"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">{{ __('app.Get in Touch') }}</button>
                    </form>
                </div>
                <div class="col-lg-5 col-md-10">
                    <div class="contact-us-img">
                        <img src="{{ asset('assets/web/') }}/assets/img/contact-us-img-2.svg" alt="contact us"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us form end-->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(event) {
                event.preventDefault();

                // Get the submit button
                var $submitButton = $(this).find('button[type="submit"]');

                // Disable button and change text
                $submitButton.prop('disabled', true).text('Sending...');

                $.ajax({
                    url: '{{ route('contact.submit') }}',
                    method: 'POST',
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                    },
                    success: function(response) {
                        if (response.success) {
                            sweetAlert('success', 'Message sent successfully!');
                            $('#contactForm')[0].reset();
                        } else if (response.errors) {
                            sweetAlert('error', 'Validation Error: ' + JSON.stringify(response
                                .errors));
                        } else {
                            sweetAlert('error', 'An error occurred. Please try again.');
                        }
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status ===
                            422) { // 422 is the status code for validation errors in Laravel
                            const errors = xhr.responseJSON.errors;

                            // Iterate through the errors and display them
                            let errorMessages = '';
                            for (const field in errors) {
                                if (errors.hasOwnProperty(field)) {
                                    errorMessages += errors[field].join('<br>') + '<br>';
                                }
                            }

                            sweetAlert('error', errorMessages)
                        } else {

                            sweetAlert('error', 'Something went wrong. Please try again.')

                        }
                    },
                    complete: function() {
                        // Re-enable button and restore text
                        $submitButton.prop('disabled', false).text('Send Message');
                    }
                });
            });
        });
    </script>
@endsection
