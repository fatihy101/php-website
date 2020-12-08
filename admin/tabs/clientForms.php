<?php 
require_once("../config.php");

$SQL = "SELECT * FROM wedpress.Forms ORDER BY datetime DESC;";

$client_forms = $conn->query($SQL);

// TODO: unarchive
?>
<!--Top-->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h3">Gelen Mesajlar</h2>
    <div class="btn-toolbar mb-2 mb-md-0" id="test">

        <button id="refresh_button" type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
            <i data-feather="refresh-cw"></i> Yenile</button>

        <button id="archived_ones_button" type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
            <i data-feather="archive"></i> Arşivlenmiş</button>

        <button id="unreads_button" type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
            <i data-feather="eye-off"></i> Okunmayanlar</button>

        <div class="dropdown">
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" 
            id="date-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="calendar"></i>
                Tümü
            </button>
            <div class="dropdown-menu" aria-labelledby="date-dropdown">
                <button class="dropdown-item" type="button">Bugün</button>
                <button class="dropdown-item" type="button">Bu hafta</button>
                <button class="dropdown-item" type="button">Bu ay</button>
                <button class="dropdown-item" type="button">Tümü</button>
            </div>
        </div>
    </div>
    
</div>

<!--forms-->

<div id="form_list">
    
</div>

    
 


<!--forms-->

<script>
    feather.replace()
    
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
    $(document).on('click', "#refresh_button", refreshPage)
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
    $(document).on('click', "#unreads_button", function(){
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

    $(document).on('click','#archived_ones_button', function(){
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

    
</script>

