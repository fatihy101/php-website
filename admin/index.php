<!doctype html>
<html lang="en">

<head>
  <?php require('headtag-metas.html');?>

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">

  <title>Admin Paneli</title>

</head>

<body>
  <?php
   require_once("config.php");
  ?>
  <nav class="navbar sticky-top flex-md-nowrap p-0 shadow theme-color">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">WEDPRESS Admin Paneli</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <button id="sign-out-button" class=" btn nav-link px-1" href="#">
          <i data-feather="log-out"></i> </button>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-theme-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a id="client-forms" role="button"  class="nav-link">
                <i data-feather="mail"></i>
                Gelen Mesajlar 
              </a>
            </li>
            <li class="nav-item">
              <a id="new-post" role="button" class="nav-link ">
                <i data-feather="file-plus"></i>
                Yeni Gönderi Yayınla
              </a>
            </li>
            <li class="nav-item">
              <a id="old-posts" role="button" class="nav-link">
                <i data-feather="archive"></i>
                Yayınlanmış Gönderiler
              </a>
            </li>

          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Galeri</span>
            <a class="d-flex align-items-center text-muted" aria-label="Add a new report">
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a id="gallery" role="button" class="nav-link">
                <i data-feather="crop"></i>
                Galeriyi Yönet
              </a>
            </li>
            <li class="nav-item">
              <a id="add-photo" role="button"  class="nav-link">
                <i data-feather="plus"></i>
                Fotoğraf Ekle
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <main id="main" role="main" class="mt-3 col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <!--Content-->
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
          <h4 class="alert-heading">Admin paneline hoş geldiniz!</h4>
          <hr>
          <p class="mb-0">Sorularınız ve istekleriniz için <a href="mailto:mertcanarat@provactus.com">mertcanarat@provactus.com</a>'a ulaşınız.</p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </div>

        <!--/Content-->
      </main>
    </div>
  </div>

  <!--  jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="libs/jquery.min.js"></script>
  <script src="libs/bootstrap.min.js"></script>
  <script src="js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>
</body>

</html>