@extends('website.layouts.master')
@section('title')
AboutUs:Our Cluture Page
@endsection
@section('content')
    <div class="page_content">
        <!-- start_page_content_section -->
        <div class="main_section_page_content">
            <div class="container">
                <div class="bread_crumb_div">
                    <a href="#" class="ref_bread_crumb">Home <i class="bi bi-chevron-double-right"></i></a>
                    <span class="span_name">About us</span>
                </div>
                <div class="why_choose_us">
                    <h1>Building Better Careers Together</h1>
                    <p>At QuickFirmX, we help you find great jobs and grow your career. Discover our mission, values,
                        and more to start your career journey today!</p>
                </div>
            </div>
        </div>
        <!-- end_page_content_section -->

        <!-- start_Pioneering_Call_sction -->
        <div class="section_marg">
            <div class="container">
                <div class="pionner_head_section">
                    <h1>We’re Building Careers and Creating Impact.</h1>
                </div>
                <div class="flex_sec">
                    <div class="top_div revers_sec culture">
                        <div class="about_img">
                            <img src="{{ asset('assets/web') }}/content/images/imag1.png">
                        </div>
                        <div class="titling_about">
                            <h1>Building Call Center Careers and Changing Lives</h1>
                            <p>At QuickFirmX, we offer equal career opportunities in the call center industry. We help
                                job seekers with the resources they need to reach their full potential. Our focus is on
                                fostering professional growth and helping individuals build successful careers in call
                                center jobs with top employers.
                            </p>
                        </div>
                    </div>
                    <div class="top_div culture_top">
                        <div class="about_img">
                            <img src="{{ asset('assets/web') }}/content/images/imag2.png">
                        </div>
                        <div class="titling_about">
                            <h1>Making a Difference Together</h1>
                            <p>At QuickFirmX, we believe success is more than just work; it's about making a positive
                                impact. We support people in Egypt and beyond, creating opportunities for career growth
                                and economic development that help local communities thrive.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end_Pioneering_Call_sction -->

        <!-- start_Our_Purpose_Principles -->
        <div class="section_marg">
            <div class="container">
                <div class="Our_Purpose">
                    <h1>Our Purpose and Principles</h1>
                    <div class="grid_Principles">
                        <div class="pricpil_div">
                            <img class="bord_img" src="{{ asset('assets/web') }}/content/images/new_border_img.png">
                            <div class="pricipl_cont">
                                <img src="{{ asset('assets/web') }}/content/images/small_icon/eye.png">
                                <h2>Our Vision</h2>
                                <p>By 2030, QuickFirmX wants to be a global leader in multilingual staffing, starting in
                                    Egypt and growing worldwide. We aim to create lasting job opportunities that help
                                    people grow, build careers, and support business success. We will connect talent
                                    with opportunities through innovation, development, and high-quality service.</p>
                            </div>
                        </div>
                        <div class="pricpil_div">
                            <img class="bord_img" src="{{ asset('assets/web') }}/content/images/new_border_img.png">
                            <div class="pricipl_cont">
                                <img src="{{ asset('assets/web') }}/content/images/small_icon/message_arrow.png">
                                <h2>Our Mission</h2>
                                <p>At QuickFirmX, we make job searches quicker and easier. We connect talented people
                                    with multilingual call center and customer service jobs in Egypt. Our goal is to
                                    help candidates grow their skills and find the right job. We use smart recruitment
                                    methods to match the best talent with top employers, ensuring success for both job
                                    seekers and companies.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pricpil_div">
                        <img class="bord_img" src="{{ asset('assets/web') }}/content/images/new_border_img.png">
                        <div class="pricipl_cont">
                            <img src="{{ asset('assets/web') }}/content/images/small_icon/hand1.png">
                            <h2>Our Values</h2>
                            <h3>Integrity & Transparency</h3>
                            <p>At QuickFirmX, we build trust by being honest and clear in our communication with both
                                job seekers and employers.</p>
                            <h3>Diversity & Inclusion</h3>
                            <p>At QuickFirmX, we welcome everyone and create equal chances for all. We believe that
                                having different backgrounds and ideas makes us stronger and more successful.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- end_Our_Purpose_Principles -->

        <!-- start_Employee_Growth -->
        <div class="section_marg">
            <div class="container">
                <div class="Employee_Growth_head">
                    <h1>Employee Growth, Recognition, and Well-being</h1>
                    <p>At QuickFirmX, we invest in our people by encouraging growth, celebrating achievements, and
                        focusing on well-being. Through development opportunities, recognition, and wellness programs,
                        we make sure our team thrives personally and professionally.</p>
                </div>

                <div class="grid_icons grid_bottom">
                    <div class="item_div">
                        <img src="{{ asset('assets/web') }}/content/images/small_icon/hand_small.png">
                        <h2>Caring for Employee Well-Being</h2>
                        <p>At QuickFirmX, we believe a healthy team is key to success. We offer wellness programs,
                            flexible schedules, and resources to support the physical, mental, and emotional well-being
                            of every employee.</p>
                    </div>

                    <div class="item_div">
                        <img src="{{ asset('assets/web') }}/content/images/small_icon/arrow_up.png">
                        <h2>Professional Growth & Development</h2>
                        <p>At QuickFirmX, we help employees grow and succeed. With training, mentorship, and leadership
                            programs, we offer chances for learning and career growth that match each team member’s
                            goals.</p>
                    </div>

                    <div class="item_div">
                        <img src="{{ asset('assets/web') }}/content/images/small_icon/cup.png">
                        <h2>Celebrating Achievements</h2>
                        <p>At QuickFirmX, we celebrate success in all forms. We recognize every achievement, big or
                            small, and make sure our team’s hard work is appreciated. This creates a positive,
                            motivating culture.</p>
                    </div>
                </div>

            </div>

        </div>
        <!-- end_Employee_Growth -->
        <!-- start_Quick_Hires_section -->
        <div class="bg_Quick_Hires"
            style="background-image: url({{ asset('assets/web') }}/content/images/hero_section_bg.png);">
            <div class="container">
                <div class="hero_section_titles">
                    <h1>Quick Hires, Big Futures – We Make
                        It happen</h1>
                    <p>At QuickFirmX, we believe every job is a step toward a better future. We connect job seekers with
                        top call center employers in Egypt. Our focus is on quick and reliable hiring. We’re committed
                        to offering real career opportunities in the call center industry, helping you build the career
                        you deserve.</p>

                    <a href="#" class="explore_btn Opportunities">Explore Opportunities</a>
                </div>
            </div>
        </div>

        <!-- end_Quick_Hires_section -->

    </div>
@endsection
