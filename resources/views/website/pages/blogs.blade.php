@extends('website.layouts.master')
<?php $seo = getMetaOf(App\Enums\PageType::BLOGS); ?>
@section('title')
    {{ isset($seo) ? $seo->meta_title : 'Blogs Page' }}
@endsection
@section('meta')
    <meta name="description" content="{{ isset($seo) ? $seo->meta_description : '' }}">
    <meta name="keywords" content="{{ isset($seo) ? $seo->meta_keyword : '' }}">
    <meta name="author" content="Ahmed Elgamal">
@endsection
@section('css')
@endsection
@section('content')
    <!--page header section start-->
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('assets/img/page-header-bg.svg')no-repeat center bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="section-heading text-center">
                        <h1 class="display-5 fw-bold">Our Latest News and Blogs</h1>
                        <p class="lead mb-0">Completely integrate equity invested partnerships without revolutionary systems.
                            Monotonectally network pandemic e-services via bricks-and-clicks information. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-xl-8">
                    @foreach ($categories as $category)
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <!--page header section end-->

    <!--blog section start-->
    <section class="masonary-blog-section ptb-120">
        <div class="container">
            <!-- Featured Blogs Row -->
            <div class="row">
                @foreach ($featuredBlogs as $blog)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-article feature-article rounded-custom my-3">
                            <a href="{{ route('web.show.blog', $blog->slug) }}" class="article-img">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                    class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <a href="{{ route('web.show.blog', $blog->slug) }}">
                                    <h2 class="h5 article-title limit-2-line-text">{{ $blog->title }}</h2>
                                </a>
                                <p class="limit-2-line-text">{!! Str::limit($blog->description, 150, '...') !!}</p>

                                <a href="javascript:;">
                                    <div class="avatar-info">
                                        <span
                                            class="small fw-medium text-muted">{{ $blog->created_at->format('F d, Y') }}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Regular Blogs Grid -->
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="{{ route('web.show.blog', $blog->slug) }}" class="article-img">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                    class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                {{-- <div class="article-category mb-4 d-block">
                            <a href="{{ route('blog.category', $blog->category->slug) }}" 
                               class="d-inline-block text-{{ $blog->category->color ?? 'primary' }} badge bg-{{ $blog->category->color ?? 'primary' }}-soft">
                                {{ $blog->category->name }}
                            </a>
                        </div> --}}
                                <a href="{{ route('web.show.blog', $blog->slug) }}">
                                    <h2 class="h5 article-title limit-2-line-text">{{ $blog->title }}</h2>
                                </a>
                                <p class="limit-2-line-text">{!! Str::limit($blog->description, 150, '...') !!}</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar-info">
                                            <span
                                                class="small fw-medium text-muted">{{ $blog->created_at->format('F d, Y') }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!--pagination start-->
            <div class="row justify-content-center align-items-center mt-5">
                @if ($blogs->previousPageUrl())
                    <div class="col-auto my-1">
                        <a href="{{ $blogs->previousPageUrl() }}" class="btn btn-soft-primary btn-sm">Previous</a>
                    </div>
                @endif

                <div class="col-auto my-1">
                    <nav>
                        <ul class="pagination rounded mb-0">
                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                <li class="page-item {{ $blogs->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                        </ul>
                    </nav>
                </div>

                @if ($blogs->nextPageUrl())
                    <div class="col-auto my-1">
                        <a href="{{ $blogs->nextPageUrl() }}" class="btn btn-soft-primary btn-sm">Next</a>
                    </div>
                @endif
            </div>
            <!--pagination end-->
        </div>
    </section>
    <!--blog section end-->
@endsection
@section('js')
@endsection
