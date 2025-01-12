

<script>
    /*
     * submit form using axios
     *  */

    let editors = {};

    $('.form').on('submit', function(event) {
        event.preventDefault();
        let e = this;

        $(e).find('button[type="submit"]').prop('disabled', true).append(
            ' <i class="fa fa-spinner fa-spin"></i>'
        );

        let url = $(e).attr('action');
        let data = new FormData($(e)[0]);

        for (let id in editors) {
            let editor = editors[id];
            let editorData = editor.getData();
            data.append(id, editorData);
        }


        function callBackFunction(response) {
            $('.errors').remove();
            $('.is-invalid').removeClass('is-invalid');
            $(e).find('button[type="submit"]').prop('disabled', false).find('i').remove();

            if (response.status == 200) {
                window.location = '/' + response.data.data.redirect_url;
            } else if (response.status == 422) {
                formErrors(response);
            } else {
                sweetAlert('error', response.data.errors);
            }
        }

        AxiosPost(url, data, callBackFunction);
    });

    document.querySelectorAll('textarea.ckeditor').forEach((textarea) => {
        ClassicEditor
            .create(textarea, {
                toolbar: [
                    'heading', 'bold', 'italic', 'underline', 'strikethrough', 'link',
                    '|', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable',
                    '|', 'undo', 'redo', 'mediaEmbed', 'imageUpload', 'fontColor',
                    'fontBackgroundColor',
                    '|', 'fontSize', 'fontFamily'
                ],
                fontSize: {
                    options: [
                        'tiny', 'small', 'default', 'big', 'huge'
                    ],
                    supportAllValues: true
                },
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                },
                mediaEmbed: {
                    previewsInData: true
                },
            })
            .then(editor => {
                editors[textarea.name] = editor; // تخزين المحرر باستخدام اسم الحقل
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });
    });
    // fire form errors
    function formErrors(response) {
        $.each(response.data.errors, function(key, val) {
            sweetAlert('error', val)

            let error_input = $(`input[name='${key}'], textarea[name='${key}'], select[name='${key}']`);
            if (error_input) {
                error_input.addClass('is-invalid')
                error_input.parent().append(`<p class="errors text-danger"> <span>${val}</span></p>`)
            }

        })
    }

    // change status
    $(document).on('change', '.status', function() {
        let id = $(this).data('id');
        let url = $(this).data('url');
        AxiosUpdate(url, {
            'id': id
        })
    })

    // check all

    $(document).on('click', '.check_all', function() {
        if ($(this).is(':checked')) {
            $('.items').prop('checked', true);
            $('.items:checked').length ? $('.delete_selected').removeClass('d-none') : '';
        } else {
            $('.items').prop('checked', false);
            $('.delete_selected').addClass('d-none')
        }
    })

    // when check one item
    $(document).on('click', '.items', function() {
        if ($(this).is(':checked') && $('.items:checked').length > 0) {
            $('.delete_selected').removeClass('d-none');
            $('.items:checked').length == $('.items').length ? $('.check_all').prop('checked', true) : $(
                '.check_all').prop('checked', false)
        } else {
            $('.items:checked').length > 0 ? $('.delete_selected').removeClass('d-none') : $('.delete_selected')
                .addClass('d-none');
            $('.check_all').prop('checked', false);
        }
    });

    // delete selected items
    $('.delete_selected').on('click', function() {
        if ($('.items:checked').length > 0) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    let bulk_delete_form = $('#bulk_delete_form');
                    let url = bulk_delete_form.attr('action');
                    let data = new FormData($(bulk_delete_form)[0]);

                    function callBackFunction(response) {
                        $('.delete_selected').addClass('d-none');
                        $('.check_all').prop('checked', false)
                        if (response.status == 200) {

                            // Swal.fire({
                            //     icon: response.data.status,
                            //     title: 'Deleted!',
                            //     text: response.data.message,
                            //     customClass: {
                            //         confirmButton: 'btn btn-success'
                            //     }
                            // });
                            sweetAlert(response.data.status, response.data.message)
                            $('.table').DataTable().draw();
                        } else {
                            sweetAlert('error', 'error');
                        }
                    }

                    AxiosBulkDelete(url, data, callBackFunction);
                }
            });
        }
    });

    // delete one item
    $(document).on('click', '.delete_raw', function() {
        let form = $(this).parent().find('#delete_form'),
            id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-outline-danger ms-1'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                let url = form.attr('action');

                function callBackFunction(response) {
                    if (response.status == 200) {
                        sweetAlert(response.data.status, response.data.message)
                        $('.table').DataTable().draw();
                    }

                }

                AxiosDeleteItem(url, id, callBackFunction);
            }

        })
    });

    // image preview
    $('.photo').on('change', function(e) {
        let file = e.target.files[0],
            url = URL.createObjectURL(file);
        $(this).parents('.parent').find('.preview').attr('src', url);
    });
</script>

<script>
    function progress() {
        var bar = $('.bar');
        var percent = $('.percent');
        var status = $('#status');

        $('form').ajaxForm({
            beforeSend: function() {

            },
            uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
                bar.width(percentVal);
                percent.html(percentVal);
            },
            complete: function(xhr) {
                status.html(xhr.responseText);
            }
        });
    }

    // generate slug
    @foreach ($activeLanguages as $lang)

        $('.name_{{ $lang->locale }}').on('keyup', function() {

            var slug = getSlug($(this).val())

            $('.slug_{{ $lang->locale }}').val(slug);
        })
    @endforeach
</script>
