<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>form | Register</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!--logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="<?= base_url() ?>" class="h1"><b>Register</b></a>
    <p><img class="img-fluid pad" src="<?= base_url('foto/logo.png') ?>" width="200px"></p>
        </div>
        <div class="card-body">
          <?php 
          $errors = session()->getFlashdata('errors');
          if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
          <ul>
              <?php foreach ($errors as $error) : ?>
              <li><?= esc($error) ?></li>
              <?php endforeach ?>
           </ul>
        </div>
        <?php } ?>

        <?php
      if (session()->getFlashdata('pesan')) {
       echo '<div class="alert alert-success" role="alert">';
       echo session()->getFlashdata('pesan');
       echo '</div>';
      }?>
  
        <?php echo form_open('register/simpanRegister') ?>
        <div class="input-group mb-3">
          <input type="npm" name="npm" value="<?= old('npm') ?>" class="form-control" placeholder="Npm" maxlength="8" onkeypress="return hanyaAngka(event)" autocomplate="off">
          <p class="text-danger"><?= $validation->hasError('npm') ? $validation->getError('npm') : '' ?></p>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-graduate"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap') ?>" class="form-control" placeholder="Nama Lengkap">
          <p class="text-danger"><?= $validation->hasError('nama_lengkap') ? $validation->getError('nama_lengkap') : '' ?></p>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="Password" name="password" value="<?= old('password') ?>" class="form-control" placeholder="Password">
          <p class="text-danger"><?= $validation->hasError('password') ? $validation->getError('password') : '' ?></p>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <i class="fa fa-globe"></i>
              <a href="<?= base_url() ?>">Website </a>
              <p><span>Sudah Punya Akun?</span><a href="<?= base_url('Auth/loginSiswa') ?>"> login</a></p>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
        <?php echo form_close() ?>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>/Admin_Template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/Admin_Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/Admin_Template/dist/js/adminlte.min.js"></script>

<script>
  function hanyaAngka(event) {
    var angka = (event.which) ? event.which : event.keyCode
    if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
     return false;
     return true;
  }
</script>

<script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500,function(){
          $(this).remove();
      }); 
    }, 3000);
</script>
 
</body>
</html>
