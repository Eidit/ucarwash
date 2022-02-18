<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pencucian - U CarWash</title>
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
          <form method="GET" action="pencucian.php" style="text-align: center;">
          <input class="form-control" placeholder="Search" type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"/></br></br></br></br>
        </form>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pencucian <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Silahkan Pilih Pencucian</h1>
          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section ftco-cart">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="car-list">
              <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th class="bg-primary heading">Alamat</th>
                    <th class="bg-dark heading">Contact</th>
                    <th class="bg-black heading">Fasilitas</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                $koneksi = mysqli_connect('localhost', 'root', '', 'db_pencucian');
                if(isset($_GET['kata_cari'])) {
          $kata_cari = $_GET['kata_cari'];

          //jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
          //jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
          $query = "SELECT * FROM tb_pencucian WHERE id_pencucian like '%".$kata_cari."%' OR nm_pencucian like '%".$kata_cari."%' ORDER BY id_pencucian ASC";
          // $query = "SELECT * FROM mhs WHERE id like '%".$kata_cari."%' OR nama like '%".$kata_cari."%' OR keterangan like '%".$kata_cari."%' ORDER BY id ASC";
        } else {
          //jika tidak ada pencarian, default yang dijalankan query ini
          $query = "SELECT * FROM tb_pencucian ORDER BY id_pencucian ASC";
        }

        $result = mysqli_query($koneksi, $query);

        if(!$result) {
          die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        }
      
        //kalau ini melakukan foreach atau perulangan
        while ($row = mysqli_fetch_assoc($result)) {

              ?>
                  <tr class="">
                    <td class="car-image"><a href="#"><img src="images/<?php echo $row ['gambar']; ?>" width="300" alt="223"></a></td>
                    <td class="product-name">
                      <h3><?php echo $row ['nm_pencucian']?></h3>
                    </td>
                    
                    <td class="price">
                      <p class="btn-custom"><a href="user/login/index.php">Lihat</a></p>
                      <div class="price-rate">
                        <h3>
                          <span class="subheading"><?php echo $row ['alamat_pencucian']?></span>
                        </h3>
                      </div>
                    </td>
                    
                    <td class="price">
                      <p class="btn-custom"><a href="user/login/index.php">Lihat</a></p>
                      <div class="price-rate">
                        <h3>
                          <span class="subheading"><?php echo $row ['notelp_pencucian']?></span>
                        </h3>
                      </div>
                    </td>

                    <td class="price">
                      <p class="btn-custom"><a href="user/login/index.php">Lihat</a></p>
                      <div class="price-rate">
                        <h1>
                          <span class="subheading"><?php echo $row ['ket']?></span>
                        </h1>
                      </div>
                    </td>
                    <?php }?>
                  </tr><!-- END TR-->

                </tbody>
              </table>
            </div>
          </div>
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