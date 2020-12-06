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
    <?php 
    while($form = mysqli_fetch_array($client_forms)) { 
        if($form['archive']==0){ //start of while ?> 
        <div id='client-message' class='alert mx-5' role='alert'>
            <div class='row'>    
                <div class='col align-baseline'>
                    <h5 style='margin-bottom: -1px;'><?php echo sprintf("%s %s", $form["name"], $form["surname"]);?></h5>
                    <?php echo sprintf("<a href='mailto:%s'> %s </a>", $form["email"], $form["email"]); ?>
                </div>
            
                <div class='col text-right'>
                    <small name="formID">#<?php echo $form["id"];?></small><br>
                    <small>Tarih: <?php echo $form["datetime"];?></small>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class='col'>
                    <p> 
                       <?php echo $form["message"];?>
                    </p>
                </div>
            </div>
            <div class='btn-toolbar' role='toolbar' aria-label='Toolbar with button groups'>
                <button type='button' name="deleteForm" data-field='<?php echo $form["id"];?>' 
                class='btn btn-danger btn-sm delete_button'><i data-feather="x"></i></button>
                <?php if($form["archive"]==1){
                echo sprintf("<button type='button' name='archiveForm'data-field='%s' 
                class='btn btn-secondary btn-sm archive_button mx-1' disabled><i data-feather='archive'></i></button>", $form['id']);
                } else{
                echo sprintf("<button type='button' name='archiveForm'data-field='%s' 
                class='btn btn-secondary btn-sm archive_button mx-1'><i data-feather='archive'></i></button>", $form['id']);  
                } 
                
                if($form["has_read"]==1){
                echo sprintf("<button type='button' name='hasRead' data-field='%s'
                class='btn btn-success btn-sm has_read_button' disabled><i data-feather='check'></i> Okundu</button>", $form['id']);
                } else{
                echo sprintf("<button type='button' name='hasRead' data-field='%s'
                class='btn btn-success btn-sm has_read_button'><i data-feather='eye'></i></button>", $form['id']);
                }
                ?>
            </div>
        </div> 
    <?php }
} // end of while?> 
</div>

    
 


<!--forms-->

<script>
    feather.replace()
  
      
    $(document).ready(function () {
        
        //TODO: Merge archived_ones_button and unreads_button bodies with a function if it's possible. 
        // Just archived ones
        $("#archived_ones_button").on('click', function(){
            $("#form_list").empty()

        // TODO: AJAX request for get the updated data.
          <?php $SQL = "SELECT * FROM wedpress.Forms ORDER BY datetime DESC;";
            $client_forms = $conn->query($SQL); ?>

            var form_view = `<?php  
            while($form = mysqli_fetch_array($client_forms)) { 
                if($form['archive']==1){ 
                   echo json_encode(sprintf("<div id='client-message' class='alert mx-5' role='alert'>
                    <div class='row'>    
                        <div class='col align-baseline'>
                            <h5 style='margin-bottom: -1px;'>%s %s </h5>
                            <a href='mailto:%s'> %s </a>
                        </div>
                    
                        <div class='col text-right'>
                            <small name='formID'>#%s </small><br>
                            <small>Tarih: %s</small>
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class='col'>
                            <p> 
                              %s
                            </p>
                        </div>
                    </div>
                    <div class='btn-toolbar' role='toolbar' aria-label='Toolbar with button groups'>
                        <button type='button' name='deleteForm' data-field='%s' 
                        class='btn btn-danger btn-sm delete_button'><i data-feather='x'></i></button>
                       
                        <button type='button' name='archiveForm' data-field='%s' 
                        class='btn btn-secondary btn-sm archive_button mx-1' disabled><i data-feather='archive'></i></button>
                       
                        <button type='button' name='hasRead' data-field='%s'
                        class='btn btn-success btn-sm has_read_button' disabled><i data-feather='check'></i> Okundu</button>
                        
                    </div>
                </div>", $form["name"], $form["surname"], $form["email"], $form["email"], 
                $form["id"], $form["datetime"],$form["message"], $form["id"], $form['id'], $form['id']));

                
                } //end of if
            }//End of while
            ?>`
            

            $("#form_list").append(form_view.replaceAll('\"' ,'')); 

            feather.replace()

        }); // end of #archived_ones_button.click

        // Show unread messages
        $("#unreads_button").on('click', function(){
            $("#form_list").empty()

        // TODO: AJAX request for get the updated data.
          <?php $SQL = "SELECT * FROM wedpress.Forms ORDER BY datetime DESC;";
            $client_forms = $conn->query($SQL); ?>

            var form_view = `<?php  
            while($form = mysqli_fetch_array($client_forms)) { 
                if($form['has_read']==0){ 
                   echo json_encode(sprintf("<div id='client-message' class='alert mx-5' role='alert'>
                    <div class='row'>    
                        <div class='col align-baseline'>
                            <h5 style='margin-bottom: -1px;'>%s %s </h5>
                            <a href='mailto:%s'> %s </a>
                        </div>
                    
                        <div class='col text-right'>
                            <small name='formID'>#%s </small><br>
                            <small>Tarih: %s</small>
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class='col'>
                            <p> 
                              %s
                            </p>
                        </div>
                    </div>
                    <div class='btn-toolbar' role='toolbar' aria-label='Toolbar with button groups'>
                        <button type='button' name='deleteForm' data-field='%s' 
                        class='btn btn-danger btn-sm delete_button'><i data-feather='x'></i></button>
                       
                        <button type='button' name='archiveForm' data-field='%s' 
                        class='btn btn-secondary btn-sm archive_button mx-1' disabled><i data-feather='archive'></i></button>
                       
                        <button type='button' name='hasRead' data-field='%s'
                        class='btn btn-success btn-sm has_read_button'><i data-feather='eye'></i></button>
                        
                    </div>
                </div>", $form["name"], $form["surname"], $form["email"], $form["email"], 
                $form["id"], $form["datetime"],$form["message"], $form["id"], $form['id'], $form['id']));

                
                } //end of if
            }//End of while
            ?>`
            

            $("#form_list").append(form_view.replaceAll('\"' ,'')); 

            feather.replace()

        }); 



        // refresh all
        $("#refresh_button").on('click', function () {
            $("#main").empty()
            $("#main").load("tabs/clientForms.php")
        })

        // Delete  a form
        $('.delete_button').on('click', function(event){
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

        $('.archive_button').on('click', function(){
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


        $('.has_read_button').on('click', function(){
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

    })
    
</script>

