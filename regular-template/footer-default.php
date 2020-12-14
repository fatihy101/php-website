<?php 
require_once("config.php");
$SQL = "SELECT * FROM SocialMedia";
$social_medias = $conn->query($SQL);

$SQL = "SELECT photo FROM StaticPhotos WHERE attr_name='logo'";
$logo = mysqli_fetch_array($conn->query($SQL))["photo"];

$SQL = "SELECT url FROM InstagramPosts ORDER BY id";
$instagram_posts = $conn->query($SQL);


?>
<div class="instagram-feed">
    <!-- instagram feed -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="section-header text-center">
                    <h2 class="heading-line"><i class="fa fa-instagram"></i> BİZİ INSTAGRAM'DAN TAKİP EDİN </h2>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="row" style="margin-left: 5%;">
                <?php
                $count=0;
                while($insta_post = mysqli_fetch_array($instagram_posts)){
                if($count!=0) $attr = "class='insta'"; else $attr =" ";
                
                if($insta_post["url"] != ""){
                    $count++;
                    echo " <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 nopadding'>
                    <iframe ".$attr." src='".$insta_post["url"]."' width='200' height='298' 
                        scrolling='no' allowtransparency='true'></iframe>
                </div>";
                }
            } ?>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopadding">
                    <div class="footer-logo">
                        <img src="<?php echo $logo; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopadding">
                    <div class="footer-social text-center">
                        <h2 class="widget-title">Sosyal Medya Hesaplarımızı Takip Edin!</h2>
                        <ul class="listnone">
                        <?php //Social Media accounts.
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
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="libs/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="libs/bootstrap.min.js"></script>

<script>
    // Bug holder: There's a bug about lightbox. This function prevents it. 
    $(function () {
        $("a").on("click", function () {
            $("#lightbox.active").remove()
        })

    })
</script>