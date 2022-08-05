<?= $this->extend('templat/template_frontend') ?>
<?= $this->section('content') ?>
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

<!-- carousel Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?= base_url() ?>/Admin_Template/assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>SI-PKL</span></h2>
                <p class="animate__animated animate__fadeInUp">FOKUS : Mendedikasikan diri pada perkembangan ICT yang komprehensif dan transparan.</p>
                <a href="<?= base_url("/Register") ?>" class="btn-get-started scrollto animate__animated animate__fadeInUp">Register</a>
              </div>
            </div>
          </div>

<!-- carousel Slide 2 -->
          <div class="carousel-item" style="background-image: url(<?= base_url() ?>/Admin_Template/assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">INTEGRITAS</h2>
                <p class="animate__animated animate__fadeInUp">Mampu mewujudkan integritas dalam bekerja secara individu ataupun kelompok.</p>
                <a href="<?= base_url("/Register") ?>" class="btn-get-started scrollto animate__animated animate__fadeInUp">Register</a>
              </div>
            </div>
          </div>

<!-- carosel Slide 3 -->
          <div class="carousel-item" style="background-image: url(<?= base_url() ?>/Admin_Template/assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">SINERGI</h2>
                <p class="animate__animated animate__adeInUp">Mengantisipasi lingkungan usaha yang berkembang saat ini maupun yang akan datang untuk dapat tumbuh dan berkembang dalam lingkungan usaha yang sehat.</p>
                <a href="<?= base_url("/Register") ?>" class="btn-get-started scrollto animate__animated animate__fadeInUp">Register</a>
              </div>
            </div>
          </div>
<!-- carosel slide 4 -->
          <div class="carousel-item" style="background-image: url(<?= base_url() ?>/Admin_Template/assets/img/slide/slide-4.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">EXCELLENCE</h2>
                <p class="animate__animated animate__fadeInUp">Berorientasi pada kepuasan dan keinginan pelanggan dengan mengedepankan ketepatan kualitas dan hasil yang memuaskan dengan konsep duduk bersama dalam memecahkan persoalan.</p>
                <a href="<?= base_url("/Register") ?>" class="btn-get-started scrollto animate__animated animate__fadeInUp">Register</a>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
<!-- About -->
    <section id="about" class="about">
      <div class="container">
        <div class="row content">
          <div class="col-sm-6">
            <h2>Gambaran Umum Perusahaan</h2>
          </div>
            <p>
              Darma Digital Solution adalah perusahaan dengan izin operasional sebagai Perseroan Swasta Nasional (PT/Perseroan Terbatas) yang mengkhususkan diri untuk bergerak dibidang Teknologi Informasi dan Komputer. 
              Didirikan pada tanggal 10 September 2020 berdasarkan Akta Notaris Muhammad Novandi, SH., M.Kn. Nomor 01 Tahun 2020 yang disahkan dengan Surat keputusan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia 
              Nomor AHU-0151913.AH.01.11 TAHUN 2020 TANGGAL 11 September 2020. PT Darma Digital Solution atau disingkat DDS berkantor di gedung dan lahan milik sendiri yang berlokasi 
              di Jl. Zaenal Abidin Pagar Alam No. 61, LK.6, Kel. Segala Mider, Kec. Tanjung Karang Barat, Kotamadya Bandar Lampung, Provinsi Lampung.</p>

             <p>Pendirian PT Darma Digital Solution memiliki dasar pemikiran yang sangat sederhana, yaitu membentuk organisasi dan perusahaan resmi yang khusus bergerak di bidang teknologi informasi dan komputer, 
              bekerja secara profesional, akuntabel dan terpercaya di Provinsi Lampung. PT Darma Digital Solution 
              di dukung oleh tenaga-tenaga ahli berpengalaman dan profesional yang dapat dikelompokkan dalam bidang ilmu komputer, teknologi informasi dan informatika.</p>

             <p>Kegiatan usaha dan Layanan yang dijalankan oleh perusahaan untuk saat ini dibagi menjadi dua (2), yaitu 1) Penyediaan Jasa (Bussiness Application Development, Web Development, Mobile Development, 
               Coorporate Branding, Networking dan Konsultan IT). dan 2) Pengembangan produk (Sistem Manajemen Aset, Sistem Informasi Akademik, dll).</p> 
          </div>
      </div>
    </section>
    <section id="Visi" class="services section-bg">
        <div class="container">
        <div class="row content">
          <div class="col-lg-6">
          <h2><b>Visi</b></h2>
      </div>
      <ul>
        <h4>Menjadi sebuah perusahaan teknologi informasi dan komunikasi kelas dunia yang inovatif dan terpercaya.</h4>
      </ul>
      </div>
    </div>
    </section>
<!-- About List Visi dan Misi -->
    <section id="misi" class="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6">
            <h2>Misi</h2>
          </div>
          <ul>
          <li><i class="ri-check-line"></i><h4>Mengedepankan inovasi, profesionalisme, kemampuan individu, dan tim dalam memberikan layanan dan menghasilkan produk-produk unggulan.</h4> </li>
          <li><i class="ri-check-line"></i><h4> Memberikan solusi yang optimal kepada mitra kerja dalam mengatasi berbagai permasalahan di dunia teknologi informasi.</h4></li>
            </ul>
          </div>
      </div>
    </section>
    <section id="Visi" class="services section-bg">
        <div class="container">
        <div class="row content">
          <div class="col-lg-6">
          <h2><b>Tata Nilai</b></h2>
      </div>
      <ul>
      <h4><i class="ri-search-line"> FOKUS. Mendedikasikan diri pada perkembangan ICT yang komprehensif dan transparan.</i></h4>
      <h4><i class="ri-check-line"> INTEGRITAS. Mampu mewujudkan integritas dalam bekerja secara individu ataupun kelompok.</i></h4>
      <h4><i class="ri-home-line"> SINERGI. Mengantisipasi lingkungan usaha yang berkembang saat ini maupun yang akan datang untuk dapat tumbuh dan berkembang dalam lingkungan usaha yang sehat.</i></h4>
      <h4><i class="ri-user-line"> EXCELLENCE. Berorientasi pada kepuasan dan keinginan pelanggan dengan mengedepankan ketepatan kualitas dan hasil yang memuaskan dengan konsep duduk bersama dalam memecahkan persoalan.</i></h4>
      </ul>
      </div>
    </div>
    </section>
<!-- Services Job-tersedia -->
    <section id="job-tersedia" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Job-profile</h2>
          <p>Berikut Beberapa Lowongan yang Tersedia</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
            <p><img class="img-fluid pad" src="<?= base_url('foto/frontend.png') ?>" width="165px"></p>
              <h4><a>front-end developer</a></h4>
              <p>Front-end developer menggunakan HTML, CSS, dan JavaScript untuk coding website. Menciptakan design website dan kemudian membuat website tersebut dapat berfungsi.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
            <p><img class="img-fluid pad" src="<?= base_url('foto/backend.png') ?>" width="250px"></p>
              <h4><a>back-end developer</a></h4>
              <p>Back-end adalah bagian belakang layar dari sebuah website. Bahasa pemograman untuk back-end development diantaranya adalah PHP, Ruby, Python, dan banyak lainnya.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
            <p><img class="img-fluid pad" src="<?= base_url('foto/uiux.png') ?>" width="175px"></p>
              <h4><a>UI/UX</a></h4>
              <p>UI adalah User Interface, sedangkan UX adalah User Experience. Keduanya berhubungan dengan tampilan pada sebuah website atau tampilan dari sebuah aplikasi.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
            <p><img class="img-fluid pad" src="<?= base_url('foto/desain.png') ?>" width="170px"></p>
              <h4><a>Desain Grafis</a></h4>
              <p>Desain grafis adalah sebuah bentuk seni dengan tujuan untuk memecahkan masalah komunikasi melalui kombinasi elemen grafis seperti bentuk, garis, warna, dan sebagainya.</p>
            </div>
          </div>
        </div>

      </div>
    </section>

<!-- Contact -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
          <p>PT DARMA DIGITAL SOLUTION</p>
        </div>
      </div>
      <div class="map">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3180.924270271418!2d105.24196051407166!3d-5.374794155261088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dac9cb2b371d%3A0x5168a99f1b364cce!2sDarmapala!5e1!3m2!1sid!2sid!4v1631614534370!5m2!1sid!2sid"  frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container">
        <div class="info-wrap mt-5">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="ri-map-pin-line"></i>
              <h4>Location:</h4>
              <p>Jl. ZA. Pagar Alam No.61, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35147</p>
            </div>
            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="ri-mail-line"></i>
              <h4>Email:</h4>
              <p>office@ddsolution.co.id<br>office@ddsolution.co.id</p>
            </div>
            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="ri-phone-line"></i>
              <h4>Call:</h4>
              <p> (0721) 77013<br> (0721) 77013 </p>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Contact Section -->
  </main>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<?= $this->endSection() ?>