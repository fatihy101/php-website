<?php 
require_once("config.php");
$SQL = "SELECT * FROM AboutUs";
$result = mysqli_fetch_array($conn->query($SQL));
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php require 'headtag-metas.html';?>

</head>

<body>
<?php require 'header-default.php';?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li class="active">Hakkımızda</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                           
                            <div class="post-img"> <img src="<?php echo $result["photo"];?>" width="1140" height="440"></div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="blog-social-share">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <div class="post-content">
                                        <?php echo $result["paragraph"];?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'footer-default.php';?>
</body>

</html>
