@extends('website.layouts.master')
@section('title')
Insights Page
@endsection
@section('content')
    <div class="page_content">
        <!-- start_page_content_section -->
        <div class="main_section_page_content">
            <div class="container">
                <div class="bread_crumb_div">
                    <a href="#" class="ref_bread_crumb">Home <i class="bi bi-chevron-double-right"></i></a>
                    <span class="span_name">Insights</span>
                </div>
                <div class="why_choose_us">
                    <h1>News & Insights</h1>
                </div>
            </div>
        </div>
        <!-- end_page_content_section -->

        <!--start_search_insight_section -->
        <div class="section_marg">
            <div class="container">
                <div class="search_insight">
                    <input type="text" placeholder="Search">
                    <i class="bi bi-search"></i>
                </div>

                <div class="tabs_section section_marg">
                    <div class="d-flex align-items-start">

                        <div class="nav  tabs_insight  nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link btn_link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">Industry Insight</button>
                            <button class="nav-link btn_link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Career Advice</button>
                            <button class="nav-link btn_link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-disabled" type="button" role="tab"
                                aria-controls="v-pills-disabled" aria-selected="false">Success Stories</button>
                            <button class="nav-link btn_link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">QuickfirmX News in Egypt</button>
                            <button class="nav-link btn_link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Expert Opinions</button>
                            <button class="nav-link btn_link" id="v-pills-new-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new"
                                aria-selected="false">QuickfirmX Quick Tips</button>
                        </div>

                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">
                                <div class="grid_tabs">
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>

                                                <a href="blog.html">Read More</a>
                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>
                                                <a href="blog.html">Read More</a>

                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>

                                                <a href="blog.html">Read More</a>
                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>
                                                <a href="blog.html">Read More</a>

                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>

                                                <a href="blog.html">Read More</a>
                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>
                                                <a href="blog.html">Read More</a>

                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">
                                <div class="grid_tabs">
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>

                                                <a href="blog.html">Read More</a>
                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>
                                                <a href="blog.html">Read More</a>

                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>

                                                <a href="blog.html">Read More</a>
                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>
                                                <a href="blog.html">Read More</a>

                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>

                                                <a href="blog.html">Read More</a>
                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                    <div class="blog_card">
                                        <img src="{{ asset('assets/web') }}/content/images/image.png">
                                        <div class="blog_card_details">
                                            <div class="p_flex">
                                                <p class="">At QuickFirmX, we’re committed to making your job
                                                    search faster, easier, and more
                                                    rewarding. Here’s
                                                    what makes us stand out:
                                                    At QuickFirmX, we’re committed to making your job search faster,
                                                    easier,
                                                    and more
                                                    rewarding. Here’s
                                                    what makes us stand out:</p>
                                                <a href="blog.html">Read More</a>

                                            </div>
                                            <p class="p_date">May 20th 2020</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0"></div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0"></div>
                            <div class="tab-pane fade" id="v-pills-new" role="tabpanel"
                                aria-labelledby="v-pills-new-tab" tabindex="0"></div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- end_search_insight_section -->
        <div>

        </div>
    </div>
@endsection
