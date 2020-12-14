<?php 

if(isset($_POST['publish'])){
    require_once("config.php");

    $name = $_FILES['image']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES['image']["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

        // Convert to base64 
        $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']) );
        $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
        // Insert record
        $unformatted = "INSERT INTO Venue(venue_name, photo, description) VALUES( '%s','%s', '%s');";
    
        $SQL = sprintf($unformatted ,$_POST["post-title"], $image, $_POST["paragraph"]);
        
        if ($conn->query($SQL) === TRUE) {
            echo "done";
        
        } else {
            echo "Error: " . $SQL . "<br>" . $conn->error;
        }
  
  }
 
}


if(isset($_POST['updateOrder'])){
    require_once("config.php");

    $SQL = "UPDATE Venue Set order_no= ".$_POST["orderNo"]." WHERE id = ".$_POST["id"].""; 
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


if(isset($_POST['deleteVenue'])){
    require_once("config.php");

    $SQL = "DELETE FROM Venue WHERE id = ".$_POST["id"].""; 
    
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