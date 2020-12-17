<?php 
require_once("config.php");
$SQL = "SELECT * FROM SocialMedia";
$social_medias = $conn->query($SQL);

$SQL = "SELECT photo FROM StaticPhotos WHERE attr_name='logo'";
$logo = mysqli_fetch_array($conn->query($SQL))["photo"];

$SQL = "SELECT id, venue_name FROM Venue ORDER BY order_no DESC ";
$venues = $conn->query($SQL);

$SQL = "SELECT id, text, visibility FROM HeaderElements;";
$navbar_items = $conn->query($SQL);

while($navbar_item = mysqli_fetch_array($navbar_items)){
    switch (intval($navbar_item["id"])) {
        case 1:
            # For catchword
            $catchword = $navbar_item; 
            break;
        
        case 2:
            # For home_page
            $home_page_button = $navbar_item; 
            break;

        case 3:
            # For gallery
            $gallery_button = $navbar_item; 
            
            break;

        case 4:
            # For venues
            $venues_button = $navbar_item; 
            if($venues_button["visibility"]==1) $venues_button_attr = ""; else $venues_button_attr ="style='display:none;'"; 
            break;

        case 5:
            # For about_us
            $about_us_button = $navbar_item;
            break;
        
        case 6:
            # For contact_us
            $contact_us_button = $navbar_item;
            break;
            
        case 7:
            # For all_articles
            $all_articles = $navbar_item;
            break;
    

    }
}

?>
<div class="container">
    <div class="topbar main-theme">
        <!-- topbar start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <p class="welcome-text" <?php if($catchword["visibility"]!=1) echo "style='display:none;'";?> >
                    <?php echo $catchword["text"];?></p>
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
                        <li <?php if($home_page_button["visibility"]!=1)  echo "style='display:none;'";?> ><a href='index.php'><?php echo $home_page_button["text"]; ?></a></li>
                        
                        <li <?php if($gallery_button["visibility"]!=1)  echo "style='display:none;'";?> ><a href='galeri.php'><?php echo $gallery_button["text"];?></a></li>

                      
                                <?php 
                                if(mysqli_num_rows($venues) != 0)
                                {   
                                    $counter=0; 
                                    while($venue = mysqli_fetch_array($venues)){
                                        if($counter==0) echo "<li ".$venues_button_attr." ><a href='salon.php?id=".$venue["id"]."'>".$venues_button["text"]."</a> <ul>";
                                        echo "<li ".$venues_button_attr." ><a href='salon.php?id=".$venue["id"]."'>".$venue["venue_name"]."</a></li>";
                                        
                                        $counter++;
                                    }
                                }
                                else
                                echo "<li ".$venues_button_attr." ><a href='#'>".$venues_button["text"]."</a> <ul>";
                                 ?>
                            </ul>
                        </li>
                        
                        <li <?php if($about_us_button["visibility"]!=1)  echo "style='display:none;'";?> ><a href='hakkimizda.php'><?php echo $about_us_button["text"]; ?> </a></li>
                        <li <?php if($contact_us_button["visibility"]!=1)  echo "style='display:none;'";?> ><a href='iletisim.php'><?php echo $contact_us_button["text"]; ?></a></li>
                        <li <?php if($all_articles["visibility"]!=1)  echo "style='display:none;'";?> ><a href='tum-gonderiler.php'><?php echo $all_articles["text"]; ?></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.navigations -->
        </div>
    </div>
</div>