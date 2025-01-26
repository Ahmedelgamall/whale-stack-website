@extends('website.layouts.master')
<?php $seo = getMetaOf(App\Enums\PageType::BRANDS); ?>
@section('title')
    {{ isset($seo) ? $seo->meta_title : 'Brands Page' }}
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
                        <h1 class="display-5 fw-bold">{{ __('app.Our Latest News and brands') }}</h1>
                        <p class="lead mb-0">{{ __('app.Completely integrate equity') }}. </p>
                    </div>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <!--page header section end-->

    <!--brand section start-->
    <section class="masonary-brand-section ptb-120">
        <div class="container">
            <!-- Regular brands Grid -->
            <div class="row">
                @foreach ($brands as $brand)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                                <img src="{{ asset('storage/' . $brand->image) }}" alt="{{ $brand->name }}"
                                    class="img-fluid">
                            <div class="article-content p-4">
                                {{-- <div class="article-category mb-4 d-block">
                            <a href="{{ route('brand.category', $brand->category->slug) }}" 
                               class="d-inline-block text-{{ $brand->category->color ?? 'primary' }} badge bg-{{ $brand->category->color ?? 'primary' }}-soft">
                                {{ $brand->category->name }}
                            </a>
                        </div> --}}
                                    <h2 class="h5 article-title limit-2-line-text">{{ $brand->name }}</h2>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar-info">
                                            <span
                                                class="small fw-medium text-muted">{{ $brand->created_at->format('F d, Y') }}</span>
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
                @if ($brands->previousPageUrl())
                    <div class="col-auto my-1">
                        <a href="{{ $brands->previousPageUrl() }}" class="btn btn-soft-primary btn-sm">Previous</a>
                    </div>
                @endif

                <div class="col-auto my-1">
                    <nav>
                        <ul class="pagination rounded mb-0">
                            @for ($i = 1; $i <= $brands->lastPage(); $i++)
                                <li class="page-item {{ $brands->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $brands->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                        </ul>
                    </nav>
                </div>

                @if ($brands->nextPageUrl())
                    <div class="col-auto my-1">
                        <a href="{{ $brands->nextPageUrl() }}" class="btn btn-soft-primary btn-sm">Next</a>
                    </div>
                @endif
            </div>
            <!--pagination end-->
        </div>
    </section>
    <!--brand section end-->
@endsection
@section('js')
@endsection
