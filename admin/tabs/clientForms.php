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

        <button type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
            <i data-feather="refresh-cw"></i> Yenile</button>

        <button type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
            <i data-feather="archive"></i> Arşivlenmiş</button>

        <button type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
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


    <?php 
    while($form = mysqli_fetch_array($client_forms)) {  //start of while ?> 
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
                class='btn btn-success btn-sm has_read_button' disabled><i data-feather='eye'></i></button>", $form['id']);
                } else{
                echo sprintf("<button type='button' name='hasRead' data-field='%s'
                class='btn btn-success btn-sm has_read_button'><i data-feather='eye'></i></button>", $form['id']);
                }
                ?>
            </div>
        </div> 
    <?php } // end of while?> 

    }
 


<!--forms-->

<script>
    // TODO: configure url and write a php for update data.
    feather.replace()
    $(document).ready(function () {
        $('.delete_button').on('click', function(){
            var current_id = $(this).attr("data-field")
            $.ajax({
                type: "POST",
                url: "crud_form/delete.php",
                data: {id:current_id},
                success: function (response) {
                    $(this).parents("div").eq(1).replaceWith("<div class='alert alert-warning mx-5' role='alert'>" +    
            "Formu başarıyla kaldırdınız.</div>");
            $(".alert-warning").slideUp(2000)
                }
            });

        })

        $('.archive_button').on('click', function(){
            $(this).prop('disabled',true)
            var current_id = $(this).attr("data-field")
            $(this).parents("div").eq(1).slideUp(700)
            

        })

        $('.has_read_button').on('click', function(){
            $(this).prop('disabled',true)
            var current_id = $(this).attr("data-field")
            $(this).parents("div").eq(1).slideUp(350)
            
            
        })

    })
    
</script>

