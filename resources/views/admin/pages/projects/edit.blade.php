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
                        <h4 class="card-title">Edit {{ @$row->name }}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{ route(@$data['route'] . '.update', @$row->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="id" value="{{ @$row->id }}">
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
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="Page">Category</label>
                                                <select name="project_category_id" id="Page" class="form-control">
                                                    <option disabled selected>Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ @$row->project_category_id == $category->id ? 'selected' : '' }}>
                                                            {{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($activeLanguages as $lang)
                                        <div class="tab-pane fade {{ $loop->first ? 'active' : '' }} show"
                                            id="{{ $lang->locale }}" role="tabpanel"
                                            aria-labelledby="nav-{{ $lang->locale }}" tabindex="0">
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="Title">Title ( {{ $lang->name }}
                                                        )
                                                    </label>
                                                    <input type="text" id="Title"
                                                        value="{{ @$row->translate($lang->locale)['title'] }}"
                                                        class="form-control" placeholder="Title"
                                                        name="{{ $lang->locale }}[title]">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="Content">Content ( {{ $lang->name }}
                                                        )
                                                    </label>
                                                    <textarea name="{{ $lang->locale }}[description]" id="Content" class="form-control ckeditor">{{ @$row->translate($lang->locale)['description'] }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-12 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="url">
                                                URL
                                            </label>
                                            <input type="url" name="url" id="url" class="form-control"
                                                value="{{ @$row->url }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-8">

                                        <div class="d-flex flex-column mb-5">
                                            <label class="form-check-label mb-50" for="customSwitch4">Show In
                                                Home
                                                Page</label>
                                            <div class="form-check form-check-success form-switch">
                                                <input type="checkbox" name="show_in_home"
                                                    {{ @$row->show_in_home == 1 ? 'checked' : '' }} value="1"
                                                    class="form-check-input" id="customSwitch4">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="attach-photo">
                                        <div class="row parent">
                                            <div class="col-md-8 col-8">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Image</label>
                                                    <input type="file" id="first-name-column" class="form-control photo"
                                                        placeholder="Image" name="image">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-4">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column"></label>
                                                    <img width="100" class="preview" height="100"
                                                        src="{{ getFile($row->image) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <button type="submit"
                                        class="  btn btn-primary me-1 waves-effect waves-float waves-light">Save</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
