@extends('website.layouts.master')
@section('title')
ContactUs Page
@endsection
@section('content')
    <div class="page_content">
        <!-- start_page_content_section -->
        <div class="main_section_page_content">
            <div class="container">
                <div class="bread_crumb_div">
                    <a href="#" class="ref_bread_crumb">Home <i class="bi bi-chevron-double-right"></i></a>
                    <span class="span_name">Contact Us</span>
                </div>
                <div class="why_choose_us">
                    <h1>Get in touch, We are here to help</h1>
                    <p>Have questions or need assistance? Reach out to us today, and our team will be happy to provide
                        the support you need. Whether it's about our services, opportunities, or anything else, we're
                        here to help!</p>
                </div>
            </div>
        </div>
        <!-- end_page_content_section -->

        <!-- start_tGet_In_Touch_sction -->
        <div class="section_marg">
            <div class="container">
                <div class="Get_In_Touch_section">
                    <h1>Get In Touch</h1>
                    <h4>Need Professional Help? We've Got You Covered!</h4>
                    <p>Fill out the contact form to send us a direct message. Please provide details about your career
                        interests, the services you're looking for, and how we can assist you. Our team will review your
                        message and get back to you within 24 hours.</p>
                </div>
                <div class="flex_contact">
                    <div class="img_contact">
                        <img src="{{ asset('assets/web') }}/content/images/question_img1.png">
                    </div>
                    <div class="contact_input_div">
                        <form id="contactForm" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="mb-3 input_relative">
                                        <label for="firstName" class="form-label label_icon">
                                            <i class="bi bi-person"></i>First Name
                                        </label>
                                        <input type="text" class="form-control" id="firstName" name="first_name"
                                            placeholder="First name" required>
                                        <img class="star_img"
                                            src="{{ asset('assets/web') }}/content/images/small_icon/star.png">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label label_icon">
                                            <i class="bi bi-person"></i>Last Name
                                        </label>
                                        <input type="text" class="form-control" id="lastName" name="last_name"
                                            placeholder="Last name" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-3 input_relative">
                                        <label for="email" class="form-label label_icon">
                                            <i class="bi bi-envelope"></i>Email
                                        </label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email address" required>
                                        <img class="star_img"
                                            src="{{ asset('assets/web') }}/content/images/small_icon/star.png">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label label_icon">
                                            <i class="bi bi-telephone"></i>Phone
                                        </label>
                                        <input type="number" class="form-control" id="phone" name="phone"
                                            placeholder="Enter your phone number" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="message" class="form-label label_icon">
                                            Message
                                        </label>
                                        <textarea class="form-control" id="message" name="message" rows="10" placeholder="Write your message here"
                                            required></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12 col-sm-12">
                                    <button type="submit" class="send_message btn btn-primary">
                                        Send Message <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <!-- end_tGet_In_Touch_sction -->

        <!-- start_Got_Questions -->
        <div class="section_marg">
            <div class="container">
                <div class="Get_In_Touch_section">
                    <h1>Got Questions? We’ve Got Answers!</h1>
                    <p>Explore answers to your most common questions about QuickFirmX. Whether you're curious about our
                        services or how we can help you, our FAQs provide the information you need to move forward with
                        confidence.</p>
                </div>
                <div class="flex_qutions">

                    <div class="qustion_img">
                        <img src="{{ asset('assets/web') }}/content/images/question_img2.png">
                    </div>

                    <div class="qut_div">
                        <div class="accordion qut_accrodion" id="accordionExample">
                            @foreach ($faq as $row)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-{{ $row->id }}">
                                        <button class="accordion-button @if (!$loop->first) collapsed @endif" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $row->id }}"
                                            aria-expanded="@if ($loop->first) true @endif"
                                            aria-controls="collapse-{{ $row->id }}">
                                            {{ $row->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse-{{ $row->id }}"
                                        class="accordion-collapse collapse @if ($loop->first) show @endif "
                                        aria-labelledby="heading-{{ $row->id }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {!! $row->answer !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- <div class="qut_div">
                                                                                                <div class="accordion qut_accrodion" id="accordionExample">
                                                                                                  
                                                                                                </div>
                                                                                            </div> -->

                </div>

            </div>
        </div>
        <!-- end_Got_Questions -->
    </div>
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
