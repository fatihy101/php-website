<?php 
require_once("config.php");
$SQL = "SELECT * FROM SocialMedia";
$social_medias = $conn->query($SQL);

$SQL = "SELECT photo FROM StaticPhotos WHERE attr_name='logo'";
$logo = mysqli_fetch_array($conn->query($SQL))["photo"];

$SQL = "SELECT id, venue_name FROM Venue ORDER BY order_no DESC ";
$venues = $conn->query($SQL);


?>

<div class="container">
    <div class="topbar main-theme">
        <!-- topbar start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <p class="welcome-text">1 Numaralı Evlilik Adresi</p>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="header-social">
                        <ul>
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

    <!-- /.topbar end -->
    <div class="header">
        <!-- header -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-logo">
                        <!-- header logo -->
                        <a href="index.php"><img src="<?php echo $logo; ?>" style="max-height: 140px;" alt="logo"></a>
                    </div>
                    <!-- /.header logo -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.header -->
<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- navigations -->
                <div id='navigation'>
                    <ul>
                        <li><a href='index.php'>Ana Sayfa</a></li>
                        
                        <li><a href='galeri.php'>Galeri</a></li>

                      
                                <?php 
                                $counter=0; 
                                while($venue = mysqli_fetch_array($venues)){
                                    if($counter==0) echo "<li><a href='salon.php?id=".$venue["id"]."'>Salonlarımız</a> <ul>";
                                    echo "<li><a href='salon.php?id=".$venue["id"]."'>".$venue["venue_name"]."</a></li>";

                                    $counter++;
                                } ?>
                            </ul>
                        </li>
                        <li><a href='hakkimizda.php'>Hakkımızda</a></li>
                        <li><a href='iletisim.php'>İLETİŞİM</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.navigations -->
        </div>
    </div>
</div>