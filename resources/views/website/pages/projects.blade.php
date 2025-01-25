@extends('website.layouts.master')
<?php $seo = getMetaOf(App\Enums\PageType::PROJECTS); ?>
@section('title')
    {{ isset($seo) ? $seo->meta_title : 'Projects Page' }}
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
                        <h1 class="display-5 fw-bold">Our Latest Projects</h1>
                        <p class="lead mb-0">Completely integrate equity invested partnerships without revolutionary systems.
                            Monotonectally network pandemic e-services via bricks-and-clicks information. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-xl-8">
                    @foreach ($categories as $category)
                        <a href="javascript:;" class="btn btn-soft-primary btn-pill btn-sm m-2">{{ $category->title }}</a>
                    @endforeach
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <!--page header section end-->

    <section class="masonary-project-section ptb-120">
        <div class="container">
            <!-- Regular projects Grid -->
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="{{ $project->url }}" class="article-img">
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                {{-- <div class="article-category mb-4 d-block">
                            <a href="{{ route('project.category', $project->category->slug) }}" 
                               class="d-inline-block text-{{ $project->category->color ?? 'primary' }} badge bg-{{ $project->category->color ?? 'primary' }}-soft">
                                {{ $project->category->name }}
                            </a>
                        </div> --}}
                                <a href="{{ $project->url }}>
                                    <h2 class="h5 article-title limit-2-line-text">{{ $project->title }}</h2>
                                </a>
                                <p class="limit-2-line-text">{!! Str::limit($project->description, 150, '...') !!}</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar-info">
                                            <span
                                                class="small fw-medium text-muted">{{ $project->created_at->format('F d, Y') }}</span>
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
                @if ($projects->previousPageUrl())
                    <div class="col-auto my-1">
                        <a href="{{ $projects->previousPageUrl() }}" class="btn btn-soft-primary btn-sm">Previous</a>
                    </div>
                @endif

                <div class="col-auto my-1">
                    <nav>
                        <ul class="pagination rounded mb-0">
                            @for ($i = 1; $i <= $projects->lastPage(); $i++)
                                <li class="page-item {{ $projects->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $projects->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                        </ul>
                    </nav>
                </div>

                @if ($projects->nextPageUrl())
                    <div class="col-auto my-1">
                        <a href="{{ $projects->nextPageUrl() }}" class="btn btn-soft-primary btn-sm">Next</a>
                    </div>
                @endif
            </div>
            <!--pagination end-->
        </div>
    </section>
@endsection
@section('js')
@endsection
