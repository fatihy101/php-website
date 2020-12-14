<?php 
require_once("../config.php");
$SQL = "SELECT * FROM Venue ORDER BY order_no DESC";
$results = $conn->query($SQL);
?>
<div class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="col h3">Salonları Listele</h2> <p class="mr-5 text-muted "><b>Not:</b> Sıra numarası <b>yüksek</b> olan, en üstte görünür. </p>
</div>

<div class="container">
    <?php while($result = mysqli_fetch_array($results))
    {?>
        <!-- Starts here -->
        <div class="jumbotron">
            <div class="row mb-5 mt-n5">
                    <h3 class="col-md-11 col-lg-11"><?php echo $result["venue_name"]; ?> </h3>
                    <input class="form-control photo-order float-right col-md-1 col-lg-1" type="number" placeholder="No" 
                    data-field="<?php echo $result["id"]; ?>" value="<?php echo $result['order_no'];?>" min=0>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                    <img id="article_photo" src="<?php echo $result["photo"]; ?>" style ="height: 228px; width: 360px;">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 article_body">
                <?php echo $result["description"]; ?>
                </div>
            </div>
            <div class="row mb-n5">
                <div class="col-md-12 mt-5">
                    <small class="mt-5"></small>
                    <button class="btn btn-danger float-right delete-button" data-field="<?php echo $result["id"]; ?>"> <i data-feather="x"></i> Kaldır</button>

                </div>
            </div>
        </div>
        <!-- Ends here -->
    <?php } ?>
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
           url: "VenueDB.php",
           data: $data,
           dataType: "json",
           success: function (response) {
               if(response.success){
                    $("#main").load("tabs/listVenues.php")
               }
               else{
                   alert("İstek gönderilirken sunucuda bir hata oluştu:<br>" + response.error)
               }
               
           }
       });
    }

    });

    $(".delete-button").on('click',function(){
       $data = {'deleteVenue':'yes', 'id':$(this).attr("data-field")}
       $.ajax({
           type: "POST",
           url: "VenueDB.php",
           data: $data,
           dataType: "json",
           success: function (response) {
               if(response.success){
                    $("#main").load("tabs/listVenues.php")
               }
               else{
                   alert(response.error)
               }
               
            }   
        });
    });

</script>