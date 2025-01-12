@extends('admin.layouts.master')
@push('title', 'Creat User')
@section('breadcrumb')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{ $data['page_title'] }}</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">
                                Home
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            <a href="{{ route('users.index') }}">
                                {{ $data['page_title'] }}
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            Add New
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

            <form class="form" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-1">
                    <div class="tab-content" id="nav-tabContent">

                        <div class="row">
                            {{-- name --}}
                            <div class="col-md-5">
                                <div class="mb-1">
                                    <label class="form-label" for="name">Name </label>
                                    <input type="text" id="name" class="form-control" placeholder="Name .. "
                                        name="name" required>
                                </div>
                            </div>

                            {{-- email --}}
                            <div class="col-md-5">
                                <div class="mb-1">
                                    <label class="form-label" for="email">email </label>
                                    <input type="email" id="email" class="form-control" placeholder="email .. "
                                        name="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- password --}}
                            <div class="col-md-5">
                                <div class="mb-1">
                                    <label class="form-label" for="password">Password </label>
                                    <input type="password" id="password" class="form-control" placeholder="password .. "
                                        name="password" required>
                                </div>
                            </div>

                            {{-- phone --}}
                            <div class="col-md-5">
                                <div class="mb-1">
                                    <label class="form-label" for="phone">Phone </label>
                                    <input type="tel" id="phone" class="form-control" placeholder="phone .. "
                                        name="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- address --}}
                            <div class="col-md-5">
                                <div class="mb-1">
                                    <label class="form-label" for="address">address </label>
                                    <input type="text" id="address" class="form-control" placeholder="address .. "
                                        name="address" required>
                                </div>
                            </div>

                            {{-- type --}}
                            <div class="col-md-5">
                                <div class="mb-1">
                                    <label class="form-label" for="type">Type</label>
                                    <select name="type" id="type" class="form-control" required>
                                        <option value="">Select User Type</option>
                                        <option value="customer">Customer</option>
                                        <option value="vendor">Vendor</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            {{-- Country --}}
                            <div class="col-md-5">
                                <div class="mb-1">
                                    <label class="form-label" for="countries">Countries</label>
                                    <select name="country_id" id="countries" class="form-control select2" required>
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- status --}}
                            <div class="col-md-5" style="position: relative">
                                <div class="form-check form-check-success form-switch mb-1"
                                    style="position: absolute;top: 40%;">
                                    <input type="checkbox" name="is_active" class="form-check-input">
                                </div>
                            </div>
                        </div>

                        {{-- image --}}
                        <div class="row" id="attach-photo">
                            <div class="row parent">
                                <div class="col-md-8 col-8">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">Photo</label>
                                        <input type="file" id="first-name-column" class="form-control photo"
                                            placeholder="photo" name="image">
                                    </div>
                                </div>

                                <div class="col-md-4 col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column"></label>
                                        <img width="100" class="preview" height="100" src="{{ getFile() }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary me-1 waves-effect waves-float waves-light">
                            Save
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
