$(document).ready(function () {

    var form = $("#image-uploader")
    form.submit(function (e) {
        e.preventDefault();
        var formData = new FormData();
        formData.append('photoimg', $('#photoimg')[0].files[0]);

        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: formData,
            dataType: "json",
            processData: false, // tell jQuery not to process the data
            contentType: false, // tell jQuery not to set contentType

            success: function (data) {
                console.log(data['error']);
                if (data.error == 1) {
                    $('.alert-danger').removeClass('hide').addClass('show').html(data['msg']);
                } else {
                    $('.alert-success').removeClass('hide').addClass('show').html('Uploaded');
                    console.log(data);
                }

            },
            error: function (data) {
                console.log(data);
                $('.alert-danger').removeClass('hide').addClass('show').html(data);
            },
        });
    });

    // Related with appearance of upload section. 
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function (event, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = label;

        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });
});