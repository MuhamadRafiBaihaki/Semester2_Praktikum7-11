<?php 
     if( !isset($_POST["submit"]) ) {
        header("Location: project1.php");
        exit;
    }
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://www.instagram.com/rafibaihaki33/" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rafi Baihaki's Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/profilepicture.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muhamad Rafi Baihaki</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="praktikum1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="p2belanja.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum4.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 4</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum5.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 5</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                PROJECT 1
                <span class="right badge badge-danger">New</span>
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">PROJECT 1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <hr>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">TGL PERIKSA</th>
      <th scope="col">KODE PASIEN</th>
      <th scope="col">NAMA PASIEN</th>
      <th scope="col">GENDER</th>
      <th scope="col">BERAT</th>
      <th scope="col">TINGGI</th>
      <th scope="col">NILAI BMI</th>
      <th scope="col">STATUS BMI</th>
    </tr>
  </thead>
  <tbody>
  <?php if( isset($_POST["submit"])) : ?>
    <?php
    $_tgl = $_POST["tgl"];
    $_nama = $_POST["nama"];
    $_kode = $_POST["kode"];
    $_gender = $_POST["gender"];
    $_bb = $_POST["bb"];
    $_tb = $_POST["tb"];
    ?>
  <?php endif; ?>
  <?php
    

    class Pasien{
      public $id;
      public $kode;
      public $nama;
      public $tmp_lahir;
      public $tgl_lahir;
      public $email;
      public $gender;

      public function __construct($kode, $nama, $gender){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
      }

      public function getNama(){
        return $this->nama;
      }

      public function getKode(){
        return $this->kode;
      }

      public function getGender(){
        return $this->gender;
      }
    }

    //-----------------------


    class BMI extends Pasien{
      public $berat;
      public $tinggi;

      public function __construct($kode, $nama, $gender, $berat, $tinggi){
        parent::__construct($kode, $nama, $gender);
        $this->berat = $berat;
        $this->tinggi = $tinggi;
      }

      public function getBerat(){
        return $this->berat;
      }

      public function getTinggi(){
        return $this->tinggi;
      }

      public function nilaiBMI(){
        if($this->berat != "" && $this->tinggi != ""){
          $nilai = round($this->berat / (($this->tinggi/100)**2),1);
          return $nilai;
        }
        
      }

      public function statusBMI(){
        if($this->nilaiBMI() != "" && $this->nilaiBMI() < 18.5){
          return "Kekurangan Bobot";
        }

        elseif($this->nilaiBMI() != "" && $this->nilaiBMI() <= 23.9){
          return "Sehat";
        }

        elseif($this->nilaiBMI() != "" && $this->nilaiBMI() <= 26.9){
          return "Kelebihan Bobot";
        }
      
        elseif($this->nilaiBMI() != "" && $this->nilaiBMI() >= 29.9){
          return "Obesitas 1";
        }

        elseif($this->nilaiBMI() != "" && $this->nilaiBMI() >= 30.0){
          return "Obesitas 2";
        }

      }

    }

    $number = 1;
    $pasien1 = new BMI("P001", "Ahmad", "L", 69.8, 169);
    $pasien1->tanggal = "2022-01-10";

    $pasien2 = new BMI("P002", "Rina", "P", 55.3, 165);
    $pasien2->tanggal = "2022-01-10";

    $pasien3 = new BMI("P003", "Lutfi", "L", 45.2, 171);
    $pasien3->tanggal = "2022-01-11";

    $pasien4 = new BMI($_kode, $_nama, $_gender, $_bb, $_tb);
    $pasien4->tanggal = $_tgl;

    $array = [$pasien1, $pasien2, $pasien3, $pasien4];

    
    foreach($array as $pasien){
      echo "<tr><td>".$number."</td>";
      echo "<td>".$pasien->tanggal."</td>";
      echo "<td>".$pasien->getKode()."</td>";
      echo "<td>".$pasien->getNama()."</td>";
      echo "<td>".$pasien->getGender()."</td>";
      echo "<td>".$pasien->getBerat()."</td>";
      echo "<td>".$pasien->getTinggi()."</td>";
      echo "<td>".$pasien->nilaiBMI()."</td>";
      echo "<td>".$pasien->statusBMI()."</td></tr>";
      
      $number ++;
    }



  ?>
  
  
  </tbody>
</table>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
