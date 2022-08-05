<?= $this->extend('templat/template_frontend') ?>
<?= $this->section('content') ?>
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?= base_url() ?>/Admin_Template/assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2> CONTACT <span></span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- ======= Contact Section ======= -->
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
    </section><!-- End Contact Section -->
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