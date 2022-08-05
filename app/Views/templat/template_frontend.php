<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sistem Informasi Penerimaan Peserta PKL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/Admin_Template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Admin_Template/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Admin_Template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Admin_Template/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Admin_Template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Admin_Template/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>/Admin_Template/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/Admin_Template/assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
    <img src="<?= base_url() ?>/Admin_Template/assets/img/logo.png" height="60" width="200">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?= base_url("/home") ?>">SI-<span>PKL</span></a></h1>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?= base_url("/home") ?>">Home</a></li>
          <li class="drop-down"><a href="">Profile</a>
            <ul>
              <li><a href="<?= base_url("/Tentang_Perusahaan") ?>">Tentang Perusahaan</a></li>
              <hr>
              <li><a href="<?= base_url("/Visi_Misi") ?>">Visi & Misi</a></li>
              <hr>
              <li><a href="<?= base_url("/Manajemen") ?>">Manajemen</a></li>
            </ul>
          <li><a href="<?= base_url("/JobProfile") ?>">Job-Profile</a></li>
          <li><a href="<?= base_url("/Contact") ?>">Contact</a></li>
          <li><a href="<?= base_url("Auth/loginSiswa") ?>">Login</a></li>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- Content -->
  <?= $this->renderSection('content') ?>

 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-8">
            <div class="footer-info">
              <h3>SI-PKL</h3>
              <p>
              PT Darma Digital Solution<br>
              <br>
                <strong>Phone :</strong> 0721 77013<br>
                <strong>Email  :</strong> office@ddsolution.co.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-8 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/home") ?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/Tentang_Perusahaan") ?>">Tentang Perusahaan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/Visi_Misi") ?>">Visi & Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/Manajemen") ?>">Manajemen</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/Contact") ?>">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-8 footer-links">
            <h4>Job references</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/register") ?>">Front-end Developer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/register") ?>">Back-end Developer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/register") ?>">UI/UX</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/register") ?>">Graphic Design</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-8 footer-links">
            <h4>Want to know more?</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("/register") ?>">Registrasi Akun</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url("Auth/loginSiswa") ?>">Login Siswa</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ade Asep Kurnia | Politeknik Negeri Lampung </span></strong>. 2021-2022
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url() ?>/Admin_Template/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/Admin_Template/assets/js/main.js"></script>
</body>
</html