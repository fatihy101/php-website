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


    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                            <div class="post-img"> <img src="<?php echo $result["photo"];?>" width="1140" height="440">
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="blog-social-share">
                                        <ul>
                                            <?php //Social Media accounts.  
                                        $SQL = "SELECT * FROM SocialMedia";
                                        $social_medias = $conn->query($SQL);
                                        
                                            while($social_media = mysqli_fetch_array($social_medias)){
                                                if($social_media["visibility"]==1) $attr = ""; else $attr ="style='display:none;'";
                                                  

                                                    switch ($social_media["platform"]) {
                                                        case 'facebook':
                                                            echo "<li ".$attr."><a href='".$social_media["url"]."'><i class='fa fa-facebook'></i></a></li>";
                                                            break;

                                                        case 'instagram':
                                                            echo "<li ".$attr."><a href='".$social_media["url"]."'><i class='fa fa-instagram'></i></a></li>";
                                                            break;

                                                        case 'pinterest':
                                                            echo "<li ".$attr."><a href='".$social_media["url"]."'><i class='fa fa-pinterest'></i></a></li>";
                                                            break;
                                                            
                                                        case 'twitter':
                                                            echo "<li ".$attr."><a href='".$social_media["url"]."'><i class='fa fa-twitter'></i></a></li>";
                                                            break;
                                                            
                                                        case 'google_plus':
                                                            echo "<li ".$attr."><a href='".$social_media["url"]."'><i class='fa fa-google-plus'></i></a></li>";
                                                            break;
                                                            
                                                    }

                                            } ?>
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