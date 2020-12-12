<?php
include("config.php");

if(isset($_POST['publish'])){
 
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
    $unformatted = "INSERT INTO Article(title, photo, paragraph, date) VALUES( '%s','%s', '%s', NOW());";
   
    $SQL = sprintf($unformatted ,$_POST["post-title"], $image, $_POST["paragraph"]);
    
    if ($conn->query($SQL) === TRUE) {
        echo "done ".$_POST["post-title"].$_POST["testVal"];
      
      } else {
        echo "Error: " . $SQL . "<br>" . $conn->error;
      }
  
    
  }
 
}

?>