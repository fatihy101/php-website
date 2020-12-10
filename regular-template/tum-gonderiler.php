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
    <?php require 'header-default.html';?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li class="active">Tüm Gönderiler</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="row">
                        <?php while($article = mysqli_fetch_array($articles)){
                        $first_words = implode(' ', array_slice(explode(' ', $article["paragraph"]), 0, 8));

                        echo " <div class='col-lg-4 col-sm-4 col-md-6 col-xs-12'>
                        <div class='post-vertical-block'>
                        <!-- post vertical block -->
                        <div class='featured-img'>
                            <a href='gonderi.php?article_no=".$article["article_no"]."' class='imagehover'><img src='".$article["image_dir"]."' alt=''></a>
                        </div>
                        <div class='post-vertical-content'>
                            <h2><a href='gonderi.php?article_no=".$article["article_no"]."' class='post-title'>".$article["title"]."</a></h2>
                            <p class='meta'> <span class='meta-date'>". $article["date"]."</span>
                            </p>
                           ".$first_words.'...'."<br>
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
    <?php require 'footer-default.html';?>


</body>

</html>