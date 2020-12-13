<?php
require_once("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_REQUEST["id_change"];
    $name = $_FILES['image']['name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES['image']["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){
   
      // Convert to base64 
      $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']) );
      $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
      // Insert record
      $SQL = "UPDATE StaticPhotos SET photo = '$image' WHERE id =$id";
      
      if ($conn->query($SQL) === TRUE) {
          echo "done";
        } else {
          echo "Error: " . $SQL . "<br>" . $conn->error;
        }
    
      
    }
    echo $image;
    echo $_FILES['image']["name"];
    echo "Test";
}



?>