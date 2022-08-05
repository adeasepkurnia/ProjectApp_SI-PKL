<?= $this->extend('templat/template_backend') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $totaluser ?> </h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <h3><?= $totalpendaftaranmasuk ?></h3>

                <p> Masuk</p>
              </div>
              <div class="icon">
                <i class="fa fa-download"></i>
              </div>
              <a href="<?= base_url('daftarmasuk') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Pandding</p>
              </div>
              <div class="icon">
              <i class="fas fa-spinner"></i>
              </div>
              <a href="<?= base_url('proccess') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>44</h3>

                <p>Pendaftaran di Terima</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-check"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>44</h3>

                <p>Pendaftaran di Tolak</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-times"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-navy">
              <div class="inner">
              <h3><?= $totalabsensiswa ?></h3>

                <p>Absensiswa</p>
              </div>
              <div class="icon">
              <i class="fas fa-book"></i>
              </div>
              <a href="<?= base_url('absen') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
       </div>
    </div>


<?= $this->endSection() ?>