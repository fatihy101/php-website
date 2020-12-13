<?php 

  session_start();
  $message="";
  if(count($_POST)>0) {
    require_once("config.php");
    $SQL = "SELECT * FROM AdminInfo WHERE username='" . $_POST['username'] ."' and password = '". $_POST['password']."'";
    $result = $conn-> query($SQL);
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
     $_SESSION["username"] = $row['username'];
    } else {
      $message = "Geçersiz kullanıcı adı ya da parola.";
    }
  }

  if(isset($_SESSION["username"])) {
    header("Location:index.php");
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
            
            <div class="message"><?php if($message!="") { echo "<div class='alert alert-danger mt-3'>".$message."</div>"; } ?></div>

            <label for="username" class="sr-only">E-postanız:</label>
            <input name="username" type="text" class="form-control mt-5 wid" placeholder="E-postanız:" required autofocus>
            
            <label for="pass-input" class="sr-only">Parolanız:</label>
            <input id="pass-input" name="password" type="password"  class="form-control align-center mt-4" placeholder="Parolanız:" required>
            
            <div class="mb-3">
            
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
   
  
  </body>
</html>