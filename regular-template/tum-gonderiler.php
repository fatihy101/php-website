<?php 
require_once("config.php");
$SQL = "SELECT * FROM Article ORDER BY article_no DESC;";
$articles = $conn->query($SQL);
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
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="row">
                        <?php while($article = mysqli_fetch_array($articles)){
                        $first_words = implode(' ', array_slice(explode(' ', trim(strip_tags($article["paragraph"]))), 0, 8));
                        // TODO: Align images' width and height.
                        echo " <div class='col-lg-4 col-sm-4 col-md-6 col-xs-12'>
                        <div class='post-vertical-block'>
                        <!-- post vertical block -->
                        <div class='featured-img'>
                            <a href='gonderi.php?article_no=".$article["article_no"]."' class='imagehover'><img class='postPhoto' src='".$article["photo"]."' alt=''></a>
                        </div>
                        <div class='post-vertical-content'>
                            <h2><a href='gonderi.php?article_no=".$article["article_no"]."' class='post-title'>".$article["title"]."</a></h2>
                            <p class='meta'> <span class='meta-date'>". $article["date"]."</span>
                            </p>".$first_words.'...'."<br>
                                <a href='gonderi.php?article_no=".$article["article_no"]."' class='btn-link'>Devamını Oku</a>
                            </div>
                        </div>
                        <!-- /.post vertical block -->
                        </div>";
                    }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'footer-default.php';?>

<style>
    .postPhoto{
        width: 250px;
        height: 320px;
    }
</style>

</body>

</html>