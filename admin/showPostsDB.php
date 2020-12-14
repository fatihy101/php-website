<?php 
if(isset($_POST["delete_post"])){

    require_once("config.php");

    $no = $_POST["article_no"];
    $SQL = "DELETE FROM Article where article_no = $no"; 

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