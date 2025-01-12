@extends('admin.layouts.master')
@push('title',@$data['page_title'])
@section('breadcrumb')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{@$data['page_title']}}</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيـــســيــة</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route(@$data['route'].'.index')}}">{{@$data['page_title']}}</a>
                        </li>
                        <li class="breadcrumb-item">{{@$data['edit']}}
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
                        <h4 class="card-title">تعديل {{@$customer->name}}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route(@$data['route'].'.update',$customer->id)}}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="id" value="{{$customer->id}}">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">الإسم</label>
                                        <input value="{{$customer->name}}" type="text" id="first-name-column" class="form-control" placeholder="Name" name="name">
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="phone">رقم التليفون</label>
                                        <input type="number" value="{{$customer->phone}}" id="phone" class="form-control" placeholder="phone" name="phone">
                                    </div>
                                </div>

                                <div class="row" id="attach-photo">
                                    <div class="row parent">
                                        <div class="col-md-10 col-10">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">الصورة</label>
                                                <input type="file" id="first-name-column" class="form-control photo" placeholder="photo" name="photo">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-2">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column"></label>
                                                <img width="100" class="preview" height="100" src="{{getFile($customer->photo)}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">حفظ</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
