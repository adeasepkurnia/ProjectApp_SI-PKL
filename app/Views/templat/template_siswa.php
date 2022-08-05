<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?> | <?= $subtitle ?> </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <h3>Halaman Siswa</h3>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"> 
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?= base_url() ?>/Admin_Template/assets/img/gambar-3.jpg" class="user-image" alt="User Image">
          <span class="d-none d-md-inline"><?= session()->get('nama_lengkap') ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-secondary"> <br>
            <img src="<?= base_url() ?>/Admin_Template/assets/img/gambar-3.jpg" class="user-image " alt="User Image">
          <a href="#" class="d-block"><?= session()->get('nama_lengkap') ?></a>
          </li>
          <li class="user-footer ">
            <a href="profile" class="btn btn-outline-info btn-flat">Profile</a>
            <a href="<?= base_url('auth/logoutsiswa') ?>" class="btn btn-outline-danger btn-flat float-right ">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>/Admin_Template/index3.html" class="brand-link">
    <div class="row">
      <img src="<?= base_url() ?>/Admin_Template/assets/img/logo.png" width="150px" height="50px">  <span class="brand-text font-weight-light text-white"><h3><b>SI-PKL</b></h3></span>
      </div> 
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="<?= base_url('siswa') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('pengajuanpkl') ?>" class="nav-link">
            <i class="nav-icon fas fa-paste"></i>
              <p>Pengajuan PKL</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('status') ?>" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p>Status</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('absensi') ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Absen</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $subtitle ?></h1>
          </div>
        </div>
      </div>
    </section>

  <!-- content -->
  <?= $this->renderSection('content') ?>
  </div>
  <footer class="main-footer text-center">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; 2021-2022 <a href="">Ade Asep Kurnia</a>.</strong> Politeknik Negeri Lampung.
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>/Admin_Template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/Admin_Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/Admin_Template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500,function(){
          $(this).remove();
      }); 
    }, 3000);
</script>
</body>
</html>




