function refreshPage(){
    $("#form_list").empty()
    var data = {'refresh':"yes"}

    $.ajax({
        type: 'POST',
        url: 'form_operations.php',
        data: data,
        dataType: 'json',
        encode: true
    }).done( function (data) {
        if(data.success) {
            $("#form_list").append(data.forms)
            feather.replace()
        }
        else {
            $("#form_list").append("<div class='alert alert-danger' role='alert'>" +    
            "Bir sorun oluştu.</div>")
            $(".alert-danger").slideUp(3000)
        }
 
    });
}


 /*REFRESH ALL */
$("#refresh_button").on('click', refreshPage)
$(document).ready(refreshPage)
 

// Delete  a form
$(document).on('click','.delete_button', function(event){
    var current_id = $(this).attr("data-field")
    var data = {'id': current_id, 'delete':"yes"}
    
    var $current_object = $(this)
    
    $.ajax({
        type: 'POST',
        url: 'form_operations.php',
        data: data,
        dataType: 'json',
        encode: true
    }).done( function (data) {
        if(data.success) {
            $current_object.parents("div").eq(1).replaceWith("<div class='alert alert-warning mx-5' role='alert'>" +    
            "Formu başarıyla kaldırdınız.</div>");
            $(".alert-warning").slideUp(2000)
        }
        else {
            console.log("[ERROR]: " + data.servererr)
            $current_object.parents("div").eq(1).prepend("<div class='alert alert-danger' role='alert'>" +    
            "Form kaldırılırken bir sorun oluştu.</div>");
            $(".alert-warning").slideUp(2000)
        }
    });
})
  


$(document).on('click', '.archive_button', function(){
    var current_id = $(this).attr("data-field")
    var data = {'id': current_id, 'archive_it':"yes"}
    
    var $current_object = $(this)
    
    $.ajax({
        type: 'POST',
        url: 'form_operations.php',
        data: data,
        dataType: 'json',
        encode: true
    }).done( function (data) {
        if(data.success) {
            $current_object.prop('disabled',true)
            $current_object.parents("div").eq(1).slideUp(900)
        }
        else {
            console.log("[ERROR]: " + data.servererr)
            $current_object.parents("div").eq(1).prepend("<div class='alert alert-danger' role='alert'>" +    
            "Form arşivlenirken bir sorun oluştu.</div>");
            $(".alert-warning").slideUp(2000)
        }
    });

})

$(document).on('click','.has_read_button', function(){
    var current_id = $(this).attr("data-field")
    var data = {'id': current_id, 'has_read':"yes"}
    
    var $current_object = $(this)
    
    $.ajax({
        type: 'POST',
        url: 'form_operations.php',
        data: data,
        dataType: 'json',
        encode: true
    }).done( function (data) {
        if(data.success) {
            $current_object.prop('disabled',true)
            $current_object.html("<i data-feather='check'></i> Okundu")
            feather.replace()
        }
        else {
            console.log("[ERROR]: " + data.servererr)
            $current_object.parents("div").eq(1).prepend("<div class='alert alert-danger' role='alert'>" +    
            "Okundu olarak işaretlerken bir sorun oluştu.</div>");
            $(".alert-warning").slideUp(2000)
        }
        });
    
    
})



/*SHOW UNREAD MESSAGES */
$("#unreads_button").on('click', function(){
    $("#form_list").empty()
    
    var data = {'update_form_unreads':"yes"}
    
    $.ajax({
        type: 'POST',
        url: 'form_operations.php',
        data: data,
        dataType: 'json',
        encode: true
    }).done( function (data) {
        if(data.success) {
            $("#form_list").append(data.forms)
            feather.replace()
        }
        else {
            $("#form_list").append("<div class='alert alert-danger' role='alert'>" +    
            "Bir sorun oluştu.</div>")
            $(".alert-danger").slideUp(3000)
        }
 
    });
    
}); 

/** else if(data.forms_count==0){
            $("#form_list").append("<div class='alert alert-warning mx-5' role='alert'>" +    
            "Okunmamış mesajınız bulunmamaktadır.</div>");
            $(".alert-warning").slideUp(2000)
        } */

$("#archived_ones_button").on('click', function(){
    $("#form_list").empty()
    
    var data = {'update_form_archived':"yes"}
    
    $.ajax({
        type: 'POST',
        url: 'form_operations.php',
        data: data,
        dataType: 'json',
        encode: true
    }).done( function (data) {
        if(data.success) {
            $("#form_list").append(data.forms)
            feather.replace()
        }
        else {
            $("#form_list").append("<div class='alert alert-danger' role='alert'>" +    
            "Bir sorun oluştu.</div>")
            $(".alert-danger").slideUp(3000)
            
        }
    });

}); // end of #archived_ones_button.click