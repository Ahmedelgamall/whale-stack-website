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
                        <h4 class="card-title">Edit {{@$admin->name}}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route(@$data['route'].'.update',$admin->id)}}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="id" value="{{$admin->id}}">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">Name</label>
                                        <input value="{{$admin->name}}" type="text" id="first-name-column" class="form-control" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="email"> Email</label>
                                        <input type="email" value="{{$admin->email}}" id="email" class="form-control" placeholder="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="password"> Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="password" name="password">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="phone"> Phone</label>
                                        <input type="number" value="{{$admin->phone}}" id="phone" class="form-control" placeholder="phone" name="phone">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="Role">الدور</label>
                                        <select name="role" class="form-control" id="Role"> --}}
{{--                                            @foreach($roles as $role)--}}
{{--                                                <option {{in_array($role->id ,$admin->roles->pluck('id')->toArray()) ? 'selected':""}} value="{{$role->id}}">{{$role->name}}</option>--}}
{{--                                            @endforeach--}}
                                                {{-- <option  value="1">مشرف</option>
                                        </select>

                                    </div>
                                </div> --}}

                                <div class="row" id="attach-photo">
                                    <div class="row parent">
                                        <div class="col-md-7 col-7">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">Image</label>
                                                <input type="file" id="first-name-column" class="form-control photo" placeholder="photo" name="photo">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-5">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column"></label>
                                                <img width="100" class="preview" height="100" src="{{getFile($admin->photo)}}" alt="">
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
            </div>
        </div>
    </section>
@endsection
