<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">

  <title>Admin Paneli</title>

</head>

<body>

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
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active-alt" href="#">
                <i data-feather="mail"></i>
                Gelen Mesajlar <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <i data-feather="file-plus"></i>
                Yeni Gönderi Yayınla 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
              <i data-feather="archive"></i>
                Yayınlanmış Gönderiler
              </a>
            </li>
   
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Galeri</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
          <li class="nav-item">
              <a class="nav-link" href="#">
              <i data-feather="crop"></i>
               Galeriyi Yönet
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i data-feather="plus"></i>
                Fotoğraf Ekle
              </a>
            </li>
          
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2 class="h3">Gelen Mesajlar</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
           
            <button type="button" class="btn btn-sm btn-outline-secondary mr-2"> 
              <i data-feather="archive"></i> Arşivlemiş</button>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Bu Hafta
            </button>
          </div>
        </div>
        
        

      </main>
    </div>
  </div>



  <!--  jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="js/jquery-3.5.1.slim.min.js" />
  <script src="js/bootstrap.bundle.min.js"> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"/>
  <script src="dashboard.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script>
  feather.replace()
  </script>
</body>

</html>