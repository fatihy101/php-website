<?php 
require_once("config.php");
$SQL = "SELECT * FROM Gallery ORDER BY order_no";
$results = $conn->query($SQL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'headtag-metas.html';?>
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
</head>

<body>
    <?php require 'header-default.html';?>

    <!-- post author block -->

    <!-- post author -->

    <br>
    <div class="container">
        <div class="row">
            <?php while($result = mysqli_fetch_array($results)){  ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="<?php echo $result["photo"]; ?>" data-lightbox="wedkapak"> <img src="<?php echo $result["photo"]; ?>"></a>
                </div>
            </div>
       <?php }  ?>

        </div>
    </div>


    <!-- .related post block --><br> <br>
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <div class="next-prev-post">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="prev-post">
                        <h3 class="prev-link-title"><a href="#" class="title">Hayellerinizdeki düğün için</a></h3>
                        <p><a href="index.php" class="prev-link btn-link">Hemen Başvurun!</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="next-post">
                        <h3 class="next-link-title"><a href="#" class="title">Merak ettiğiniz bir konu için</a></h3>
                        <p><a href="contactus-page.php" class="next-link btn-link">Bizimle iletişime geçin!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer-default.html';?>
    <script src="js/lightbox-plus-jquery.min.js"></script>

  

</body>

</html>