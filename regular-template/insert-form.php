<?php 
$servername = "db"; // If it's not Docker, $servername must be localhost
$username = "root";
$password = "example";
$db = "wedpress";

$conn = new mysqli($servername, $username, $password, $wedpress);


// Set the timezone-->  SET GLOBAL time_zone = '+03:00';

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

$name = $conn -> real_escape_string($_POST["name"]);
$surname = $conn -> real_escape_string($_POST["surname"]);
$email = $conn -> real_escape_string($_POST["email"]);
$message = $conn -> real_escape_string($_POST["textarea"]);

$sql = "INSERT INTO wedpress.Forms (email, message, name, surname, datetime)
VALUES ('$email', '$message', '$name', '$surname', NOW())";


if ($conn->query($sql) === TRUE) {
    readfile("404error-page.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

$conn->close();
?>