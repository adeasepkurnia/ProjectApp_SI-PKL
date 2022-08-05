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
                            <img src="<?= base_url() ?>/Admin_Template/assets/img/logo.png" width="150px" height="50px">
                            </div>
                            <h5 class="content-group-lg">Form Pengajuan PKL</h5>
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
  
              <?php echo form_open('pengajuanpkl/simpanPengajuanpkl') ?>
                        <form>
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
                                <label class="col-md-2 col-md-offset-1">Tempat Kelahiran</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control"
                                            name="tempat_lahir"
                                            placeholder="Tempat Kelahiran">
                                            <p class="text-danger"><?= $validation->hasError('tempat_lahir') ? $validation->getError('tempat_lahir') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Tanggal Lahir</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input class="form-control" type="date" date-mask
                                        placeholder="dd/mm/yyyy" name="tgl_lahir">
                                        <p class="text-danger"><?= $validation->hasError('tgl_lahir') ? $validation->getError('tgl_lahir') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Jenis Kelamin</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control"
                                         name="jk" placeholder="Jenis Kelamin">
                                        <p class="text-danger"><?= $validation->hasError('jk') ? $validation->getError('jk') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Alamat Rumah</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control"
                                        name="alamat_rumah" placeholder="Alamat Rumah">
                                        <p class="text-danger"><?= $validation->hasError('alamat_rumah') ? $validation->getError('alamat_rumah') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Telepon</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control" placeholder="Nomor Telpon"
                                        name="no_telpon">
                                        <p class="text-danger"><?= $validation->hasError('no_telpon') ? $validation->getError('no_telpon') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1"> Nama Kampus</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="nama_kampus" class="form-control"
                                        name="nama_kampus" placeholder="Nama Kampus">
                                        <p class="text-danger"><?= $validation->hasError('nama_kampus') ? $validation->getError('nama_kampus') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Alamat Kampus</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control"
                                       name="alamat_kampus" placeholder="Alamat Kampus">
                                        <p class="text-danger"><?= $validation->hasError('alamat_kampus') ? $validation->getError('alamat_kampus') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Prodi</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control"
                                        name="prodi" placeholder="Prodi">
                                        <p class="text-danger"><?= $validation->hasError('prodi') ? $validation->getError('prodi') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Tanggal Mulai</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="date" class="form-control"
                                        placeholder="dd/mm/yyyy" name="tgl_mulai">
                                        <p class="text-danger"><?= $validation->hasError('tgl_mulai') ? $validation->getError('tgl_mulai') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Tanggal Selesai</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                        <input type="date" class="form-control"
                                        placeholder="dd/mm/yyyy" name="tgl_selesai">
                                        <p class="text-danger"><?= $validation->hasError('tgl_selesai') ? $validation->getError('tgl_selesai') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">Job Profile</label>
                                <div class="col-md-8">
                                    <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Job Profile"
                                        name="job_profile" autocomplete="off">
                                        <p class="text-danger"><?= $validation->hasError('job_profile') ? $validation->getError('job_profile') : '' ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-2 col-md-offset-1">
                                </label>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-success"><b>KIRIM</b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
        </div>
        </div>
        </div>
        
   
<?= $this->endSection() ?> 