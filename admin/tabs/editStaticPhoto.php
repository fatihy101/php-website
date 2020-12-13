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
                <img src="<?php echo $photo;?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result["photo_name"];?></h5>
                    <form action="editStaticPhotoDB.php" method="POST" target="dummyframe"
                        enctype="multipart/form-data">

                        <input type="hidden" name="id_change" value="<?php echo $result["id"];?>">

                        <span class="btn theme-color btn-file text-white">
                            <i data-feather="refresh-cw"></i>
                            Değiştir <input class="image-button" type="file" name="image" accept="image/*">
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

    $('.image-button').on('change', function(){
        var parent = $(this).parents("form")
       
        parent.submit()
        parent.slideUp(1500, function() {
            $('#main').load("tabs/editStaticPhoto.php")
        })

    })
</script>


<style>

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

</style>

