<?= $this->extend('templat/template_siswa') ?>
<?= $this->section('content') ?>

<div class="card-default">
    <div class="container">
        <div class="card-colom">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="icon-object border-success text-success">
                            <img src="<?= base_url() ?>/Admin_Template/assets/img/buku.png" width="70px" height="65px">
                            </div>
                            <h5 class="content-group-lg">Form Absen Siswa</h5>
                            <p>semua kolom wajib diisi</p>
                        </div>
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
  
              <?php echo form_open('absensi/simpanAbsensi') ?>
              <form id="quickForm">
                <div class="card-body">
                <div class="row">
              <label class="col-md-2 col-md-offset-1">Nama Lengkap</label>
                <div class="col-md-8">
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control"
                      name="nama_lengkap" 
                      placeholder="Nam Lengkap">
                        <p class="text-danger"><?= $validation->hasError('nama_lengkap') ? $validation->getError('nama_lengkap') : '' ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                                <label class="col-md-2 col-md-offset-1">Npm</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control"
                                            name="npm"
                                            placeholder="Npm">
                                            <p class="text-danger"><?= $validation->hasError('npm') ? $validation->getError('npm') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Tanggal</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="date" class="form-control"
                                            name="tanggal"
                                            placeholder="tanggal">
                                            <p class="text-danger"><?= $validation->hasError('tanggal') ? $validation->getError('tanggal') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Nama Kegiatan</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control"
                                            name="nama_kegiatan"
                                            placeholder="nama_kegiatan">
                                            <p class="text-danger"><?= $validation->hasError('nama_kegiatan') ? $validation->getError('nama_kegiatan') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Jam Kehadiran</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="time" class="form-control"
                                            name="jam_kehadiran"
                                            placeholder="jam_kehadiran">
                                            <p class="text-danger"><?= $validation->hasError('jam_kehadiran') ? $validation->getError('jam_kehadiran') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Jam Pulang</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="time" class="form-control"
                                            name="jam_pulang"
                                            placeholder="jam_pulang">
                                            <p class="text-danger"><?= $validation->hasError('jam_pulang') ? $validation->getError('jam_pulang') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                      <!-- /.card-body -->
                      <div class="row">
                    <label class="col-md-2 col-md-offset-1">
                    </label>
                      <div class="col-md-8">
                        <button type="submit" class="btn btn-primary"><b>KIRIM</b></button>
                      </div>
                    </div>
              </form>
            </div>
            </div>
            </div>
            </div>
            <?php echo form_close() ?>
            <!-- /.card -->
            </div>
            </div>
            </div>
            </div>
<?= $this->endSection() ?>