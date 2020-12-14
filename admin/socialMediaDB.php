<?php 

if(isset($_POST["vis_update"])){
    require_once("config.php");
    $platform = $_POST["platform"];
    $status = $_POST["visible"];

    $response = array();

    $SQL = "UPDATE SocialMedia SET visibility = $status WHERE platform = '$platform'";

    if($conn->query($SQL) === TRUE){
        $response["success"] = true;
    }
    else {
        $response["success"] = false;
        $response["error"] = $conn->error;
    }

    echo json_encode($response);
    $conn->close();
}

if(isset($_POST["url_update"])){
    require_once("config.php");
    $platform = $_POST["platform"];
    $url = $_POST["url"];

    $response = array();

    $SQL = "UPDATE SocialMedia SET url = '$url' WHERE platform = '$platform'";

    if($conn->query($SQL) === TRUE){
        $response["success"] = true;
    }
    else {
        $response["success"] = false;
        $response["error"] = $conn->error;
    }

    echo json_encode($response);
    $conn->close();
}

if(isset($_POST["insta_post_update"])){
    require_once("config.php");
    $id = $_POST["id"];
    $insta_url = $_POST ["insta_url"];

    $SQL = "UPDATE InstagramPosts SET url = '$insta_url' where id = $id";

    $response = array();

    if($conn->query($SQL) === TRUE){
        $response["success"] = true;
    }
    else {
        $response["success"] = false;
        $response["error"] = $conn->error;
    }

    echo json_encode($response);
    $conn->close();

}


?>