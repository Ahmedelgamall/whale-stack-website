<link rel="apple-touch-icon" href="{{ asset('assets/admin') }}/app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin') }}/app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

{{-- <!-- BEGIN: Vendor CSS--> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/app-assets/vendors/css/vendors.min.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/app-assets/vendors/css/charts/apexcharts.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/app-assets/vendors/css/extensions/toastr.min.css"> --}}
{{-- <!-- END: Vendor CSS--> --}}
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/app-assets/vendors/css/vendors-rtl.min.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/vendors/css/extensions/toastr.min.css">
<!-- END: Vendor CSS-->


<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/app-assets/css/components.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/app-assets/css/themes/dark-layout.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/css/themes/bordered-layout.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/css/themes/semi-dark-layout.css">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/app-assets/css/pages/dashboard-ecommerce.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/app-assets/css/plugins/charts/chart-apex.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/css/plugins/extensions/ext-component-toastr.css">

<!-- END: Page CSS-->

<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/vendors/css/extensions/sweetalert2.min.css">
{{-- dadtable --}}
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
<link href="//cdn.datatables.net/plug-ins/1.12.1/integration/font-awesome/dataTables.fontAwesome.css" rel="stylesheet">

{{-- plugins --}}
<link rel="stylesheet" href="{{ asset('assets/admin/assets/plugins/flags.css') }}" />

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin/app-assets/vendors/css/forms/select/select2.min.css') }}">
<!-- END: Vendor CSS-->


<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
<!-- END: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">

<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/css/plugins/forms/pickers/form-flat-pickr.css">

<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin') }}/app-assets/css/plugins/forms/pickers/form-pickadate.css">

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin') }}/assets/css/style.css">
<!-- END: Custom CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin/app-assets/vendors/css/file-uploaders/dropzone.min.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/admin/app-assets/css/plugins/forms/form-file-uploader.css') }}">
@stack('css')
<style>
    .ck-editor__editable {
        min-height: 150px; /* Adjust height as needed */
    }
</style>