<?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>uCarWash</title>
  </head>
  <body class="app sidebar-mini sidenav-closed">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="home.php">uCarWash</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
  </body>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <ul class="app-menu">
        <li><a class="app-menu__item" href="home.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tabel</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item active" href="pencucian/pencucian.php"><i class="icon fa fa-car"></i> Pencucian</a></li>
            <li><a class="treeview-item active" href="pelanggan/pelanggan.php"><i class="icon fa fa-users"></i> Pelanggan</a></li>
            <li><a class="treeview-item active" href="admin/admin.php"><i class="icon fa fa-user"></i> Admin</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <div class="app-title">
        <div>
<h3 align="center"><img src="gambar/logo1.png" width="190" height="60"></h3>
        </div>
      </div>
      <div class="row">


        
        <div class="col-md-3">
          <div class="widget-small primary"><a style="color : black" href="pencucian/pencucian.php" class="icon fa fa-car fa-3x"></a>
            <div class="info">
              <?php
              include 'conn/koneksi.php';
              $data_pencucian = mysqli_query($koneksi,"SELECT * FROM tb_pencucian");
              $jumlah_pencucian = mysqli_num_rows($data_pencucian);
              ?>
              <h4><?php echo $jumlah_pencucian; ?></h4>
              <h4>Pencucian</h4>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small info"><a style="color : black" href="pelanggan/pelanggan.php" class="icon fas fa-users"></a>
            <div class="info">
              <?php
              include 'conn/koneksi.php';
              $data_pencucian = mysqli_query($koneksi,"SELECT * FROM tb_pelanggan");
              $jumlah_pencucian = mysqli_num_rows($data_pencucian);
              ?>
              <h4><?php echo $jumlah_pencucian; ?></h4>
              <h4>Pelanggan</h4>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small warning"><a style="color : black" href="admin/admin.php" class="icon fa fa-user"></a>
            <div class="info">
              <?php
              include 'conn/koneksi.php';
              $data_pencucian = mysqli_query($koneksi,"SELECT * FROM tb_admin");
              $jumlah_pencucian = mysqli_num_rows($data_pencucian);
              ?>
              <h4><?php echo $jumlah_pencucian; ?></h4>
              <h4>Admin</h4>
            </div>
          </div>
        </div>
        
          </div>
        </div>
      </div>
    </main>
    <!-- Javascripts-->
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="js/plugins/chart.js"></script>
  </body>
</html>