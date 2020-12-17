<?php 
require_once("config.php");

$SQL = "SELECT * FROM ContactUs";
$results = $conn->query($SQL);
while($result=mysqli_fetch_array($results)){

    switch($result["attr_name"]){
    case "address":
        $address = $result;
        break;
    case "address_title":
        $address_title = $result;
        break;
    case "contact_info_title":
        $contact_info_title = $result;
        break;
    case "email_address":
        $email_address = $result;
        break;
    case "email_address_title":
        $email_address_title = $result;
        break;
    case "location_title":
        $location_title = $result;
        break;
    case "location_html":
        $location_html = $result;
        break;
    case "page_text":
        $page_text = $result;
        break;
    case "page_title":
        $page_title = $result;
        break;
    case "phone_no":
        $phone_no = $result;
        break;
    case "phone_no_title":
        $phone_no_title = $result;
        break;
    }
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'headtag-metas.html';?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/form.js"></script>

</head>

<body>
    <?php require 'header-default.php';?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li class="active">İLETİŞİM</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-section">
                    <h1 class="page-title" <?php if($page_title["visibility"]!=1) echo "style='display:none;'";?>><?php echo $page_title["text"]; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="section-header">
                                <p class="lead" <?php if($page_text["visibility"]!=1) echo "style='display:none;'";?>><?php echo $page_text["text"]; ?></p>
                                <hr class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <form class="contact-form" action="insert-form.php" method="post">
                                <div class="row">

                                    <div class="col-md-6">
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="control-label" for="name">Ad<span>*</span></label>
                                            <input id="name" name="name" type="text" placeholder="Adınız"
                                                class="form-control input-md" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="surname">Soyad<span>*</span></label>
                                        <input id="surname" name="surname" type="text" placeholder="Soyadınız"
                                            class="form-control input-md" required>
                                    </div>
                                    <!-- Text input-->
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="email">E-posta<span>*</span></label>
                                        <input id="email" name="email" type="text" placeholder="epostam@adres.com"
                                            class="form-control input-md" required>
                                    </div>
                                    <!--textarea-->
                                    <div class="col-md-12">
                                        <label class="control-label" for="textarea">Mesajınız</label>
                                        <textarea class="form-control" id="textarea" name="textarea" rows="6"
                                            placeholder="Mesajınız"></textarea>
                                    </div>
                                    <!--Button-->
                                    <div class="form-group col-md-12">
                                        <button id="submit" name="submit" class="btn btn-default">Gönder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr class="col-lg-12 col-sm-8 col-md-8 col-xs-8">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="conatct-info">
                                <div class="section-header">
                                    <h2 class="heading-line" <?php if($contact_info_title["visibility"]!=1) echo "style='display:none;'";?>><?php echo $contact_info_title["text"];?></h2>
                                </div>
                                <div class="contact-details" <?php if($email_address["visibility"]!=1) echo "style='display:none;'";?>>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="contact-icon"><i class="fa fa-envelope-o"></i></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                                            <h4 class="contact-title" <?php if($email_address_title["visibility"]!=1) echo "style='display:none;'";?> ><?php echo $email_address_title["text"]; ?></h4>
                                            <p><?php echo $email_address["text"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-details" <?php if($address["visibility"]!=1) echo "style='display:none;'";?>>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="contact-icon"><i class="fa fa-home"></i></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <h4 class="contact-title" <?php if($address_title["visibility"]!=1) echo "style='display:none;'";?>><?php echo $address_title["text"]; ?></h4>
                                            <p><?php echo $address["text"];?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-details" <?php if($phone_no["visibility"]!=1) echo "style='display:none;'";?>>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="contact-icon"><i class="fa fa-share"></i></div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <h4 class="contact-title" <?php if($phone_no_title["visibility"]!=1) echo "style='display:none;'";?> ><?php echo $phone_no_title["text"];?></h4>
                                            <p><?php echo $phone_no["text"];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="col-lg-12 col-sm-8 col-md-8 col-xs-8">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="section-header">
                                <h2 class="heading-line"<?php if($location_title["visibility"]!=1) echo "style='display:none;'";?>><?php echo $location_title["text"];?></h2>
                            </div>

                        </div>
                    </div>
                    <p <?php if($location_html["visibility"]!=1) echo "style='display:none;'";?> >
                    <?php echo $location_html["text"]; ?>
                    </p>
                    <hr class="col-lg-12 col-sm-8 col-md-8 col-xs-8">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <br></br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require 'footer-default.php';?>

</body>

</html>