<?php
  error_reporting(0);
  include 'function/connect.php';
?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GoCeting</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="shortcut icon" href="dist/img/logos.png" type="image/x-icon">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free-6.1.1-web/">
  <style type="text/css">

::-webkit-scrollbar {
    width: 10px;
}
 
::-webkit-scrollbar-track {
    /* -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);      */
    background: #666;    
}
 
::-webkit-scrollbar-thumb {
    background: #232323;
}

.kecil {
  font-size: 14px;
  font-weight: lighter;
}

.brand-link {
  line-height: 1;
  padding: 1rem 0.5rem 0.1rem 0.5rem;
}

.navbar {
  line-height: 1;
  padding: 0.56rem 0.5rem;

}

.navbar-nav {
  margin-top: 10px;
}

.jdl {
  transition: 1s ease-in-out;
  color: white;
}

    @media screen and (max-width: 680px){
      h3.respon{
        font-size: 20px;
      }

      h1.respon{
        font-size: 20px;
      }

    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
<!--   <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      

    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand" style="background-color: #0975b7;">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" style= "border-bottom: 1px solid white">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-5" style="opacity: .9"> -->
      <!-- <i class="fas fa-laugh-wink"></i> -->
      <center>
        <span class="font-weight-bold jdl" style="margin-top: 50px !important;">GOCETING<p class="kecil">Gorontalo Cegah Stunting</p></span> 
      </center>
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          

          <li class="nav-item">
            <a href="?module=dashboard" class="nav-link">
              <i class="nav-icon fa-solid fa-house"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="?module=bayi_balita" class="nav-link">
              <i class="nav-icon fa-solid fa-baby"></i>
              <p>
                Bayi & Balita
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?module=laki_remaja" class="nav-link">
              <i class="nav-icon fa-solid fa-child"></i>
              <p>
                Remaja
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?module=dewasa" class="nav-link">
              <i class="nav-icon fa-solid fa-person"></i>
              <p>
                Dewasa
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?module=ibu_hamil" class="nav-link">
              <i class="nav-icon fa-solid fa-person-pregnant"></i>
              <p>
                Ibu Hamil
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php
      if ($_GET['module'] == "dashboard"){
        include 'admin/dashboard/dashboard.php';
      }else if ($_GET['module'] == "dewasa") {
        include 'admin/remaja/remaja.php';
      }else if ($_GET['module'] == "bayi_balita") {
        include 'admin/bayi_balita/bayi_balita.php';
      }

      else if ($_GET['module'] == "laki_laki") {
        include 'admin/bayi_balita/laki_laki.php';
      }else if ($_GET['module'] == "perempuan") {
        include 'admin/bayi_balita/perempuan.php';
      }

      //2 sampai 5 tahun
      else if ($_GET['module'] == "2sampai5thn_perempuan") {
        include 'admin/bayi_balita/2sampai5thn_perempuan.php';
      }else if ($_GET['module'] == "2sampai5thn_laki_laki") {
        include 'admin/bayi_balita/2sampai5thn_laki_laki.php';
      }

      else if ($_GET['module'] == "umur_laki") {
        include 'admin/bayi_balita/umur_laki.php';
      }

       else if ($_GET['module'] == "umur_perempuan") {
        include 'admin/bayi_balita/umur_perempuan.php';
      }

      //ibu hamil
      else if ($_GET['module'] == "ibu_hamil"){
        include 'admin/ibu_hamil/ibu_hamil.php';
      }

      //remaja
      elseif($_GET['module'] == "laki_remaja"){
        include 'admin/dewasa/laki_remaja.php';
      }elseif($_GET['module'] == "perempuan_remaja"){
        include 'admin/dewasa/perempuan_remaja.php';
      }

      //artikel
      elseif($_GET['module'] == 'artikel-1'){
        include 'admin/artikel/artikel1.php';
      }elseif($_GET['module'] == 'artikel-2'){
        include 'admin/artikel/artikel2.php';
      }elseif ($_GET['module'] == 'artikel-3') {
        include 'admin/artikel/artikel3.php';
      }




      else{
        include 'admin/dashboard/dashboard.php';
      }

    ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; RM.2023 <a href="index.php">GoCeting</a>.</strong>
    All rights reserved.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div> -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

  $(document).on('collapsed.lte.pushmenu', function(){
    $(".jdl").css("color","transparent")
  })
  $(document).on('shown.lte.pushmenu', function(){
    $(".jdl").css("color","white")
  })

  $(document).on('expanded.lte.controlsidebar', function(){
    $(".jdl").css("color","white")
  })
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>


