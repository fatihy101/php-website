<?php
if(isset($_POST["element-text-update"])){
    require_once("config.php");

    $attr_name = $_POST["attr_name"];
    $text = $_POST["text"];


    $SQL = "UPDATE ContactUs SET text = '$text' where attr_name = '$attr_name'";

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


if(isset($_POST["vis_update"])){
    require_once("config.php");
    $attr_name = $_POST["attr_name"];
    $status = $_POST["visibility"];

    $response = array();

    $SQL = "UPDATE ContactUs SET visibility = $status WHERE attr_name = '$attr_name'";

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