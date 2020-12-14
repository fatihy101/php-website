<?php 

if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])){
    require_once("config.php");
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
      $SQL = "UPDATE AboutUs SET photo = '$image' WHERE id = 1";
      
      if ($conn->query($SQL) === TRUE) {
          echo "done";
        } else {
          echo "Error: " . $SQL . "<br>" . $conn->error;
        }
    
    }

    unset($_FILES['image']['tmp_name']);

    $conn->close();
}

if(isset($_POST["update"])){
    require_once("config.php");
    $text = $_POST["body"];
    $SQL = "UPDATE AboutUs SET paragraph = '$text' WHERE id = 1";

    if ($conn->query($SQL) === TRUE) {
        echo "done";
      } else {
        echo "Error: " . $SQL . "<br>" . $conn->error;
      }

      $conn->close();
}



?>