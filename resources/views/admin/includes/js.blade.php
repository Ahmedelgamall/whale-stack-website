<!-- BEGIN: Vendor JS-->
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
{{--<script src="{{asset('assets/admin')}}/app-assets/vendors/js/charts/apexcharts.min.js"></script>--}}
<script src="{{asset('assets/admin/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('assets/admin/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('assets/admin/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('assets/admin')}}/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
<!-- END: Page JS-->


{{--<script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>--}}
{{--<script src="{{asset('assets/admin/app-assets/js/scripts/tables/table-datatables-advanced.js')}}"></script>--}}

<script src="{{asset('assets/admin/app-assets/vendors/js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/form-validator/jquery.form-validator.js')}}"></script>

{{--datatable--}}
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>

<script src="{{asset('assets/admin')}}/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/js/scripts/tables/table-datatables-basic.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/js/scripts/tables/table-datatables-advanced.js"></script>

{{--end datatable--}}
<script src="{{asset('assets/admin')}}/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<script src="{{asset('assets/admin')}}/app-assets/js/scripts/forms/pickers/form-pickers.js"></script>


<script src="{{asset('assets/admin/assets/plugins/fontawesome.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('assets/admin/assets/plugins/axios.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>

<script src="//cdn.jsdelivr.net/npm/speakingurl@14.0.1/speakingurl.min.js"></script>

<script src="{{asset('assets/admin/app-assets/vendors/js/file-uploaders/dropzone.min.js')}}"></script>

@include('admin.includes.axios')
@include('admin.includes.swal')
@include('admin.includes.helper')

<script>
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }

    });

</script>

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('assets/admin/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<!-- END: Page Vendor JS-->


<!-- BEGIN: Page JS-->
<script src="{{asset('assets/admin/app-assets/js/scripts/forms/form-select2.min.js')}}"></script>
<!-- END: Page JS-->

<script>

</script>

@stack('js')
