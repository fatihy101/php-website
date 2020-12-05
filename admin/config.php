<?php 

mb_internal_encoding("UTF-8");

if (function_exists('date_default_timezone_set')) {
    date_default_timezone_set('Europe/Istanbul'); 
} else {
    putenv("TZ=Europe/Istanbul"); 

$servername = "db"; // If it's not Docker, $servername must be localhost for dev.
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


