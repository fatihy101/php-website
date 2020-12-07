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

    <!-- post author -->

    <!-- post author block -->



    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="images/wedkapak-2.jpg" data-lightbox="wedkapak"> <img src="images/wedkapak-2-small.jpg"
                            alt=""></a>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="images/wedkapak-3.jpg" data-lightbox="wedkapak"> <img src="images/wedkapak-3-small.jpg"
                            alt=""></a>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="images/wedkapak-4.jpg" data-lightbox="wedkapak"> <img src="images/wedkapak-4-small.jpg"
                            alt=""></a>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="images/wedkapak-5.jpg" data-lightbox="wedkapak"> <img src="images/wedkapak-5-small.jpg"
                            alt=""></a>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="images/wedkapak-6.jpg" data-lightbox="wedkapak"> <img src="images/wedkapak-6-small.jpg"
                            alt=""></a>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="images/wedkapak-7.jpg" data-lightbox="wedkapak"> <img src="images/wedkapak-7-small.jpg"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="images/wedkapak.jpg" data-lightbox="wedkapak"> <img src="images/wedkapak-small.jpg"
                            alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="images/wedtop.jpg" data-lightbox="wedkapak"> <img src="images/wedtop-small.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="gallery">
                    <a href="images/galeri-9.jpg" data-lightbox="wedkapak"> <img src="images/galeri-9.jpg" alt=""></a>
                </div>
            </div>
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

    <script>
        // Bug holder: There's a bug about lightbox. This function prevents it.
        $(function () {
            $("a").on("click", function () {
                $(".active").remove()
            })
        })
    </script>

</body>

</html>