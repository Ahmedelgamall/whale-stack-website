<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="javascript:;">
                    <span class="brand-logo">
                        <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" height="24">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                    y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                    y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                        <path class="text-primary" id="Path"
                                            d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                            style="fill:currentColor"></path>
                                        <path id="Path1"
                                            d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                            fill="url(#linearGradient-1)" opacity="0.2"></path>
                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                        </polygon>
                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                        </polygon>
                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                            points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <h2 class="brand-text"> {{ getSettingOf('website_name') }} </h2>
                </a></li>
            {{--            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i --}}
            {{--                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i --}}
            {{--                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" --}}
            {{--                        data-ticon="disc"></i></a></li> --}}
        </ul>
    </div>

    <div class="shadow-bottom"></div>

    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" navigation-header">
                <span data-i18n="Apps &amp; Pages">
                    Apps &amp; Pages
                </span>
                <i data-feather="more-horizontal"></i>
            </li>

            <li class="nav-item {{ request()->route()->getName() == 'dashboard' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('dashboard') }}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Home">
                        HOME PAGE
                    </span>
                </a>
            </li>


            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i class="fa fa-users-cog"></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">Admins</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('admins') }} "><a class="d-flex align-items-center"
                            href="{{ route('admins.index') }}"><i class="fa  fa-user-shield"></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Admins </span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i class="fa fa-file-alt"></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">Website Texts</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('static_texts') }} "><a class="d-flex align-items-center"
                            href="{{ route('static_texts.index') }}"><i class="fa fa-file-alt"></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Website Texts</span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather='bar-chart-2'></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">Blogs</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('categories') }} "><a class="d-flex align-items-center"
                            href="{{ route('categories.index') }}"><i data-feather='list'></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Categories </span></a>
                    </li>
                    <li class="nav-item {{ active('blogs') }} "><a class="d-flex align-items-center"
                            href="{{ route('blogs.index') }}"><i data-feather='bar-chart-2'></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Blogs </span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather='list'></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">Projects</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('project-categories') }} "><a class="d-flex align-items-center"
                            href="{{ route('project-categories.index') }}"><i data-feather='grid'></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Project Categories </span></a>
                    </li>
                    <li class="nav-item {{ active('projects') }} "><a class="d-flex align-items-center"
                            href="{{ route('projects.index') }}"><i data-feather='list'></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Projects </span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather='cloud'></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">Services</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('services') }} "><a class="d-flex align-items-center"
                            href="{{ route('services.index') }}"><i data-feather='cloud'></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Services </span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather='star'></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">Brands</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('brands') }} "><a class="d-flex align-items-center"
                            href="{{ route('brands.index') }}"><i data-feather='star'></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Brands </span></a>
                    </li>

                </ul>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather='help-circle'></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">FAQS</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('faqs') }} "><a class="d-flex align-items-center"
                            href="{{ route('faqs.index') }}"><i data-feather='help-circle'></i><span
                                class="menu-title text-truncate" data-i18n="Languages">FAQS </span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather='activity'></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">Testimonials</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('testimonials') }} "><a class="d-flex align-items-center"
                            href="{{ route('testimonials.index') }}"><i data-feather='activity'></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Testimonials </span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather="search" title="SEO Analysis"></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">SEO</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('seo_settings') }} "><a class="d-flex align-items-center"
                            href="{{ route('seo_settings.index') }}"><i data-feather="search"
                                title="SEO Analysis"></i><span class="menu-title text-truncate"
                                data-i18n="Languages">SEO </span></a>
                    </li>
                </ul>

            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather='globe'></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">Languages</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('languages') }} "><a class="d-flex align-items-center"
                            href="{{ route('languages.index') }}"><i data-feather='globe'></i><span
                                class="menu-title text-truncate" data-i18n="Languages">Languages </span></a>
                    </li>
                </ul>

            </li>


            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i class="fa fa-cogs"></i><span class="menu-title text-truncate"
                        data-i18n="Roles&Permissions">Settings</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item {{ active('general') }} "><a class="d-flex align-items-center"
                            href="{{ route('settings.index', 'general') }}"><i class="fa  fa-layer-group"></i><span
                                class="menu-title text-truncate" data-i18n="Languages"> General Settings </span></a>
                    </li>
                    <li class="nav-item {{ active('media') }} "><a class="d-flex align-items-center"
                            href="{{ route('settings.index', 'media') }}"><i data-feather='feather'></i><span
                                class="menu-item text-truncate" data-i18n="List">Media Settings</span></a></li>
                    <li class="nav-item {{ active('social') }} "><a class="d-flex align-items-center"
                            href="{{ route('settings.index', 'social') }}"><i
                                class="fa  fa-hand-holding-water"></i><span class="menu-title text-truncate"
                                data-i18n="Roasts">Social Settings </span></a>
                    </li>

                    {{-- <li class="nav-item {{ active('seo') }} "><a class="d-flex align-items-center"
                            href="{{ route('settings.index', 'seo') }}"><i class="fa  fa-product-hunt"></i><span
                                class="menu-title text-truncate" data-i18n="products">SEO Settings </span></a>
                    </li> --}}
                </ul>
            </li>

        </ul>
    </div>

</div>
<!-- END: Main Menu-->
