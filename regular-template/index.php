<?php 
require_once("config.php");
$SQL = "SELECT * FROM Article ORDER BY article_no DESC LIMIT 3;";
$articles = $conn->query($SQL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    require 'headtag-metas.html';
    ?>

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- owl Carousel Css -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <script src="js/form.js"></script>

</head>

<body style="background-color:#fff1ff;">
    <!--Topbar, navbar required-->
    <?php 
    require 'header-default.html';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-16">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="carousel-img" src="https://www.modernwedding.com.au/wp-content/uploads/2020/07/28/Anna-Wang.jpg"
                                style="height:600px; width:100%;pointer-events:none;">
                        </div>
                        <div class="item">
                            <img class="carousel-img" src="https://s3.amazonaws.com/busites_www/mvkeywestresort/subpage_banners_weddings_1506952002.jpg"
                                style="height:600px; width:100%;pointer-events:none;">
                        </div>
                        <br>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-3 myForm main-theme">
                    <h2 class="form-text"> TEKLİF AL </h2>
                    <form id="mainPageForm" method="post" action="insert-form.php">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="name" class="control-label form-text">AD</label>
                                <input type="text" class="form-control" name="name" placeholder="Adınız" required />
                            </div>

                            <div class="form-group col-md-5">
                                <label for="surname" class="control-label form-text">SOYAD</label>
                                <input type="text" class="form-control" name="surname" placeholder="Soyadınız"
                                    required></input>
                            </div>

                            <div class="col-md-11">
                                <label class="control-label form-text" for="textarea">MESAJ</label>
                                <textarea class="form-control" id="textarea" name="textarea" rows="3"
                                    placeholder="Mesajınızı buraya bırakabilirsiniz." required></textarea>
                            </div>

                            <div class="form-group col-md-11">
                                <label class="control-label form-text" for="email">E-POSTA</label>
                                <input id="email" name="email" type="email" placeholder="epostam@adres.com"
                                    class="form-control input-md" required>
                            </div>
                            <div class="form-group col-md-10">
                                <button id="submit" name="submit" class="btn btn-default">Gönder</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- big post center -->
    </div>

    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="section-header">
                        <h2 class="heading-line">Son Paylaşımlar</h2>
                        <a href="tum-gonderiler.php" class="btn btn-default btn-xs pull-right"> Tüm Gönderileri Gör</a>
                    </div>
                </div>
               
                    <?php while($article = mysqli_fetch_array($articles))
                    {
                        $first_words = implode(' ', array_slice(explode(' ', ltrim(strip_tags($article["paragraph"]))), 0, 7));

                        echo " <div class='col-lg-4 col-sm-4 col-md-6 col-xs-12'>
                        <div class='post-vertical-block'>
                        <!-- post vertical block -->
                        <div class='featured-img'>
                            <a href='gonderi.php?article_no=".$article["article_no"]."' class='imagehover'><img src='".$article["photo"]."' alt=''></a>
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
    <?php require 'footer-default.html';?>
    <!-- slider script -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider-carousel.js"></script>

</body>

</html>