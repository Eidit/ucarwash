<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog - U CarWash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo1.png" width="300" height="90"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="pencucian.php" class="nav-link">Pencucian</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="user/login/index.php" class="nav-link">Log In</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Blog</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <?php
                $koneksi = mysqli_connect('localhost', 'root', '', 'db_pencucian');
                $query = "SELECT * FROM tb_blog ORDER BY id_blog ASC";
                $result = mysqli_query($koneksi, $query);

                if(!$result) {
                die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                }
      
                //kalau ini melakukan foreach atau perulangan
                while ($data = mysqli_fetch_assoc($result)) {

              ?>
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a href="blog1.php?id_blog=<?php echo $data ['id_blog']; ?>" class="block-20 img">
              <img src="images/<?php echo $data ['gambar']; ?>">
              </a>
              <div class="text px-md-5 pt-4">

                <h3 class="heading mt-2"><a href="blog1.php?id_blog=<?php echo $data ['id_blog']; ?>"><?php echo $data ['judul']?></a></h3>
                <p><a href="blog1.php?id_blog=<?php echo $data ['id_blog']; ?>" class="btn btn-primary">Selengkapnya
                <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2><a href="index.php"><img src="images/logo1.png" width="230" height="75"></a></h2>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informasi Lainnya</h2>
              <ul class="list-unstyled">
                <li><a href="tentang.php" class="py-2 d-block">Tentang Kami</a></li>
                <li><a href="team.php" class="py-2 d-block">Tim Kami</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Kontak Kami</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><a href="contact.php"><span class="icon icon-phone"></span><span class="text">Hubungi</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>