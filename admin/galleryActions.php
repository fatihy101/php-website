<?php 
require_once("config.php");

if(isset($_POST['updateOrder'])){
    $SQL = "UPDATE Gallery Set order_no= ".$_POST["orderNo"]." WHERE id = ".$_POST["id"].""; 
    $data = array();
    if ($conn->query($SQL) === TRUE) {
        $data["success"] = true;
    } 
    else {
        $data["success"] = false;
        $data["error"] = "Error updating record: " . $conn->error;
        
    }
    echo json_encode($data);      
    $conn->close();
}

if(isset($_POST['deletePhoto'])){
    $SQL = "DELETE FROM Gallery WHERE id = ".$_POST["id"].""; 
    
    $data = array();
    if ($conn->query($SQL) === TRUE) {
        $data["success"] = true;
    } 
    else {
        $data["success"] = false;
        $data["error"] = "Error updating record: " . $conn->error;
        
    }
    echo json_encode($data);      
    $conn->close();
}
?>