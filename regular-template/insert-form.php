<?php 
require_once("config.php");

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


  $sql = "INSERT INTO Forms (email, message, name, surname, datetime)
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