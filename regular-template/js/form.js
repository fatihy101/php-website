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
                url: '../insert-form.php', // the url where we want to POST
                data: formData, // our data object
                dataType: 'json', // what type of data do we expect back from the server
                encode: true
            })
             // using the done promise callback

            .done(function (data) {
                if(data.success){
                 $(".myForm").slideUp("slow")   
                }  
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    

    });

});
