<?= $this->extend('templat/template_frontend') ?>
<?= $this->section('content') ?>

<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?= base_url() ?>/Admin_Template/assets/img/slide/manajemen.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><span>MANAJEMEN</span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h3>Komisaris & Direksi</h3>
          <p>Unsur manajemen perusahaan terdiri dari komisaris dan jajaran direksi PT Darma Digital Solution</p>
        </div>

      <section id="Visi" class="services section-bg">
        <div class="container">
        <div class="row content">
      <ul>
        PT DARMA DIGITAL SOLUTION didirikan oleh Bapak Ari Meizary Alfian, SE., M.B.A., 
            bermula dari visi beliau dalam melihat perkembangan Teknologi Informasi dan Komunikasi 
            (TIK) yang sangat masif dan cepat seiring perkembangan jaman. Teknologi informasi dan komunikasi 
            telah menjadi kebutuhan yang sangat penting dan wajib bagi semua sektor atau bidang kehidupan masyakat, 
            karena dengan penerapan dan pemanfaatan teknologi informasi dan komunikasi pada berbagai sektor/bidang 
            apapun namanya, maka kecepatan, akurasi, efisiensi dan kualitas mampu mencapai level tertinggi. 
            Memang telah banyak perusahaan-perusahan serupa yang didirikan untuk bergerak untuk mengambil peran, 
            namun semua itu hanya ada dikota-kota besar saja. Padahal sumber daya manusia yang memiliki kualitas 
            dibidang TIK dari daerah tidak kalah bersaing, bahkan yang saat ini telah bekerja di kota-kota besarpun 
            sebagian besar berasal dari daerah, salah satunya Provinsi Lampung. Atas dasar pemikiran tersebut, 
            didirikanlah perusahaan PT Darma Digital Solution ini sebagai wadah talenta-talenta TIK muda untuk 
            mengembangkan diri dan juga daerahnya.
       </ul>
       </div>
       </div>
    </section>
    <br>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?= base_url() ?>/Admin_Template/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rindu Amelia L., S.E., M.M</h4>
                <span><b>Komisaris</b></span>
                <p>Teknologi informasi dan komunikasi di pastikan akan mengubah pola dan gaya perusahaan untuk mencapai tujuan</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?= base_url() ?>/Admin_Template/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ari Meizary A., S.E., M.B.A.</h4>
                <span><b>Direktur Utama</b></span>
                <p>Provinsi Lampung merupakan salah satu penyumbang SDM unggul di bidang TIK untuk kota besar. 
                Kini saatnya paradigma itu diubah.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?= base_url() ?>/Admin_Template/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Adam Kalamando</h4>
                <span><b>Direktur</b></span>
                <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae. In his nemore temporibus.
                at mei dolore tritani repudiandae. In his nemore temporibus.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?= base_url() ?>/Admin_Template/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Sutedi, S.Kom., M.T.I.</h4>
                <span><b>Direktur</b></span>
                <p>Lorem ipsum dolor sit amet, at mei dolore tritani repudiandae. In his nemore temporibus.
                at mei dolore tritani repudiandae. In his nemore temporibus.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
    

<?= $this->endSection() ?>