@extends('website.layouts.master')
@section('title')
    {{ isset($blog) ? @$blog->meta_title : @$blog->title }}
@endsection
@section('meta')
    <meta name="description" content="{{ isset($blog) ? $blog->meta_description : '' }}">
    <meta name="keywords" content="{{ isset($blog) ? $blog->meta_keyword : '' }}">
    <meta name="author" content="Serag Aboushady">
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

        <!-- Details Info Start -->
        <section class="portfolio-details pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="portfolio-feature-img pb-60">
                        <img src="{{ asset('storage' . '/' . $blog->image) }}" alt="{{ $blog->title }}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="portfolio-deatil-info">
                            <h3 class="">
                                {{ $blog->title }}
                            </h3>
                            {!! $blog->description !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <ul class="list-unstyled">
                            <li class="py-2">
                                <h5>Category</h5>
                                <span> {{ $blog->category?->name }}</span>
                            </li>
                            <li class="py-2">
                                <h5>Date</h5>
                                <span>{{ $blog->created_at->format('F d, Y') }}</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Details Info End -->


    <!--related blog start-->
    <section class="related-blog-list ptb-120 bg-light-subtle">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-md-12">
                    <div class="section-heading">
                        <h4 class="h5 text-primary">{{ __('app.Related Blogs') }}</h4>
                        <h2>{{ __('app.More Latest News and Blog at Quiety') }}</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="text-start text-lg-end mb-4 mb-lg-0 mb-xl-0" >
                        <a href="blog.html" class="btn btn-primary">{{ __('app.View_All_Blogs') }}</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($latestBlogs as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="{{ route('web.show.blog', ['slug' => $row->slug]) }}" class="article-img">
                                <img src="{{ asset('storage' . '/' . $row->image) }}" alt="article" class="img-fluid">
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
