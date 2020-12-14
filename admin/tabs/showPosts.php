<?php 
require_once("../config.php");
$SQL = "SELECT * FROM Article ORDER BY article_no DESC";
$results = $conn->query($SQL);
?>
<div
    class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="col h3">Gönderileri Listele</h2>
</div>

<div class="container">

    <?php while($result = mysqli_fetch_array($results))
    {?>
    <!-- Starts here -->
    <div class="jumbotron">
        <div class="row mb-5 mt-n5">
            <h3 class="col-md-11"><?php echo $result["title"];?></h3>
            <small><b> <?php echo $result["date"];?> </b></small>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                <img class="article-photo" style ="height: 228px; width: 360px;" src="<?php echo $result["photo"];?>" alt="">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 article_body">
                <?php echo $result["paragraph"]; ?>
            </div>
        </div>
        <div class="row mb-n5">
            <div class="col-md-12 mt-5">
                <small class="mt-5"></small>
                <button class="delete-button btn btn-danger float-right"
                    data-field="<?php echo $result["article_no"]; ?>"> Kaldır</button>
            </div>
        </div>
    </div>
    <!-- Ends here -->
    <?php } ?>


</div>

<script>
    $(".delete-button").on('click', function () {
        var data = {"delete_post": "yes", "article_no":$(this).attr("data-field")}
        var el = $(this).parents("div.jumbotron")
        $.post("showPostsDB.php", data,
            function (data, textStatus) {
                $(el).slideUp();
            }
        );
    });
</script>