<?php 
  // TODO: Fix submit button
  session_start();
  if(isset($_SESSION["logged_in"]) and $_SESSION["logged_in"] == 1){ // if already logged in.
      header("Location: panel.php"); // TODO: index.php --> rename_to --> panel.php
      die();
    }
  
  if(!empty($_POST["username"]) and !empty($_POST["pass-input"])){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $pass = mysqli_real_escape_string($conn, $_POST["pass-input"]);
    
    require_once("config.php");

    $SQL = "SELECT * FROM wedpress.AdminInfo where username='{$username}' AND  password='{$pass}'";
    
    $results = $conn->query($SQL);

		$row_n = mysqli_num_rows($results);


		if( $row_n == 1 ) { // login successful.
			session_start();
			$_SESSION["logged_in"] = 1;
      echo "Başarılı";
      header("Location: panel.php");
		} else {
			session_start();
			$_SESSION["logged_in"] = 0;
			echo "parola yanlış";
		}
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <?php require('headtag-metas.html');?>
    <title>Admin Giriş Ekranı</title>
  </head>
  
  <body class="text-center mt-60">
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <form class="form-signin" method="post" action="">
            <img src="images/logo.png" class="mt-5">
            <h1 class="h3 mb-3 font-weight-normal align-center"></h1>
            
            <label for="username" class="sr-only">E-postanız:</label>
            <input name="username" type="text" class="form-control mt-5 wid" placeholder="E-postanız:" required autofocus>
            
            <label for="pass-input" class="sr-only">Parolanız:</label>
            <input id="pass-input" type="password"  class="form-control align-center mt-4" placeholder="Parolanız:" required>
            
            <div class="checkbox mb-3">
              <label for="remember-me" class="float-right mr-3 my-2">
                <input name="remember-me" type="checkbox" value="remember-me" class="my-3"> Beni hatırla
              </label>
            </div>
            <button id= "submit_button" class="btn btn-lg btn-dark btn-block" type="submit">Giriş Yap</button>
          </form>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
    <!--  jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="/libs/jquery.min.js"></script>
    <script src="/libs/bootstrap.min.js"/></script>
    <script defer src="js/login.js"></script>
  
  </body>
</html>