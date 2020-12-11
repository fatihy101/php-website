<?php 
require_once("config.php");

$SQL = "SELECT * FROM Article WHERE article_no= %s;";
$SQL = sprintf($SQL, $_GET["article_no"]);
// make var on article no.
$article = mysqli_fetch_array($conn->query($SQL));

// TODO: unarchive
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
                        <li class="active">Makale</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-section">
                    <h1 class="page-title"><?php echo $article["title"]; ?> <small class="date"><?php echo $article["date"]; ?> </small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12"><img id="article_photo" src="<?php echo $article["image_dir"]; ?>"
                        alt=""></div>
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 article_body">
                    <?php echo $article["paragraph"]; ?> 
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php require 'footer-default.html';?>
</body>

</html>

<style>
    .article_body {
        color: black;
    }
    
    .date{
        margin-left:0.5em;
    }
    .content {
        margin-bottom: 150px;
    }
</style>