<?php
include("config.php");

if(isset($_POST['upload_btn'])){
 
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
    $SQL = "insert into Gallery(photo) values('".$image."')";
    
    if ($conn->query($SQL) === TRUE) {
        echo "done";
      } else {
        echo "Error: " . $SQL . "<br>" . $conn->error;
      }
  
    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  }
 
}

// For retrieve the base64 data.
/*require_once "../config.php";
 $sql = "select * from Gallery where id=1";
    
    $result = $conn->query($sql);
    echo "New record created successfully";
  
    $row = mysqli_fetch_array($result);
    
    $image_src = $row['photo'];
    
    if($image_src== NULL)
    {
        echo $conn->error;
    }
  

 
<!--html-->
<img src='<?php echo $image_src; ?>' >
*/
?>