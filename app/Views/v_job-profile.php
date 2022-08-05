<?= $this->extend('templat/template_frontend') ?>
<?= $this->section('content') ?>

<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?= base_url() ?>/Admin_Template/assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>JOB PROFILE <span></span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main id="main">

<section id="job-tersedia" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Job-profile</h2>
          <p>PT. Darma Digital Solution</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
            <p><img class="img-fluid pad" src="<?= base_url('foto/frontend.png') ?>" width="165px"></p>
              <h4><a href="<?= base_url("/Pendaftaran") ?>">front-end developer</a></h4>
              <p>Front-end developer menggunakan HTML, CSS, dan JavaScript untuk coding website. Menciptakan design website dan kemudian membuat website tersebut dapat berfungsi.</p>
              <a href="<?= base_url('Pendaftaran') ?>" class="btn btn-info btn-flat btn-block">Mendaftar</a>
            </div>
          </div>
          <div class="col-md-6 mt-3 mt-md-0">
            <div class="icon-box">
            <p><img class="img-fluid pad" src="<?= base_url('foto/backend.png') ?>" width="250px"></p>
              <h4><a>back-end developer</a></h4>
              <p>Back-end adalah bagian belakang layar dari sebuah website. Bahasa pemograman untuk back-end development diantaranya adalah PHP, Ruby, Python, dan banyak lainnya.</p>
              <a href="<?= base_url('Pendaftaran') ?>" class="btn btn-info btn-flat btn-block">Mendaftar</a>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
            <p><img class="img-fluid pad" src="<?= base_url('foto/uiux.png') ?>" width="200px"></p>
              <h4><a href="<?= base_url("/Pendaftaran") ?>">UI/UX</a></h4>
              <p>UI adalah User Interface, sedangkan UX adalah User Experience. Keduanya berhubungan dengan tampilan pada sebuah website atau tampilan dari sebuah aplikasi.</p>
              <a href="<?= base_url('Pendaftaran') ?>" class="btn btn-info btn-flat btn-block">Mendaftar</a>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
            <p><img class="img-fluid pad" src="<?= base_url('foto/desain.png') ?>" width="195px"></p>
              <h4><a href="<?= base_url("/Pendaftaran") ?>">Desain Grafis</a></h4>
              <p>Desain grafis adalah sebuah bentuk seni dengan tujuan untuk memecahkan masalah komunikasi melalui kombinasi elemen grafis seperti bentuk, garis, warna, dan sebagainya.</p>
              <a href="<?= base_url('Pendaftaran') ?>" class="btn btn-info btn-flat btn-block">Mendaftar</a>
            </div>
          </div>
        </div>

      </div>
    </section>

<?= $this->endSection() ?>