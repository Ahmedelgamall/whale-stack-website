@extends('website.layouts.master')
@section('title')
Home Page
@endsection
@section('content')
    <!-- start_hero_sction -->
    <?php 
    $firstSection = $rows->where('section', App\Enums\SectionType::FIRST_SECTION)->first();
    $secondSection = $rows->where('section', App\Enums\SectionType::SECOND_SECTION)->first();
    $thirdSection = $rows->where('section', App\Enums\SectionType::THIRD_SECTION)->first();
     ?>
    <div class="bg_hero_section" style="background-image: url({{ asset('storage/'.$firstSection?->image) }});">
        <div class="container">
            <div class="hero_section_titles">
                <h1>{{ $firstSection?->title }}</h1>
                <p>{!! $firstSection?->description !!}</p>

                <a href="{{ $firstSection?->url }}" class="explore_btn" target="_blanck">Explore Jobs</a>
            </div>
        </div>
    </div>
    <!-- end_hero_sction -->

    <!-- start_about_us_sction -->
    <div class="section_marg">
        <div class="flex_sec">
            <div class="top_div">
                <div class="about_img">
                    <img src="{{ asset('storage/'.$secondSection?->image) }}">
                </div>
                <div class="titling_about">
                    <h1>{{ $secondSection?->title }}</h1>
                    <p>{!! $secondSection?->description !!}</p>
                    <a href="{{ $secondSection?->url }}" class="about_btn">See The Difference</a>
                </div>
            </div>
            <div class="top_div revers_sec">
                <div class="about_img">
                    <img src="{{ asset('storage/'.$thirdSection?->image) }}">
                </div>
                <div class="titling_about">
                    <h1>{{ $thirdSection?->title }}</h1>
                    <p>{!! $thirdSection?->description !!}</p>
                    <a href="{{ $thirdSection?->url }}" class="about_btn">Discover Our Culture</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end_about_us_sction -->

    <div class="section_marg">
        <div class="container">
            <div class="partner_ship">
                <h1>Partnerships That Make a Difference</h1>
                <p>Proud to showcase some of the companies we’ve partnered with to create impactful opportunities and
                    lasting
                    success</p>
                <div class="grid_img">
                    <img src="{{ asset('assets/web') }}/content/images/images (1) 1.png">
                    <img src="{{ asset('assets/web') }}/content/images/image 48.png">
                    <img src="{{ asset('assets/web') }}/content/images/image 47.png">
                </div>
            </div>
        </div>

    </div>

    <!-- start_Hear_From_Our_Candidates_section -->
    <div class="section_marg">
        <h1>Hear From Our Candidates</h1>
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="Candidates_sec">
                            <div class="star_imgs">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                            </div>
                            <p>I had a great experience working with QuickfirmX. From my initial consultation to getting
                                the job
                                offer, their team provided exceptional service every step of the way. They didn’t just
                                focus on finding
                                me a job—they focused on finding the right fit for my skills and career objectives. I
                                was thoroughly
                                prepared for every interview, and I felt supported the entire time. The best part? They
                                didn’t stop
                                there. Even after I landed the job, they checked in to make sure I was adjusting well.
                                QuickfirmX really
                                cares about your long-term success, and I am so thankful for their help</p>

                            <div class="user_img">
                                <img src="{{ asset('assets/web') }}/content/images/small_icon/Avatar.png">
                                <p>Hossam Khaled, Technical Support Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="Candidates_sec">
                            <div class="star_imgs">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                                <img src="{{ asset('assets/web') }}/content/images/Icon-star.png">
                            </div>
                            <p>I had a great experience working with QuickfirmX. From my initial consultation to getting
                                the job
                                offer, their team provided exceptional service every step of the way. They didn’t just
                                focus on finding
                                me a job—they focused on finding the right fit for my skills and career objectives. I
                                was thoroughly
                                prepared for every interview, and I felt supported the entire time. The best part? They
                                didn’t stop
                                there. Even after I landed the job, they checked in to make sure I was adjusting well.
                                QuickfirmX really
                                cares about your long-term success, and I am so thankful for their help</p>

                            <div class="user_img">
                                <img src="{{ asset('assets/web') }}/content/images/small_icon/Avatar.png">
                                <p>Hossam Khaled, Technical Support Specialist</p>
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
    <!-- end_Hear_From_Our_Candidates_section -->


    <!-- start_Want_a_Partner_section -->
    <div class="section_marg">
        <div class="container">
            <div class="partner_sec">
                <div class="partener_details">
                    <h1>Want a Partner Who Understands Your Needs?</h1>
                    <p>QuickFirmX is the partner that brings you the right talent to fuel your business growth.
                        Together, we’ll
                        create a foundation for long-term success.</p>
                    <a href="Contact.html" class="about_btn">Contact Us</a>
                </div>

                <div class="parent_grid_partener_section">
                    <div class="grid_partener__image">
                        <img src="{{ asset('assets/web') }}/content/images/person1.png">
                        <img src="{{ asset('assets/web') }}/content/images/person2.png">
                        <img src="{{ asset('assets/web') }}/content/images/person3.png">
                        <img src="{{ asset('assets/web') }}/content/images/person4.png">
                        <img src="{{ asset('assets/web') }}/content/images/person5.png">
                        <img src="{{ asset('assets/web') }}/content/images/person6.png">
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end_Want_a_Partner_section -->

    <!-- start_Ready_to_Make_Your_Move_section -->
    <div class="section_marg">
        <div class="bg_section"
            style="background-image: url({{ asset('assets/web') }}/content/images/ready_to_make_bG.jpeg);">
            <div class="bg_section_details">
                <h1>Ready to Make Your Move?</h1>
                <p>The right job is waiting for you. Let’s get started!</p>
                <a href="Careers.html" class="about_btn colo_btn">Apply Now</a>
            </div>
        </div>
    </div>
    <!-- end_Ready_to_Make_Your_Move_section -->

    <!-- start_Career_Insights -->
    <div class="section_marg">
        <div class="container">
            <div class="Career_Insights_sec">
                <h1>Career Insights</h1>
                <p>Explore expert advice, tips, and resources to grow your skills and unlock opportunities in the call
                    center industry with Career Insights by QuickFirmX.</p>

                <div class="grid_blog">
                    <div class="details_card_blog">
                        <div class="blog_img">
                            <img src="{{ asset('assets/web') }}/content/images/eng1.png">
                        </div>
                        <h1>At QuickFirmX, your career matters. We offer top call center jobs with room for growth and
                            development.
                        </h1>
                        <div class="flex_div">
                            <p>May 20th 2020</p>
                            <a href="Blog.html" class="read_more">Read more</a>
                        </div>
                    </div>
                    <div class="details_card_blog">
                        <div class="blog_img">
                            <img src="{{ asset('assets/web') }}/content/images/eng2.png">
                        </div>
                        <h1>At QuickFirmX, your career matters. We offer top call center jobs with room for growth and
                            development.
                        </h1>
                        <div class="flex_div">
                            <p>May 20th 2020</p>
                            <a href="Blog.html" class="read_more">Read more</a>
                        </div>
                    </div>
                    <div class="details_card_blog">
                        <div class="blog_img">
                            <img src="{{ asset('assets/web') }}/content/images/eng3.png">
                        </div>
                        <h1>At QuickFirmX, your career matters. We offer top call center jobs with room for growth and
                            development.
                        </h1>
                        <div class="flex_div">
                            <p>May 20th 2020</p>
                            <a href="Blog.html" class="read_more">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end_Career_Insights -->

    <!-- start_Opportunities_Delivered -->
    <div class="section_marg">
        <div class="container">
            <div class="relative_sec">
                <div class="Opportunities_Delivered ">
                    <h1>Opportunities Delivered to Your Inbox</h1>
                    <p>Stay ahead with the latest call center job openings, career tips, and updates from QuickFirmX.
                        Your next big move starts here—let’s grow together</p>
                    <div class="input_btn">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Your Email">
                        <a href="#" class="about_btn marg_act">Subscribe</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end_Opportunities_Delivered -->
@endsection
