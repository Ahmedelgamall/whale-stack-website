@extends('website.layouts.master')
@section('title')
AboutUs:Leadership Team Page
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
                    <h1>The Hearts of QuickFirmX</h1>
                    <p>Meet the passionate individuals who bring QuickFirmX to life. Our leadership team is committed to
                        driving innovation, fostering collaboration, and creating a culture of excellence. Together,
                        we’re building brighter futures for talented individuals and forward-thinking employers.</p>
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
                    <div class="top_div revers_sec">
                        <div class="about_img">
                            <img src="{{ asset('assets/web') }}/content/images/leaders.png">
                        </div>
                        <div class="titling_about">
                            <h1>Behind the Success</h1>
                            <p>At QuickFirmX, our success is built on the dedication and expertise of our team. Every
                                member plays a critical role in connecting skilled individuals with top employers in the
                                call center industry. We’re proud to be a trusted partner, guiding career journeys and
                                helping employers build thriving teams.
                            </p>
                        </div>
                    </div>
                    <div class="top_div culture_top">
                        <div class="about_img">
                            <img src="{{ asset('assets/web') }}/content/images/three_leader.png">
                        </div>
                        <div class="titling_about">
                            <h1>Our Leadership Philosophy</h1>
                            <p>Leadership at QuickFirmX is about empowering people and creating impact. Our leaders are
                                focused on fostering collaboration, driving innovation, and building a culture of
                                excellence. Every decision is made with the success of our candidates and employers in
                                mind.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end_Pioneering_Call_sction -->
        <!-- start_Ceo_section -->
        <div class="section_marg">
            <div class="container">
                <div class="flex_Ceo">
                    <div class="Ceo_titels">
                        <h1>Serag Aboushady</h1>
                        <span>Founder & CEO</span>
                        <p>With over five years of experience in recruitment and staffing, Serag Aboushady founded
                            QuickFirmX with a vision to reshape the call center industry. His expertise in global talent
                            management and his journey from Germany to Egypt have equipped him to lead a company focused
                            on delivering impactful opportunities for both candidates and employers.</p>
                    </div>

                    <div class="Ceo_picture">
                        <img src="{{ asset('assets/web') }}/content/images/Ceo_large_photoe.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- end_Ceo_section -->
        <!-- start_Words_from_Our_Team_section -->
        <div class="section_marg">
            <div class="container">
                <div class="Words_from_Our_Team_section">
                    <div class="Words_Our_Team">
                        <h1>Words from Our Team</h1>
                        <p>Being part of QuickFirmX means helping people achieve their career goals every day. We take
                            pride
                            in matching skilled professionals with top employers, ensuring that both talent and
                            businesses
                            thrive in the competitive call center industry.</p>
                    </div>
                    <div class="Words_Our_Team_swiper">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="Words_Our_Team_sec">
                                        <p>At QuickFirmX, my role as a Career Specialist is all about guiding candidates
                                            to the
                                            right opportunities. I work closely with job seekers to understand their
                                            skills,
                                            goals, and passions, helping them find the best call center careers in
                                            Egypt. My
                                            focus is on providing personalized support to ensure every candidate is
                                            prepared,
                                            confident, and ready to succeed in their next role.</p>
                                        <div class="Words_Our_Team_titles">
                                            <h5>Peter Thabet</h5>
                                            <span>Career Specialist</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="Words_Our_Team_sec">
                                        <p>At QuickFirmX, my role as a Career Specialist is all about guiding
                                            candidates to the
                                            right opportunities. I work closely with job seekers to understand their
                                            skills,
                                            goals, and passions, helping them find the best call center careers in
                                            Egypt. My
                                            focus is on providing personalized support to ensure every candidate is
                                            prepared,
                                            confident, and ready to succeed in their next role.</p>
                                        <div class="Words_Our_Team_titles">
                                            <h5>Peter Thabet</h5>
                                            <span>Career Specialist</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="arrow_sec">
                                <a href="#" class="arrow_prev"><i class="bi bi-arrow-left"></i></a>
                                <a href="#" class="arrow_next"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end_Words_from_Our_Team_section -->

        <!-- start_Message_from_the_CEO_section -->
        <div class="section_marg">
            <div class="container">
                <div class="signture_section">
                    <div class="Words_Our_Team">
                        <h1>Message from the CEO</h1>
                        <p class="p_start">At QuickFirmX, we’re not just building careers—we’re building confidence and
                            creating lasting
                            opportunities. Our mission is simple: to connect the right talent with the right employers
                            and
                            foster growth for everyone involved. Together, we’re setting a new standard in the call
                            center
                            industry, making success accessible to all.</p>
                    </div>
                    <div class="Ceo_div">
                        <img class="ceo_small_image" src="{{ asset('assets/web') }}/content/images/Ceo_small_photoe.png">
                        <div class="Our_Team_details">
                            <h3>Serag Aboushady</h3>
                            <p>Founder & CEO</p>
                            <img class="signture_img" src="{{ asset('assets/web') }}/content/images/signiture.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end_Message_from_the_CEO_section -->
    </div>
@endsection
