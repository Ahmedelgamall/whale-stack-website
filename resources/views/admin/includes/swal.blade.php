<script>
    function sweetAlert(type, message, time = 3000, dir = 'ltr') {
        toastr[type](`${message}`, `${type}`, {
            timeOut: time,
            rtl: dir
        });
    }
</script>
@if(session('success'))
    <script>
        sweetAlert('success', '{{session('success')}}')
    </script>
@endif
