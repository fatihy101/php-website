<?php 
require_once("../config.php");

$SQL = "SELECT * FROM wedpress.Forms ORDER BY datetime DESC;";

$client_forms = $conn->query($SQL);


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
    while($form = mysqli_fetch_array($client_forms) ) {   ?>
        <p name="formID" hidden><?php echo $form["id"];?></p>
        <div id='client-message' class='alert mx-5' role='alert'>
            <div class='row'>    
                <div class='col align-baseline'>
                    <h5 style='margin-bottom: -1px;'><?php echo sprintf("%s %s", $form["name"], $form["surname"]);?></h5>
                    <?php echo sprintf("<a href='mailto:%s'> %s </a>", $form["email"], $form["email"]); ?>
                </div>
            
                <div class='col text-right'>
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
                <button type='button' name="deleteForm" class='btn btn-danger btn-sm'><i data-feather="x"></i></button>
                <?php if($form["archive"]==0){
                echo "<button type='button' name='archiveForm' class='btn btn-secondary btn-sm mx-1'><i data-feather='archive'></i></button>";
                } else{
                echo "<button type='button' name='archiveForm' class='btn btn-secondary btn-sm mx-1' disabled><i data-feather='archive'></i></button>";  
                } 
                
                if($form["has_read"]==1){
                echo "<button type='button' name='hasRead' class='btn btn-success btn-sm' disabled><i data-feather='eye'></i></button>";
                } else{
                echo "<button type='button' name='hasRead' class='btn btn-success btn-sm'><i data-feather='eye'></i></button>";
                }
                ?>
            </div>
        </div> 
    <?php }?>

    }
 


<!--forms-->

<script>
    feather.replace()
</script>