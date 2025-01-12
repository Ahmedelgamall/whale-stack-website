@extends('admin.layouts.master')
@push('title',@$data['page_title'])
@section('breadcrumb')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{@$data['page_title']}}</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route(@$data['route'].'.index')}}">{{@$data['page_title']}}</a>
                        </li>
                        <li class="breadcrumb-item">{{@$data['create']}}
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
                        <h4 class="card-title">إضافة جديد {{@$data['page_title']}}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route(@$data['route'].'.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">إسم الصنف</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="Name" name="name">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">الوحدات</label>
                                        <select class="select2 form-select" id="select2-basic" name="unit_id">
                                            <option value="" selected disabled>إختر الوحدة</option>
                                            @foreach($units as $unit)
                                                <option  value="{{$unit->id}}">{{$unit->name}}</option>
                                            @endforeach


                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">سعر الوحدة</label>
                                        <input type="number" id="first-name-column" class="form-control" placeholder="0.0" name="unit_price" step="any">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">الكمية</label>
                                        <input type="number" id="first-name-column" class="form-control" placeholder="0.0" name="quantity" step="any">
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="details"> التفاصيل</label>
                                        <textarea class="form-control" name="details"></textarea>
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
                                                <img width="100" class="preview" height="100" src="{{getFile()}}" alt="">
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
