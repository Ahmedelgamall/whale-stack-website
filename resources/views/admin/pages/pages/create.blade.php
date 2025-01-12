@extends('admin.layouts.master')
@push('title',$title)
@section('breadcrumb')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{$title}}</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('sliders.index')}}">Pages</a>
                        </li>
                        <li class="breadcrumb-item">Add New
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="card">

        <div class="card-body">

            <form class="form" action="{{route('pages.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-1">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach($activeLanguages as $lang)
                                <span class="fi fi-{{$lang->abbr}}"></span>
                                <button class="nav-link {{$loop->first ? 'show active':''}}" id="nav-{{$lang->locale}}" data-bs-toggle="tab" data-bs-target="#{{$lang->locale}}" type="button" role="tab" aria-controls="nav-{{$lang->locale}}" aria-selected="true">{{$lang->name}}</button>

                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        @foreach($activeLanguages as $lang)
                            <div class="tab-pane fade {{$loop->first ? 'active':''}} show" id="{{$lang->locale}}" role="tabpanel" aria-labelledby="nav-{{$lang->locale}}" tabindex="0">
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="Title">Title ( {{$lang->name}} ) </label>
                                        <input type="text" id="Title" class="form-control name_{{$lang->locale}}" placeholder="Title" name="{{$lang->locale}}[title]">
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="slug">Slug ( {{$lang->name}} ) </label>
                                        <input type="text" readonly id="slug" class="form-control  slug_{{$lang->locale}}" placeholder="slug" name="{{$lang->locale}}[slug]">
                                    </div>
                                </div>


                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="description">Description ( {{$lang->name}} ) </label>
                                        <textarea class="form-control" name="{{$lang->locale}}[description]"></textarea>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                        <div class="row" id="attach-photo">
                            <div class="row parent">
                                <div class="col-md-8 col-8">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">Photo</label>
                                        <input type="file" id="first-name-column" class="form-control photo" placeholder="photo" name="photo">
                                    </div>
                                </div>
                                <div class="col-md-4 col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column"></label>
                                        <img width="100" class="preview" height="100" src="{{getFile()}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Save</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
