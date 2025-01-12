<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('meta')
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/web') }}/content/images/logo-icon.jpeg" />
    <link rel="stylesheet" href="{{ asset('assets/web') }}/content/css/vendors/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/web') }}/content/css/vendors/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('assets/web') }}/content/css/vendors/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/web') }}/content/css/style.css" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin') }}/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin') }}/app-assets/vendors/css/extensions/toastr.min.css">
</head>

<body>

    <div class="loader-wrapper">
        <img src="{{ asset('assets/web') }}/content/images/small_icon/logo.svg" alt="">
        <div class="loader"></div>
    </div>

    <!--start_header  -->
    @include('website.layouts.includes.header')
    <!--end_header  -->
    @yield('content')
    {{-- footer --}}
    @include('website.layouts.includes.footer')
    <!-- responsive_mobil_menue -->
    <nav class="header__menu--navigation">
        <div class="menu-backdrop"></div>

        <ul class="header__menu--wrapper d-flex">
            <div class="btn_close">
                <i class="bi bi-x-circle"></i>
            </div>
            <ul class="mobile_ul">
                <li class="mobile_li"><a href="#" class="mobile_link">Home</a></li>
                <li class="mobile_li">
                    <a href="#" class="mobile_link">About<i class="bi bi-chevron-down"></i></a>
                    <ul class="sub_mobile_menu">
                        <li><a href="why choose us.html">why choose us</a></li>
                        <li><a href="Our Culture.html">Our cluture</a></li>
                        <li><a href="Leader_Team.html">Leadership Team</a></li>
                    </ul>
                </li>
                <li class="mobile_li"><a href="Careers.html" class="mobile_link">Careers</a></li>
                <li class="mobile_li"><a href="Insights.html" class="mobile_link">Insights</a></li>
                <li class="mobile_li"><a href="Contact.html" class="mobile_link">Cotact Us</a></li>


            </ul>
        </ul>
    </nav>
    <script src="{{ asset('assets/admin/app-assets/vendors/js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/web') }}/content/js/vendors/all.min.js"></script>
    <script src="{{ asset('assets/web') }}/content/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/web') }}/content/js/vendors/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/admin') }}/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets/admin/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/js-circle-progress/dist/circle-progress.min.js" type="module"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".arrow_next",
                prevEl: ".arrow_prev",
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    </script>
    <script src="{{ asset('assets/web') }}/content/js/scripts.js"></script>
    @include('admin.includes.swal')
    @yield('js')
</body>

</html>
