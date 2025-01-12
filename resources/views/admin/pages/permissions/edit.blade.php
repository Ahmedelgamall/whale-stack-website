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
                        <li class="breadcrumb-item"> {{$permission->display_name}}
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
                        <h4 class="card-title">edit {{$permission->display_name}}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route(@$data['route'].'.update',$permission->id)}}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" value="{{$permission->id}}" name="id">
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">Name</label>
                                        <input type="text" id="first-name-column" value="{{$permission->display_name}}" class="form-control" placeholder="Name" name="name">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">Save</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')

@endpush
