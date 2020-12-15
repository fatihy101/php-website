<?php 
require_once("config.php");

$SQL = "SELECT * FROM Venue WHERE id= %s;";
$SQL = sprintf($SQL, $_GET["id"]);

$venue_info = mysqli_fetch_array($conn->query($SQL));

$next_order = intval($venue_info["order_no"] - 1);
$SQL ="SELECT id FROM Venue WHERE order_no=$next_order";

$q_result =$conn->query($SQL);
if(mysqli_num_rows($q_result)!=0) $next_venue_id = mysqli_fetch_array($q_result)["id"];
else $next_venue_id="";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php require 'headtag-metas.html';?>

</head>

<body>
    <?php require 'header-default.php';?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li class="active"><?php echo $venue_info["venue_name"]; ?> </li> 
                    </ol>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="page-section">
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
                            <div class="post-horizontal-block">
                                <!-- post horizontal block start -->
                                <div class="row">
                                    <div class="col-lg-8 col-sm-12 col-xs-12">
                                        <div class="featured-img mr-5">
                                            <a class="imagehover"><img src="<?php echo $venue_info["photo"]; ?> "></a>
                                        </div>
                                    </div>
                                    <h2 style="text-align: center; background: rgb(162,0,255);"><b class="b-header"><?php echo $venue_info["venue_name"]; ?> </b></h2>
                                    <hr />
                                    <div class=" col-lg-3 ml-5">
                                        <?php echo $venue_info["description"]; ?> 
                                    </div>
                                </div>
                            </div>


                            <!-- /.post horizontal block end -->
                            <?php if($next_venue_id !=""){
                                echo
                                "<div class='row'>
                                <div class='col-lg-12 col-sm-12 col-md-12 col-xs-12'>
                                    <a href='salon.php?id=".$next_venue_id."' class='btn btn-default'>Sonraki salon</a>
                                </div>
                            </div>";}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php require 'footer-default.php';?>

 
</body>

</html>