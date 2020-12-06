<?php 
// TODO: check the session
$data = array(); 
// DELETE
if($_POST["delete"] == "yes")
{
    $id = intval($_POST["id"]);

    require_once('config.php');

    $SQL="DELETE FROM wedpress.Forms WHERE id =$id"; 

    if ($conn->query($SQL) === TRUE) {
        $data['success'] = true;
        $data['message'] = 'Success!';
    } else {
        $data["servererr"] = "Error: " . $sql . "<br>" . $conn->error;
        $data['success'] = false;
    }
    $_POST["delete"] == "no";

    echo json_encode($data);
    $conn->close();
}

// ARCHIVE
if($_POST["archive_it"] == "yes")
{
    $id = intval($_POST["id"]);

    require_once('config.php');

    $SQL="UPDATE wedpress.Forms SET archive = 1, has_read = 1  WHERE id =$id"; 
   
    if ($conn->query($SQL) === TRUE) {
        $data['success'] = true;
        $data['message'] = 'Success!';
    } else {
        $data["servererr"] = "Error: " . $sql . "<br>" . $conn->error;
        $data['success'] = false;
    }
    $_POST["archive_it"] == "no";

    echo json_encode($data);
    $conn->close();
}

// UNARCHIVE
if($_POST["unarchive_it"] == "yes")
{
    $id = intval($_POST["id"]);

    require_once('config.php');

    $SQL="UPDATE wedpress.Forms SET archive = 0 WHERE id =$id"; 
   
    if ($conn->query($SQL) === TRUE) {
        $data['success'] = true;
        $data['message'] = 'Success!';
    } else {
        $data["servererr"] = "Error: " . $sql . "<br>" . $conn->error;
        $data['success'] = false;
    }
    $_POST["unarchive_it"] == "no";

    echo json_encode($data);
    $conn->close();
}

// HAS READ
if($_POST["has_read"] == "yes")
{
    $id = intval($_POST["id"]);

    require_once('config.php');

    $SQL="UPDATE wedpress.Forms SET has_read = 1 WHERE id =$id"; 
   
    if ($conn->query($SQL) === TRUE) {
        $data['success'] = true;
        $data['message'] = 'Success!';
    } else {
        $data["servererr"] = "Error: " . $sql . "<br>" . $conn->error;
        $data['success'] = false;
    }
    $_POST["has_read"] == "no";

    echo json_encode($data);
    $conn->close();
}


?>

