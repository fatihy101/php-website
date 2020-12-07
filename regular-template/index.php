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
                            <img src="https://www.modernwedding.com.au/wp-content/uploads/2020/07/28/Anna-Wang.jpg"
                                alt="..." style="height:600px; width:1400px;">
                        </div>
                        <div class="item">
                            <img src="https://s3.amazonaws.com/busites_www/mvkeywestresort/subpage_banners_weddings_1506952002.jpg"
                                alt="..." style="height:600px; width:1400px;">
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
                <div class="myForm main-theme">
                    <h2 class="form-text"> TEKLİF AL </h2>
                    <form id="mainPageForm" method="post" action="insert-form.php">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="name" class="control-label form-text">AD</label>
                                <input type="text" class="form-control" name="name" 
                                placeholder="Adınız" required />
                            </div>

                            <div class="form-group col-md-5">
                                <label for="surname" class="control-label form-text">SOYAD</label>
                                <input type="text" class="form-control" name="surname"
                                    placeholder="Soyadınız" required ></input>
                            </div>
                            
                            <div class="col-md-12">
                                <label class="control-label form-text" for="textarea">MESAJ</label>
                                <textarea class="form-control" id="textarea" name="textarea" rows="3"
                                     placeholder="Mesajınızı buraya bırakabilirsiniz." required></textarea>
                            </div>

                            <div class="form-group col-md-8">
                                    <label class="control-label form-text" for="email">E-POSTA</label>
                                    <input id="email" name="email" type="email" placeholder="epostam@adres.com" class="form-control input-md" required>
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
                        <a href="#" class="btn btn-default btn-xs pull-right"> SEE ALL POSTS</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                    <div class="post-vertical-block">
                        <!-- post vertical block -->
                        <div class="featured-img">
                            <a href="#" class="imagehover"><img src="images/post-horizontal-img-4.jpg" alt=""></a>
                        </div>
                        <div class="post-vertical-content">
                            <h2><a href="#" class="post-title">Are You Just Engaged Tip for Wedding in 2017</a></h2>
                            <p class="meta"> <span class="meta-date">19 Jan,
                                    2017</span>
                            </p>
                            <p>Rhoncus sed eros ipsum consequt act orci semper interdum elit.</p>
                            <a href="#" class="btn-link">Read More..</a>
                        </div>
                    </div>
                    <!-- /.post vertical block -->
                </div>
                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                    <div class="post-vertical-block">
                        <!-- post vertical block -->
                        <div class="featured-img">
                            <a href="#" class="imagehover"><img src="images/post-horizontal-img-2.jpg" alt=""></a>
                        </div>
                        <div class="post-vertical-content">
                            <h2><a href="#" class="post-title">Best 20+ Real Wedding Couple Inspiration for 2017</a>
                            </h2>
                            <p class="meta"> <span class="meta-date">19 Jan,
                                    2017</span>
                            </p>
                            <p>Tempor odio sed vehicula ornare libero eivamusd donec sodales etios.</p>
                            <a href="#" class="btn-link">Read More..</a>
                        </div>
                    </div>
                    <!-- /.post vertical block -->
                </div>
                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                    <div class="post-vertical-block">
                        <!-- post vertical block -->
                        <div class="featured-img">
                            <a href="#" class="imagehover"><img src="images/post-horizontal-img-3.jpg" alt=""></a>
                        </div>
                        <div class="post-vertical-content">
                            <h2><a href="#" class="post-title">Are You Just Engaged Tip
                                    for Wedding in 2017</a></h2>
                            <p class="meta"> <span class="meta-date">19 Jan, 2017</span>
                            </p>
                            <p>Rhoncus sed eros ipsum consequat ac orci
                                semper interdum sed elit.</p>
                            <a href="#" class="btn-link">Read More..</a>
                        </div>
                    </div>
                    <!-- /.post vertical block -->
                </div>
            </div>
        </div>  
   
    <?php require 'footer-default.html';?>
    <!-- slider script -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider-carousel.js"></script>

</body>

</html>