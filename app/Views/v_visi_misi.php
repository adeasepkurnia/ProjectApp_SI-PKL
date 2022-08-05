<?= $this->extend('templat/template_frontend') ?>
<?= $this->section('content') ?>

<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?= base_url() ?>/Admin_Template/assets/img/slide/visi&misi.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2> VISI & MISI PERUSAHAAN <span></span></h2>
              </div>
            </div>
          </div>
        </div>
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
    <!-- ======= About List Section ======= -->
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
    

<?= $this->endSection() ?>