<!DOCTYPE html>
<html lang="en">
  <head>
    <title>U CarWash</title>
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
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Cuci Kapanpun Dimanapun</h1>
	            <p style="font-size: 18px;">Membantu anda untuk menemukan pencucian mobil terbaik</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Untuk Anda</span>
            <h2 class="mb-2">Rekomendasi Pencucian Mobil</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<?php
                $koneksi = mysqli_connect('localhost', 'root', '', 'db_pencucian');
                $query = "SELECT * FROM tb_pencucian ORDER BY id_pencucian ASC";
                $result = mysqli_query($koneksi, $query);

                if(!$result) {
                die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                }
      
                //kalau ini melakukan foreach atau perulangan
                while ($data = mysqli_fetch_assoc($result)) {

              ?>
                <div class="item">
                  <div class="car-wrap rounded ftco-animate">
                    <a href="#"><img src="images/<?php echo $data ['gambar']; ?>" width="100" height="223"></a>
                  <div class="text">  
                    <h5><?php echo $data ['nm_pencucian']?></h5>
                    <p><span><?php echo $data ['alamat_pencucian'];?></span></p>
                    <p class="d-flex mb-0 d-block"><a href="user/login/index.php" class="btn btn-primary py-2 mr-1">Rute</a>
                    <a href="user/login/index.php" class="btn btn-secondary py-2 ml-1">Lihat</a></p>
                  </div>
                </div>
                </div>
                  
              <?php } ?>
		    				</div>
    					</div>
    				</div>
    			</div>
    </section>

        <section class="ftco-section">
          
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2>Blog Terbaru</h2>
          </div>
        </div>
        <div class="row d-flex">
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
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog1.php?id_blog=<?php echo $data ['id_blog']; ?>" class="block-20">
              <img src="images/<?php echo $data ['gambar']; ?>" width="320" height="250"></a>
              
              <div class="text pt-4">
                <h3 class="heading mt-2"><a href="blog1.php?id_blog=<?php echo $data ['id_blog']; ?>"><?php echo $data ['judul']?></a></h3>
                <p><a href="blog1.php?id_blog=<?php echo $data ['id_blog']; ?>" class="btn btn-primary">Lihat</a></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">Tentang Kita</span>
	            <h2 class="mb-4">Selamat Datang di U CarWash</h2>

	            <p align="justify">U Car Wash adalah tempat anda bisa mendapatkan atau menemukan pencucian mobil terbaik dari rekomendasi kami dan anda dapat memesan langsung tanpa harus mengantre.</p>
	          </div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Our Team</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/Adit.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">.........................................................</p>
                    <p class="name">Aditya Rizky Fauzi</p>
                    <span class="position">Engineer &amp; Design</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/fadli.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">.........................................................</p>
                    <p class="name">Anzala Filaili Fadlianto</p>
                    <span class="position">Technical Design</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/alan.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">.........................................................</p>
                    <p class="name">Alan Ramadhan</p>
                    <span class="position">UX Lead</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/yusuf.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">.........................................................</p>
                    <p class="name">Yusuf</p>
                    <span class="position">Back End</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/r.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">.........................................................</p>
                    <p class="name">R Wiranda Purba</p>
                    <span class="position">Sprint Master</span>
                  </div>
                </div>
              </div>
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