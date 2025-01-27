<!DOCTYPE html>
<html lang="ar" dir="ltr" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags">
    <meta name="twitter:creator" content="@themetags">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta name="twitter:description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta property="og:description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('assets/web/') }}/assets/images/homePage/logo.png" type="image/png"
        sizes="16x16">


    @yield('meta')

    <!-- Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
    <!-- Font -->

    <!--build:css-->
    <!-- endbuild -->
    <link href="{{ asset('web/css/styles-front-rtl.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/web/') }}/assets/css/custom-rtl.css">
    <link rel="stylesheet" href="{{ asset('assets/web/') }}/assets/css/main-rtl.css">
    <!--custom css start-->
    <!--custom css end-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin') }}/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin') }}/app-assets/vendors/css/extensions/toastr.min.css">
    @yield('css')
    @if (app()->getLocale() == 'en')
        <style>
            .container {
                direction: ltr !important;
            }
        </style>
    @elseif (app()->getLocale() == 'ar')
        <style>
            .container {
                direction: rtl !important;
            }
        </style>
    @endif
</head>

<body>

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="{{ asset('assets/web/') }}/assets/images/homePage/logo.png" alt="logo"
                class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header section start-->
        <!--header start-->
        @include('website.layouts.parts.header')
        <!--header end--> <!--header section end-->
        @yield('content')
        <!--footer section start-->
        @include('website.layouts.parts.footer')
        <!--footer section end-->


    </div>



    <!--build:js-->
    <script src="{{ asset('assets/admin/app-assets/vendors/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/web/') }}/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/web/') }}/assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/web/') }}/assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets/web/') }}/assets/js/vendors/parallax.min.js"></script>
    <script src="{{ asset('assets/web/') }}/assets/js/vendors/aos.js"></script>
    <script src="{{ asset('assets/web/') }}/assets/js/vendors/massonry.min.js"></script>
    <script src="{{ asset('assets/web/') }}/assets/js/app.js"></script>
    <!--endbuild-->
    <script src="{{ asset('assets/admin') }}/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets/admin/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    @yield('js')
    @include('admin.includes.swal')

</body>

</html>
