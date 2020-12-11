$(document).ready(function () {

    $("#image-form").on("submit", function(e){

        if (window.File && window.FileReader && window.FileList && window.Blob) {
            
            if (!$('#imgInp').val()) 
            {
                $("#output").html("Lütfen bir dosya seçin.").show().fadeOut(7000)
                e.preventDefault()
                
            }

            var fsize = $('#imgInp')[0].files[0].size; //get file size
           

             //Allowed file size is less than 20 MB (20971520)
            if (fsize > 20971520) {
                $("#output").html("Fotoğrafın boyutu çok büyük! <br /> Lütfen boyutunu <b>" + bytesToSize(fsize) + "</b> altına düşürüp yükleyin.")
                .show().fadeOut(7000);
                e.preventDefault()
            }
            else{
                /*$("#imgInp").val('')*/ // It prevents to upload.
                $("#image-name").val('')
                $("#img-upload").attr('src', '')
                $("#output").removeClass("alert-warning")
                $("#output").addClass("alert-success")

                $("#output").html("Dosya başarıyla kaydedildi.").show().fadeOut(7000,function(){
                    $("#output").addClass("alert-warning")
                    $("#output").removeClass("alert-success")
                });
                
            }

        }
        else{
            $("#output").html("Tarayıcınız dosya yüklemeyi desteklemiyor. Farklı bir tarayıcı deneyin veya güncelleyin.").show().fadeOut(7000)
            
        }

    })

  


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