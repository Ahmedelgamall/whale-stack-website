@extends('admin.layouts.master')
@push('title', @$data['page_title'])
@section('breadcrumb')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{ @$data['page_title'] }}</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="{{ route(@$data['route'] . '.index') }}">{{ @$data['page_title'] }}</a>
                        </li>
                        <li class="breadcrumb-item">{{ @$data['create'] }}
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Add {{ @$data['page_title'] }}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{ route(@$data['route'] . '.store') }}" method="post">
                            @csrf
                            <div class="row mt-1">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        @foreach ($activeLanguages as $lang)
                                            <span class="fi fi-{{ $lang->abbr }}"></span>
                                            <button class="nav-link {{ $loop->first ? 'show active' : '' }}"
                                                id="nav-{{ $lang->locale }}" data-bs-toggle="tab"
                                                data-bs-target="#{{ $lang->locale }}" type="button" role="tab"
                                                aria-controls="nav-{{ $lang->locale }}"
                                                aria-selected="true">{{ $lang->name }}</button>
                                        @endforeach
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    @foreach ($activeLanguages as $lang)
                                        <div class="tab-pane fade {{ $loop->first ? 'active' : '' }} show"
                                            id="{{ $lang->locale }}" role="tabpanel"
                                            aria-labelledby="nav-{{ $lang->locale }}" tabindex="0">
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="Title">Title ( {{ $lang->name }} )
                                                    </label>
                                                    <input type="text" id="Title" class="form-control"
                                                        placeholder="Title" name="{{ $lang->locale }}[title]">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="Content">Content ( {{ $lang->name }}
                                                        )
                                                    </label>
                                                    <textarea name="{{ $lang->locale }}[description]" id="Content" class="form-control ckeditor"></textarea>
                                                </div>
                                            </div>
                                            <hr>
                                            <h3>Meta Data</h3>
                                            <div class="row">
                                                <div class="col-md-6 col-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="Meta Title">Meta Title (
                                                            {{ $lang->name }} )
                                                        </label>
                                                        <input type="text" id="Meta Title" class="form-control"
                                                            placeholder="Meta Title"
                                                            name="{{ $lang->locale }}[meta_title]">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="Meta keyword">Meta keyword (
                                                            {{ $lang->name }} )
                                                        </label>
                                                        <input type="text" id="Meta keyword" class="form-control"
                                                            placeholder="keyword" name="{{ $lang->locale }}[meta_keyword]">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="Meta Description">Meta Description (
                                                            {{ $lang->name }}
                                                            )
                                                        </label>
                                                        <textarea name="{{ $lang->locale }}[meta_description]" id="Meta Description" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="row" id="attach-photo">
                                        <div class="row parent">
                                            <div class="col-md-8 col-8">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Image</label>
                                                    <input type="file" id="first-name-column" class="form-control photo"
                                                        placeholder="image" name="image">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column"></label>
                                                    <img width="100" class="preview" height="100"
                                                        src="{{ getFile() }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary me-1 waves-effect waves-float waves-light">Save</button>

                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
