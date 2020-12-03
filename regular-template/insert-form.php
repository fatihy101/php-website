<?php 
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

$errors = array(); // array to hold validation errors
$data = array(); // array to pass back data

if (empty($_POST['name']))
    $errors['name'] = 'Lütfen soyadınızı yazınız.';

if (empty($_POST['surname']))
$errors['surname'] = 'Lütfen soyadınızı yazınız.';

if (empty($_POST['email']))
    $errors['email'] = 'Lütfen e-postanızı yazınız.';

if (empty($_POST['textarea']))
    $errors['textarea'] = 'Mesaj bölümünü boş bırakmayınız.';


if ( ! empty($errors)) 
{
  $data['success'] = false;
  $data['errors']  = $errors;
}
else 
{
  $name = $conn -> real_escape_string($_POST["name"]);
  $surname = $conn -> real_escape_string($_POST["surname"]);
  $email = $conn -> real_escape_string($_POST["email"]);
  $message = $conn -> real_escape_string($_POST["textarea"]);


  $sql = "INSERT INTO wedpress.Forms (email, message, name, surname, datetime)
  VALUES ('$email', '$message', '$name', '$surname', NOW())";


  if ($conn->query($sql) === TRUE) {
    $data['success'] = true;
    $data['message'] = 'Success!';
  } else {
    $errors["servererr"] = "Error: " . $sql . "<br>" . $conn->error;
    $data['success'] = false;
  }

}
echo json_encode($data);
$conn->close();
?>