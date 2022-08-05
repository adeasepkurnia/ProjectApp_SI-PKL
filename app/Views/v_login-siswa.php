
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Siswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/Admin_Template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">

    <p><img class="img-fluid pad" src="<?= base_url('foto/logo.png') ?>" width="300px"></p>
        </div>
        <div class="card-body">
          
        <?php
    $errors = session()->getFlashdata('errors');
    if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php foreach ($errors as $key => $value) { ?>
                <li><?= esc($value) ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>

      <?php
      if (session()->getFlashdata('pesan')) {
       echo '<div class="alert alert-warning" role="alert">';
       echo session()->getFlashdata('pesan');
       echo '</div>';
      }?>
        <?php echo form_open('Auth/cek_login_siswa') ?>
        <div class="input-group mb-3">
          <input type="npm" name="npm" class="form-control" placeholder="Npm">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-graduate"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
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
              <p><span>Belum Punya Akun?</span><a href="<?= base_url('/Register') ?>"> Register</a></p>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
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
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500,function(){
          $(this).remove();
      }); 
    }, 3000);
</script>
</body>
</html>
