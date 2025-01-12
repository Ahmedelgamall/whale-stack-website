<script>
    var dropzone = $('#dropzone');
    dropzone.dropzone({
        paramName: 'images', // The name that will be used to transfer the file
        maxFilesize: 256, // MB
        acceptedFiles: 'image/*',
        addRemoveLinks: true,
        maxFiles: 10,
        headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
        parallelUploads: 10,
        dictRemoveFile: ' Trash',
        autoProcessQueue: false,
        autoQueue: true,
        url: '{{route(@$data['route'].'.uploadAlbum')}}',

        @if(isset($model))
        removedfile: function (file) { // delete old file
            $.ajax({
                'type': 'post',
                'url': '{{route('products.deleteImageFromAlbum')}}',
                data: {
                    'id': file.id,
                    '_token': '{{csrf_token()}}',
                },
            });
            var fmock;
            return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement) : void 0;
        },
        @endif

        init: function () {
            myDropzone = this;

            /*preview old files*/
            @if(isset($model))
            @foreach($model->album()->get() as $album)
            var mock = {name: '{{$album->name}}', size: '{{$album->size}}', type: '{{$album->mime_type}}', id: '{{$album->id}}'};
            myDropzone.emit("addedfile", mock);
            myDropzone.emit("thumbnail", mock, '{{getFile($album->photo)}}');
            myDropzone.emit("complete", mock);
            @endforeach
            @endif

            /* end preview old files*/
            this.on('success', function (file, response) { // when success
                if (response.status == 'fail') {
                    sweetAlert('error', response.message)
                }
                localStorage.removeItem('redirect_url');
                localStorage.setItem('redirect_url', response.redirect_url);
            });
            this.on('sending', function (file, xhr, formData) { // when upload files
                let model_id = $('#model_id').val();
                formData.append('model_id', model_id)
            });

            this.on('complete', function () { // when uploading is complete
                if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                    window.location.href = '/' + localStorage.getItem('redirect_url')
                }
            })
        }
    });

    $('#submit_form_with_dropzone').on('click', function () {
        $('.form_with_dropzone').submit();
    })

    $('.form_with_dropzone').on('submit', function (event) {
        event.preventDefault();
        let e = this;
        $('button[id="submit_form_with_dropzone"]').append(' <i class="fa fa-spinner fa-spin"><i>');
        let url = $(e).attr('action');
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        let data = new FormData($(e)[0]);

        function callBackFunction(response) {
            $('.errors').remove();
            $('.is-invalid').removeClass('is-invalid');
            $('button[id="submit_form_with_dropzone"]').find('i').remove();
            if (response.status == 200) {

                let queuedFiles = 0;
                queuedFiles = myDropzone.getQueuedFiles().length;
                if (queuedFiles > 0) {
                    $('#model_id').val(response.data.data.model_id);
                    myDropzone.processQueue();
                } else {
                    window.location.href = '/' + response.data.data.redirect_url
                }
            } else if (response.status == 422) {
                formErrors(response);
            } else {
                sweetAlert('error', response.data.errors)
            }
        }

        AxiosPost(url, data, callBackFunction)
    })

</script>
