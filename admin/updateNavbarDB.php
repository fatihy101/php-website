<?php
if(isset($_POST["element-text-update"])){
    require_once("config.php");

    $id = $_POST["id"];
    $text = $_POST ["text"];

    $SQL = "UPDATE HeaderElements SET text = '$text' where id = $id";

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
    $id = $_POST["id"];
    $status = $_POST["visibility"];

    $response = array();

    $SQL = "UPDATE HeaderElements SET visibility = $status WHERE id = $id";

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