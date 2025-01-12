@extends('website.layouts.master')
@section('title')
AboutUs:Why Choose Us Page
@endsection
@section('content')
    <div class="page_content">
        <!-- start_page_content_section -->
        <div class="main_section_page_content">
            <div class="container">
                <div class="bread_crumb_div">
                    <a href="index.html" class="ref_bread_crumb">Home <i class="bi bi-chevron-double-right"></i></a>
                    <span class="span_name">About us</span>
                </div>
                <div class="why_choose_us">
                    <h1>Why Choose QuickfirmX?</h1>
                    <p>Driven by innovation, powered by people. Explore why we’re Egypt’s top choice for call center jobs
                        and
                        trusted partners for employers.</p>
                </div>
            </div>
        </div>
        <!-- end_page_content_section -->

        <!-- start_Pioneering_Call_sction -->
        <div class="section_marg">
            <div class="container">
                <div class="pionner_head_section">
                    <h1>Pioneering Call Center Careers in Egypt</h1>
                    <p>At QuickFirmX, we’re pioneers in call center recruitment in Egypt. We’re here to connect you to
                        opportunities
                        that matter—jobs that value your skills and drive your growth. Whether you’re taking your first step
                        or
                        aiming
                        higher, we make the journey simple, fast, and worth it</p>
                </div>
                <div class="flex_sec">
                    <div class="top_div">
                        <div class="about_img">
                            <img src="{{ asset('assets/web') }}/content/images/image.png">
                        </div>
                        <div class="titling_about">
                            <h1>Egypt’s Choice for Call Center
                                Careers</h1>
                            <div class="p_flex">
                                <p class="collapsible">At QuickFirmX, we’re committed to making your job search faster,
                                    easier, and more
                                    rewarding. Here’s
                                    what makes us stand out:
                                    At QuickFirmX, we’re committed to making your job search faster, easier, and more
                                    rewarding. Here’s
                                    what makes us stand out:</p>
                                <span class="see-more-btn">Read More</span>
                            </div>

                        </div>
                    </div>
                    <div class="top_div revers_sec">
                        <div class="about_img">
                            <img src="{{ asset('assets/web') }}/content/images/image (1).png">
                        </div>
                        <div class="titling_about">
                            <h1>Our Approach</h1>
                            <div class="p_flex">
                                <p class="collapsible">At QuickFirmX, we’re committed to making your job search faster,
                                    easier, and more
                                    rewarding. Here’s
                                    what makes us stand out:At QuickFirmX, we’re committed to making your job search faster,
                                    easier, and
                                    more
                                    rewarding. Here’s
                                    what makes us stand out:</p>
                                <span class="see-more-btn">Read More</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end_Pioneering_Call_sction -->

        <!-- start_Hall_Of_Achievements -->
        <div class="section_marg">
            <div class="container">
                <div class="Hall_Achievements_head">
                    <h1>Hall Of Achievements</h1>
                    <p>Every number tells a story of progress, trust, and success. At QuickFirmX, our milestones reflect the
                        lives
                        we’ve impacted, the companies we’ve supported, and the opportunities we’ve created. Here’s what
                        we’ve
                        achieved together</p>
                </div>

                <div class="grid_icons">
                    <div class="item_div">
                        <img src="{{ asset('assets/web') }}/content/images/small_icon/hand.png">
                        <h2>+10</h2>
                        <p>Bringing diversity and opportunity
                            to every corner of the market</p>
                    </div>

                    <div class="item_div">
                        <img src="{{ asset('assets/web') }}/content/images/small_icon/hands.png">
                        <h2>+15</h2>
                        <p>Collaborating with trusted employers to create opportunities that matter</p>
                    </div>

                    <div class="item_div">
                        <img src="{{ asset('assets/web') }}/content/images/small_icon/img1.png">
                        <h2>+300</h2>
                        <p>Careers started, goals achieved, and futures built.</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- end_Hall_Of_Achievements -->

        <!-- start_Search_to_Success_section -->
        <div class="section_marg">
            <div class="container">
                <div class="Search_Success_section">
                    <div class="Search_Success">
                        <h1>From Search to Success</h1>
                        <p>Tired of long, complicated job hunts? At QuickFirmX, we know how it feels. That’s why we’ve
                            created a
                            faster, smarter process to help you land your next role—without the stress</p>
                    </div>

                    <div class="grid_icons grid_bottom">
                        <div class="item_div">
                            <img src="{{ asset('assets/web') }}/content/images/small_icon/img2.png">
                            <h2>Apply with Ease</h2>
                            <p>A few clicks are all it takes. Browse roles tailored to your skills, submit your application,
                                and let
                                us do the rest</p>
                        </div>

                        <div class="item_div">
                            <img src="{{ asset('assets/web') }}/content/images/small_icon/hands_clock.png">
                            <h2>Interview Faster</h2>
                            <p>We connect you directly with employers who are ready to hire—no delays, no guesswork, just
                                results.</p>
                        </div>

                        <div class="item_div">
                            <img src="{{ asset('assets/web') }}/content/images/small_icon/rocket.png">
                            <h2>Start with Confidence</h2>
                            <p>Receive fast offers, enjoy seamless onboarding, and get the support you need to hit the
                                ground running
                                from day one</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- start_Search_to_Success_section -->
    </div>
@endsection
