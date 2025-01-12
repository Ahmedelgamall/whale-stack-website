@extends('admin.layouts.master')

@push('title', $data['page_title'])

@section('breadcrumb')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{ $data['page_title'] }}</h2>

                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            {{ $data['page_title'] }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section id="ajax-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">{{ $data['page_title'] }}</h4>

                        @permission('delete_' . $data['route'])
                            <a class="btn btn-danger btn-sm delete_selected d-none">
                                <i class="fa fa-trash"></i>
                                Delete Selected
                            </a>
                        @endpermission

                        @permission('create_' . $data['route'])
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i>
                                Add New
                            </a>
                        @endpermission
                    </div>
                    <div class="card-datatable">
                        <form id="bulk_delete_form" action="{{ route('users.bulkDelete') }}" method="post">
                            @csrf
                            <table class="datatables-ajax table table-responsive">
                                <thead>
                                    <tr>
                                        <th width="1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input check_all" type="checkbox"
                                                    id="inlineCheckbox1" value="checked">
                                            </div>
                                        </th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Image</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>status</th>
                                        <th>Type</th>
                                        <th>Registeration Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $('.datatables-ajax').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('users.data') }}'
            },

            columns: [{
                    data: "check",
                    name: "check",
                    sortable: false,
                    searchable: false
                },
                {
                    data: "DT_RowIndex",
                    sortable: false,
                    searchable: false
                },
                {
                    data: "name",
                    name: "name",
                },
                {
                    data: "email",
                    name: "email",
                },
                {
                    data: "phone",
                    name: "phone",
                },
                {
                    data: "image",
                    name: "image",
                    sortable: false,
                    searchable: false
                },
                {
                    data: "address",
                    name: "address",
                },
                {
                    data: "country.name",
                    searchable: false
                },
                {
                    data: "status",
                    name: "status",
                },
                {
                    data: "type",
                    name: "type",
                },
                {
                    data: "registeration_date",
                    render: function(data) {
                        const d = new Date(data);
                        let day = d.getDate();
                        let month = d.getMonth();
                        let year = d.getFullYear();
                        return `${year} - ${month+1} - ${day}`;
                    }
                },
                {
                    data: "actions",
                    sortable: false,
                    searchable: false
                },
            ],
            dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',

        });
    </script>
@endpush
