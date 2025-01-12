@extends('admin.layouts.master')
@push('title',@$data['page_title'])
@section('breadcrumb')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{@$data['page_title']}}</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route(@$data['route'].'.index')}}">{{@$data['page_title']}}</a>
                        </li>
                        <li class="breadcrumb-item">{{@$data['section']}}
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
            <form class="form" action="{{route(@$data['route'].'.update',1)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" value="{{$data['section']}}" name="section">
                <div class="row mt-1">
                    @if($data['section'] =='general' || $data['section'] =='seo')
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @foreach($activeLanguages as $lang)
                                    <span class="fi fi-{{$lang->abbr}}"></span>
                                    <button class="nav-link {{$loop->first ? 'show active':''}}" id="nav-{{$lang->locale}}" data-bs-toggle="tab" data-bs-target="#{{$lang->locale}}" type="button" role="tab" aria-controls="nav-{{$lang->locale}}" aria-selected="true">{{$lang->name}}</button>
                                @endforeach
                            </div>
                        </nav>
                    @endif
                    <div class="tab-content" id="nav-tabContent">
                        @if($data['section'] =='general' || $data['section'] =='seo')
                            @foreach($activeLanguages as $lang)
                                <div class="tab-pane fade {{$loop->first ? 'active':''}} show" id="{{$lang->locale}}" role="tabpanel" aria-labelledby="nav-{{$lang->locale}}" tabindex="0">
                                    <div class="col-md-12 col-12">
                                        <div class="mb-1">
                                            @foreach($data['settings'] as $setting)
                                                @if($setting->is_static ==0)
                                                    <label class="form-label" for="Name"> {{$setting->display_name}} ( {{$lang->name}} ) </label>
                                                    @if($setting->type =='text')
                                                        <input type="text" value="{{$setting->translate($lang->locale)->value}}" id="Name" class="form-control " placeholder="{{$setting->display_name}}" name="{{$lang->locale}}[{{$setting->key}}]">
                                                    @elseif($setting->type=='textarea')
                                                        <textarea class="form-control" name="{{$lang->locale}}[{{$setting->key}}]">{{$setting->translate($lang->loclae)->value}}</textarea>
                                                    @endif
                                                @endif

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="col-md-12 col-12">
                            <div class="mb-1">
                                @foreach($data['settings'] as $setting)
                                    @if($setting->is_static == 1)

                                        <label class="form-label" for="Name"> {{$setting->display_name}}</label>
                                        @if($setting->type =='email')
                                            <input type="email" value="{{$setting->static_value}}" class="form-control " placeholder="{{$setting->display_name}}" name="{{$setting->key}}">
                                        @elseif($setting->type=='number')
                                            <input type="number" class="form-control" value="{{$setting->static_value}}" placeholder="{{$setting->display_name}}" name="{{$setting->key}}">
                                        @elseif($setting->type=='url')
                                            <input type="url" class="form-control" value="{{$setting->static_value}}" placeholder="{{$setting->display_name}}" name="{{$setting->key}}">
                                        @elseif($setting->type=='textarea')
                                            <textarea class="form-control" name="{{$setting->key}}">{{$setting->static_value}}</textarea>
                                        @elseif($setting->type=='file')

                                            <div class="row" id="attach-photo">
                                                <div class="row parent">
                                                    <div class="col-md-8 col-8">
                                                        <div class="mb-1">
                                                            <input type="file" id="first-name-column" class="form-control photo" placeholder="photo" name="{{$setting->key}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-4">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="first-name-column"></label>
                                                            <img width="100" class="preview" height="100" src="{{getFile($setting->static_value)}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach

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
