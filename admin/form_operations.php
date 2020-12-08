<?php 
// TODO: check the session
$data = array(); 
// DELETE
if(isset($_POST["delete"]))
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
if(isset($_POST["archive_it"]))
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
if(isset($_POST["unarchive_it"]))
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
if(isset($_POST["has_read"]))
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


if(isset($_POST["update_form_unreads"]))
{
    require_once('config.php');
    $SQL = "SELECT * FROM wedpress.Forms ORDER BY datetime DESC;";
    $forms = $conn->query($SQL);
    // normal şartlarda 0 da dönebilir
    if ($forms->num_rows > 0) {
        $data['success'] = true;
        $formatted_forms = array();
        while($form = mysqli_fetch_array($forms)) { 
            if($form['has_read']==0){ 
               $formatted_form = sprintf("<div id='client-message' class='alert mx-5' role='alert'>
                <div class='row'>    
                    <div class='col align-baseline'>
                        <h5 style='margin-bottom: -1px;'>%s %s </h5>
                        <a href='mailto:%s'> %s </a>
                    </div>
                
                    <div class='col text-right'>
                        <small name='formID'>#%s </small><br>
                        <small>Tarih: %s</small>
                    </div>
                </div>
                <hr>
                <div class='row'>
                    <div class='col'>
                        <p> 
                          %s
                        </p>
                    </div>
                </div>
                <div class='btn-toolbar' role='toolbar' aria-label='Toolbar with button groups'>
                    <button type='button' name='deleteForm' data-field='%s' 
                    class='btn btn-danger btn-sm delete_button'><i data-feather='x'></i></button>
                   
                    <button type='button' name='archiveForm' data-field='%s' 
                    class='btn btn-secondary btn-sm archive_button mx-1'><i data-feather='archive'></i></button>
                   
                    <button type='button' name='hasRead' data-field='%s'
                    class='btn btn-success btn-sm has_read_button'><i data-feather='eye'></i></button>
                    
                </div>
            </div>", $form["name"], $form["surname"], $form["email"], $form["email"], 
            $form["id"], $form["datetime"],$form["message"], $form["id"], $form['id'], $form['id']);
            array_push($formatted_forms, $formatted_form);
            } //end of if
        }//End of while
    $data['forms'] = $formatted_forms;
    $data['forms_count'] = count($formatted_forms);
    } else {
        $data["servererr"] = "Error: " . $SQL . "<br>" . $conn->error;
        $data['success'] = false;
    }
    $_POST["update_form_unreads"] == "no";

    echo json_encode($data);
    $conn->close();
    
}

if(isset($_POST["update_form_archived"]))
{
    $formatted_forms = array();
    require_once('config.php');
    $SQL = "SELECT * FROM wedpress.Forms ORDER BY datetime DESC;";
    $forms = $conn->query($SQL);
    // normal şartlarda 0 da dönebilir
    if ($forms->num_rows > 0) {
        $data['success'] = true;

        while($form = mysqli_fetch_array($forms)) { 
            if($form['archive']==1){ 
            $formatted_form = sprintf("<div id='client-message' class='alert mx-5' role='alert'>
                <div class='row'>    
                    <div class='col align-baseline'>
                        <h5 style='margin-bottom: -1px;'>%s %s </h5>
                        <a href='mailto:%s'> %s </a>
                    </div>
                
                    <div class='col text-right'>
                        <small name='formID'>#%s </small><br>
                        <small>Tarih: %s</small>
                    </div>
                </div>
                <hr>
                <div class='row'>
                    <div class='col'>
                        <p> 
                        %s
                        </p>
                    </div>
                </div>
                <div class='btn-toolbar' role='toolbar' aria-label='Toolbar with button groups'>
                    <button type='button' name='deleteForm' data-field='%s' 
                    class='btn btn-danger btn-sm delete_button'><i data-feather='x'></i></button>
                
                    <button type='button' name='archiveForm' data-field='%s' 
                    class='btn btn-secondary btn-sm archive_button mx-1' disabled><i data-feather='archive'></i></button>
                
                    <button type='button' name='hasRead' data-field='%s'
                    class='btn btn-success btn-sm has_read_button' disabled><i data-feather='check'></i> Okundu</button>
                    
                </div>
            </div>", $form["name"], $form["surname"], $form["email"], $form["email"], 
            $form["id"], $form["datetime"],$form["message"], $form["id"], $form['id'], $form['id']);

            array_push($formatted_forms, $formatted_form);
            
            } //end of if
        }//End of while
    $data['forms'] = $formatted_forms;
    $data['forms_count'] = count($formatted_forms);
    } else {
        $data["servererr"] = "Error: " . $SQL . "<br>" . $conn->error;
        $data['success'] = false;
    }

    $_POST["update_form_archived"] == "no";

    echo json_encode($data);
    $conn->close();
    
}

if(isset($_POST["refresh"])){

    $formatted_forms = array();
    require_once('config.php');
    $SQL = "SELECT * FROM wedpress.Forms ORDER BY datetime DESC;";
    $forms = $conn->query($SQL);

    while($form = mysqli_fetch_array($forms)) { 
        if($form['archive']==0){ //start of while
        $form_body = sprintf("<div id='client-message' class='alert mx-5' role='alert'>
        <div class='row'>    
            <div class='col align-baseline'>
                <h5 style='margin-bottom: -1px;'> %s %s</h5>
                <a href='mailto:%s'> %s </a>
            </div>
        
            <div class='col text-right'>
                <small name='formID'>#%s</small><br>
                <small>Tarih: %s</small>
            </div>
        </div>
        <hr>
        <div class='row'>
            <div class='col'>
                <p> 
                    %s
                </p>
            </div>
        </div>
        <div class='btn-toolbar' role='toolbar' aria-label='Toolbar with button groups'>
            <button type='button' name='deleteForm' data-field='%s' 
            class='btn btn-danger btn-sm delete_button'><i data-feather='x'></i></button>", $form["name"], $form["surname"], $form["email"], $form["email"], $form["id"], $form["datetime"],
            $form["message"], $form["id"]);
            
            if($form["archive"]==1){
            $b1 = sprintf("<button type='button' name='archiveForm' data-field='%s' 
            class='btn btn-secondary btn-sm archive_button mx-1' disabled><i data-feather='archive'></i></button>", $form['id']);
            } else{
            $b1 = sprintf("<button type='button' name='archiveForm' data-field='%s' 
            class='btn btn-secondary btn-sm archive_button mx-1'><i data-feather='archive'></i></button>", $form['id']);  
            } 
            
            if($form["has_read"]==1){
            $b2 = sprintf("<button type='button' name='hasRead' data-field='%s'
            class='btn btn-success btn-sm has_read_button' disabled><i data-feather='check'></i> Okundu</button>    </div>
            </div> ", $form['id']);
            } else{
            $b2 = sprintf("<button type='button' name='hasRead' data-field='%s'
            class='btn btn-success btn-sm has_read_button'><i data-feather='eye'></i></button>    </div>
            </div> ", $form['id']);
            }
            
            array_push($formatted_forms, $form_body.$b1.$b2);
        }
    } // end of while
    $data["success"] = true;
    $data['forms'] = $formatted_forms;
    $data['forms_count'] = count($formatted_forms);
    
    $_POST["refresh"] == "no";

    echo json_encode($data);
    $conn->close();
}
?> 

