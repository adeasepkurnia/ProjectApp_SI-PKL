<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?> | <?= $subtitle ?> </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     <h3> Halaman Admin</h3>
    </ul>
  </nav>
  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
    <div class="row">
      <img src="<?= base_url() ?>/Admin_Template/assets/img/logo.png" width="150px" height="50px">  <span class="brand-text font-weight-light text-white"><h3><b>SI-PKL</b></h3></span>
      </div> 
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/foto/<?= session()->get('foto') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= session()->get('nama_user') ?> /<?php if (session()->get('level')==1) {
            echo 'Admin';
          }else {
            echo 'admin';
          }?></a>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
          
      </div>
      <!-- SidebarSearch Form -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-home text-white"></i>
              <p>Dashboard</p>
            </a>    
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table text-white"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="<?= base_url('ta') ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Tahun Ajaran</p>
            </a>    
          </li>

          <li class="nav-item">
            <a href="<?= base_url('Kampusasal') ?>" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>Kampus Asal</p>
            </a>    
          </li>

          <li class="nav-item">
            <a href="<?= base_url('user') ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>User</p>
            </a>    
          </li>

          <li class="nav-item">
            <a href="<?= base_url('absen') ?>" class="nav-link">
            <i class="nav-icon fas fa-list-ul"></i>
              <p>Absen Siswa</p>
            </a>    
          </li>
          <li class="nav-item">
            <a href="<?= base_url('lampiran') ?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Lampiran</p>
            </a>    
          </li>

          <li class="nav-item">
            <a href="<?= base_url('kontrak') ?>" class="nav-link">
              <i class="nav-icon fas fa-user-times text-warning"></i>
              <p>Kontrak</p>
            </a>    
          </li>

          </ul>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-card text-white"></i>
              <p>
                Pendaftaran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="<?= base_url('daftarmasuk') ?>" class="nav-link">
                  <i class="nav-icon fas fa-download text-primary"></i>
                  <p>Masuk</p>
                </a>    
              </li>

              <li class="nav-item">
                <a href="<?= base_url('konfirmasi') ?>" class="nav-link">
                <i class="nav-icon far fa-calendar-check text-warning"></i>
                  <p>Dikonfirmasi</p>
                </a>    
              </li>
              
              <li class="nav-item">
                <a href="<?= base_url('terima') ?>" class="nav-link">
                  <i class="nav-icon fas fa-check text-success"></i>
                  <p>Diterima</p>
                </a>    
          </li>

          <li class="nav-item">
            <a href="<?= base_url('tolak') ?>" class="nav-link">
              <i class="nav-icon fas fa-user-times text-danger"></i>
              <p>Tidak Diterima</p>
            </a>    
          </li>

          </ul>

          <li class="nav-item">
            <a href="<?= base_url('auth/logout') ?>" class="nav-link" role="button">
              <i class="nav-icon fas fa-sign-out-alt text-white"></i>
              <p>Logout</p>
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
            <h1 class="m-0"><?= $subtitle ?></h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <?= $this->renderSection('content') ?>
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- Main Footer -->
  <footer class="main-footer text-center">
    <!-- To the right -->
    <!-- Default to the left -->
    <strong>Copyright &copy; <a>Ade Asep Kurnia</a>.2021-2022 </strong>
  </footer>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>/Admin_Template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/Admin_Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/Admin_Template/dist/js/adminlte.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>/Admin_Template/plugins/pdfmake/vfs_fonts.js"></script>

<script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500,function(){
          $(this).remove();
      }); 
    }, 3000);
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print",]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
