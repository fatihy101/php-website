<?php 
require_once("../config.php");
$SQL = "SELECT * FROM Gallery ORDER BY order_no";
$results = $conn->query($SQL);
?>

<div class=" row d-flex ju,stify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h3 col">Galeri </h2> <p class="mr-5 text-muted "><b>Not:</b> Sıra numarası <b>düşük</b> olan, en üstte görünür. </p>
      
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
                        <button type="button" class="btn btn-sm btn-danger delete-button" data-field="<?php echo $result["id"]; ?>"><i data-feather="x"></i> Sil</button>
                        <input class="form-control photo-order" type="number" placeholder="No" data-field="<?php echo $result["id"]; ?>" value="<?php echo $result['order_no'];?>" min=0>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>


<script>
    feather.replace()
    
    $(".photo-order").on('change',function(){
        if($(this).val()==''){
            alert("Bir sıra numarası giriniz.")
        }else{
       $data = {'updateOrder':'yes', 'orderNo':$(this).val(), 'id':$(this).attr("data-field")}
       $.ajax({
           type: "POST",
           url: "galleryActions.php",
           data: $data,
           dataType: "json",
           success: function (response) {
               if(response.success){
                    $("#main").load("tabs/galleryView.php")
               }
               else{
                   alert("İstek gönderilirken sunucuda bir hata oluştu:<br>" + response.error)
               }
               
           }
       });
    }

    });

    $(".delete-button").on('click',function(){
       $data = {'deletePhoto':'yes', 'id':$(this).attr("data-field")}
       $.ajax({
           type: "POST",
           url: "galleryActions.php",
           data: $data,
           dataType: "json",
           success: function (response) {
               if(response.success){
                    $("#main").load("tabs/galleryView.php")
               }
               else{
                   alert(response.error)
               }
               
            }   
        });
    });

   
</script>
<style>
    .photo-order {
        margin-left: 10em !important;
        width: 30px !important;
        height: 30px !important;
    }

    #refresh-button:hover {
        color: #cacaca;
        background-color: #885888;
    }
</style>