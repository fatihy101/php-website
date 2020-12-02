<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Admin Giriş Ekranı</title>
  </head>
  
  <body class="text-center mt-60">
    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <form class="form-signin">
            <img src="images/logo.png" class="mt-5">
            <h1 class="h3 mb-3 font-weight-normal align-center"></h1>
            
            <label for="email-input" class="sr-only">E-postanız:</label>
            <input id="email-input" type="email" class="form-control mt-5 wid" placeholder="E-postanız:" oninvalid="this.setCustomValidity('Geçerli bir e-posta adresi girin.')" required autofocus>
            
            <label for="password-input" class="sr-only">Parolanız:</label>
            <input id="password-input" type="password"  class="form-control align-center mt-4" placeholder="Parolanız:" oninvalid="this.setCustomValidity('Bu alanı doldurun.')" required>
            
            <div class="checkbox mb-3">
              <label for="remember-me" class="float-right mr-3 my-2">
                <input id="remember-me" type="checkbox" value="remember-me" class="my-3"> Beni hatırla
              </label>
            </div>
            <button id= "submit_button" class="btn btn-lg btn-dark btn-block" type="submit">Giriş Yap</button>
          </form>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
    <!--  jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"/>
    <script src="js/bootstrap.bundle.min.js"> 
  
  </body>
</html>