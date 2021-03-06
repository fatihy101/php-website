
$(document).ready(function () {
    // process the form
    $('form').submit(function (event) {

        // get the form data
        var formData = {
            'name': $('input[name=name]').val(),
            'surname': $('input[name=surname]').val(),
            'email': $('input[name=email]').val(),
            'textarea': $('textarea[name=textarea]').val()
        };

        // process the form
        $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url: 'insert-form.php', // the url where we want to POST
                data: formData, // our data object
                dataType: 'json', // what type of data do we expect back from the server
                encode: true
            })
            // using the done promise callback
            
            .done(function (data) {
                if (data.success) { // To check the form is on the main page or not.
                    if ($("form").attr('id') == "mainPageForm") {
                        $(".myForm").slideUp("slow", function () {
                            Swal.fire({
                                icon: 'success',
                                padding: '4em',
                                title: 'Formunuz başarıyla gönderildi.',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $(".myForm").remove();
                        }) //end of slideUp callback function
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Formunuz başarıyla gönderildi.',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('input[name=name]').val("")
                        $('input[name=surname]').val("")
                        $('input[name=email]').val("")
                        $('textarea[name=textarea]').val("")
                    }

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Hay aksi...',
                        text: 'Bir şeyler ters gitti!',
                    })
                }
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

    $(".carousel-control").click(function () {

        $(".myForm").slideDown("slow")
    });

});