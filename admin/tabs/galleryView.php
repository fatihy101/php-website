<?php 
require_once("../config.php");
$SQL = "SELECT * FROM Gallery ORDER BY order_no";
$results = $conn->query($SQL);
?>

<div class=" row d-flex ju,stify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h3 col">Galeri </h2> <p class="mr-5 text-muted ">Not: Sıra numarası yüksek olan, en üstte görünür. </p>
        <button class="btn theme-color"><i data-feather="check"></i> Değişiklikleri Kaydet</button>
</div>
<br>
<div class="container">
    <div class="card-group">
<?php while($result= mysqli_fetch_array($results)){ ?>
        <div class='col-lg-4 col-sm-4 col-md-6 col-xs-12 mt-3'>
            <div class="card mx-1">
                <img src="<?php echo $result['photo'];?>" class="card-img-top">
                <div class="card-body">
                    <div class="input-group">
                        <button type="button" class="btn btn-sm btn-danger" data-field="<?php echo $result["id"]; ?>"><i data-feather="x"></i> Sil</button>
                        <input class="form-control photo-order" type="number" placeholder="No" value="<?php echo $result['order_no'];?>" min=0>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>


<script>
    feather.replace()
</script>
<style>
    .photo-order {
        margin-left: 10em !important;
        width: 30px !important;
        height: 30px !important;
    }
</style>