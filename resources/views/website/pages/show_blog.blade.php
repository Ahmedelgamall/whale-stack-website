@extends('website.layouts.master')
@section('meta')
@endsection
@section('css')
@endsection
@section('content')
    <!--page header section start-->
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <h1 class="fw-bold display-5">{{ $blog->title }}</h1>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <!--page header section end-->
    <img src="{{ asset('storage' . '/' . $blog->image) }}" class="img-fluid mt-4 rounded-custom" alt="apply">

    <!--blog details section start-->
    <section class="blog-details ptb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 pe-lg-5">
                    <div class="blog-details-wrap">
                        {!! $blog->description !!}
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter subscription container start-->
        <div class="container">
            <!--cat subscribe start-->
            <div class="bg-dark ptb-60 px-5 mt-100 position-relative overflow-hidden rounded-custom"
                style="background: url('assets/img/page-header-bg.svg')no-repeat center bottom">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-9">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading">
                                <h4 class="h5 text-warning">For Latest News & Update</h4>
                                <h2>Want Receive the Best SAAS Insights? Subscribe Now!</h2>
                                <p>We can help you to create your dream website for better business revenue.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5">
                                <form id="email-form2" name="email-form" class="subscribe-form d-flex">
                                    <input type="email" class="form-control me-2" name="Email" data-name="Email"
                                        placeholder="Enter your email" id="Email2" required="">
                                    <input type="submit" value="Join!" data-wait="Please wait..." class="btn btn-primary">
                                </form>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-3">
                                <li class="nav-item">
                                    <span><i class="far fa-dot-circle text-primary me-2"></i>Don’t worry we won’t
                                        send you spam</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-dark-light left-5"></div>
            </div>
            <!--cat subscribe end-->
        </div>
        <!--newsletter subscription container end-->
    </section>
    <!--blog details section end-->

    <!--related blog start-->
    <section class="related-blog-list ptb-120 bg-light-subtle">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-md-12">
                    <div class="section-heading">
                        <h4 class="h5 text-primary">Related News</h4>
                        <h2>More Latest News and Blog at Quiety</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="text-start text-lg-end mb-4 mb-lg-0 mb-xl-0">
                        <a href="blog.html" class="btn btn-primary">View All Article</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($latestBlogs as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="{{ route('web.show.blog', ['slug' => $row->slug]) }}" class="article-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;" class="d-inline-block text-dark badge bg-warning-soft">{{ $row->category?->name }}</a>
                                </div>
                                <a href="{{ route('web.show.blog', ['slug' => $row->slug]) }}">
                                    <h2 class="h5 article-title limit-2-line-text">{{ $row->title }}</h2>
                                </a>
                                <p class="limit-2-line-text">{!! Str::limit($row->description, 150, '...') !!}</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar-info">
                                            <span class="small fw-medium text-muted">{{ $row->created_at->format('F d, Y') }}</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--related blog end-->
@endsection
@section('js')
@endsection
