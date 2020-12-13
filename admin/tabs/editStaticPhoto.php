<?php 
require_once("../config.php");
$SQL = "SELECT * FROM StaticPhotos ORDER BY id";
$results = $conn->query($SQL);
?>
<iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe" hidden></iframe>

<div
    class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="col h3">Sabit Fotoğraflar</h2>
</div>
<br><br>
<div class="container">
    <div class="card-group">
<?php while($result = mysqli_fetch_array($results)){
    if($result["photo"]=="") $photo = "https://via.placeholder.com/300";
    else $photo = $result["photo"];
    ?>
   
        <div class='col-lg-4 col-sm-4 col-md-6 col-xs-12 mt-3'>
            <div class="card mx-1">
                <img id="img-upload" src="<?php echo $photo;?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result["photo_name"];?></h5>
                    <form action="editStaticPhotoDB.php" method="POST" target="dummyframe">
                        <input type="hidden" name="id_change" val="<?php echo $result["id"];?>">
                        <span class="btn theme-color btn-file text-white">
                            <i data-feather="refresh-cw"></i>
                            Değiştir <input type="file" name="image" id="imgInp" accept="image/*" onchange="this.form.submit()">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    
<?php }?>
    </div>
</div>

<script>
    feather.replace()


</script>

<style>
    #post-title {
        border: 1px solid #cdcdcd;
        margin-bottom: 1em;
        font-weight: bold;
    }

    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload {
        width: 100%;
    }
</style>