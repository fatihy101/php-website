<?php 

mb_internal_encoding("UTF-8");

if (function_exists('date_default_timezone_set')) {
    date_default_timezone_set('Europe/Istanbul'); 
} else {
    putenv("TZ=Europe/Istanbul"); 
}
$servername = "localhost"; 
$username = "u9407810_test";
$password = "qa7hkgo3dlcu";
$db = "u9407810_test_wedpress";


$conn = new mysqli($servername, $username, $password, $db);


// Set the timezone-->  SET GLOBAL time_zone = '+03:00';

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}


