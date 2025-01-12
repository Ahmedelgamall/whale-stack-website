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
                        <h4 class="card-title">{{@$data['page_title']}}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route(@$data['route'].'.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">Name</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-3 mb-1">
                                    <div class="form-check form-check-success form-switch">
                                        <input type="checkbox" class="form-check-input check_all" id="customSwitch4">
                                        <label class="form-check-label mb-50" for="customSwitch4">All</label>
                                    </div>
                                </div>

                                <div class="row">


                                    @foreach($data['permissions'] as $permission)
                                        <div class="col-md-3 mb-1">
                                            <div class="form-check form-check-success form-switch">
                                                <input type="checkbox" value="{{$permission->id}}" name="permissions[]" class="form-check-input items" id="{{$permission->id}}">
                                                <label class="form-check-label mb-50" for="{{$permission->id}}">{{$permission->display_name}}</label>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <br>


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
