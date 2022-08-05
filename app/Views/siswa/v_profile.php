<?= $this->extend('templat/template_siswa') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
<div class="col-sm-12">

<?php 
        session()->getFlashdata('errors');
        if (session()->get('pesan')) {
        echo '<div class="alert alert-success">';
        echo session()->get('pesan');
        echo '</div>';
        } ?>

<div class="row">
<div class="col-sm-3">
        <div class="card card-outline card-danger">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-images"></i> <b>Edit Foto Profile</b></h3>
            <div class="card-tools">
          <button type="button" class="btn btn-sm btn btn-outline-danger" data-toggle="modal" data-target="#foto"><i class="fas fa-pencil-alt text-primary"></i></button>
      </div>
        </div>
        <div class="box-body">
      <div class="text-center">
    <?php if ($siswa['foto'] == null) { ?>
      <img src="<?= base_url('foto/blank.jpg') ?>" width="100%" height="100%" class="img-fluid pad">
    <?php } else { ?> 
      <img src="<?= base_url('foto/' . $siswa['foto']) ?>" width="100%" class="img-fluid pad">
    <?php } ?>
    <br>
    <p class="text-danger"><?= $validation->hasError('foto') ? $validation->getError('foto') : '' ?></p>
      </div>
      </div>
      </div>
    </div>

    <div class="col-sm-9">
         <div class="card card-outline card-danger">
           <div class="card-header">
             <h3 class="card-title"><i class="far fa-edit"></i> <b>Edit Data Profile</b></h3>
             <div class="card-tools">
          <button type="button" class="btn btn-sm btn btn-outline-danger" data-toggle="modal" data-target="#identitas"><i class="fas fa-pencil-alt text-primary"></i></button>
      </div>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-sm-5">
        <strong><i class="fas fa-user-edit"></i> Nama Lengkap</strong>
          <?= ($siswa['nama_lengkap'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['nama_lengkap'] . '</p>' ?>
          <strong><i class="fas fa-map-marker-alt mr-1"></i> Tempat Lahir</strong>
          <?= ($siswa['tempat_lahir'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['tempat_lahir'] . '</p>' ?>
          <strong><i class="fas fa-calendar-alt"></i> Tanggal Lahir</strong>
          <?= ($siswa['tgl_lahir'] == null) ? '<p class="text-danger">Wajib Diisi !!!></p>' : '<p>' . $siswa['tgl_lahir'] . '</p>' ?>
          <strong><i class="fas fa-male"></i> Jenis Kelamin</strong>
          <?php if ($siswa['jk'] == 'p') {
            $jk = 'Perempuan';
          } elseif ($siswa['jk'] == 'L') {
            $jk = 'Laki-laki';
          } ?>
          <?= ($siswa['jk'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $jk . '</p>' ?>
        </div>

    <div class="col-sm-5">
        <strong><i class="fas fa-phone-square-alt"></i> No.Telpon </i> </strong>
        <?= ($siswa['no_telpon'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['no_telpon'] . '</p>' ?>
          <strong><i class="fas fa-envelope-open-text"></i> Email</strong>
          <?= ($siswa['email'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['email'] . '</p>' ?>
          <strong><i class="fas fa-mosque"></i> Agama</strong>
          <?= ($siswa['agama'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['agama'] . '</p>' ?>
          <strong><i class="fas fa-home"></i> Alamat Rumah</strong>
          <?= ($siswa['alamat_rumah'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['alamat_rumah'] . '</p>' ?>
        </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>
 </div>

 <div class="col-sm-12">
         <div class="card card-outline card-danger">
           <div class="card-header">
             <h3 class="card-title"><i class="fas fa-university"></i> <b>Asal Kampus</b></h3>
             <div class="card-tools">
             <button type="button" class=" btn btn-sm btn btn-outline-danger" data-toggle="modal" data-target="#asalkampus"><i class="fas fa-pencil-alt text-primary"></i></button>
                </div>
              </div>
           <div class="card-body">
             <div class="row">
               <div class="col-sm-4">
                 <strong><i class="fas fa-edit"></i> Nama Kampus</strong>
                 <?= ($siswa['nama_kampus'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['nama_kampus'] . '</p>' ?>
               </div>
               <div class="col-sm-4">
                 <strong><i class="fas fa-map-marked-alt"></i> Alamat Kampus</strong>
                 <?= ($siswa['alamat_kampus'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['alamat_kampus'] . '</p>' ?>
               </div>

               <div class="col-sm-4">
                 <strong><i class="fas fa-user-graduate"></i> Program Study</strong>
                 <?= ($siswa['prodi'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['prodi'] . '</p>' ?>
               </div>
             </div>
           </div>
         </div>
       </div>

 <!-- modal foto -->
<div class="modal fade" id="foto">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Foto Profile</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open_multipart('profile/updateFoto/' . $siswa['id_siswa']) ?>
            <div class="modal-body"> 
              <p class="text-danger">Max Foto 2MB</p>
            <div class="form-group">
              <label>Ganti Foto</label>
              <input type="file" id="preview_gambar" class="form-control" name="foto" accept="image/*">
            </div>
            <div class="form-group">
              <label>Preview Foto</label> <br>
              <?php if ($siswa['foto'] == null) { ?>
                <img src="<?= base_url('foto/blank.jpg') ?>" width="100px" height="150px" id="gambar_load">
             <?php } else { ?>
              <img src="<?=base_url('foto/' . $siswa['foto']) ?>" width="100px" height="150px"  id="gambar_load">
            <?php } ?>
            
          </div>
          </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </div>
            <?php echo form_close() ?>
    </div>
  </div>
  </div>

  <!-- modal add identitas -->
<div class="modal fade" id="identitas">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" >IDENTITAS PESERTA PKL</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                
            </div>
            <?php
            echo form_open('Profile/updateBiodata/' . $siswa['id_siswa'])
            ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input name="nama_lengkap" value="<?= $siswa['nama_lengkap'] ?>" class="form-control" placeholder="Alamat Rumah" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input name="tempat_lahir" value="<?= $siswa['tempat_lahir'] ?>" class="form-control" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <div class="input-group date">
                          
                                <input type="date" name="tgl_lahir" value="<?= $siswa['tgl_lahir'] ?>" class="form-control pull-right" id="datepicker">
                            </div>
                            <!-- /.input group -->
                        </div>
                  <div class="form-group">
                    <label>Alamat Rumah</label><br>
                    <input name="alamat_rumah" value="<?= $siswa['alamat_rumah'] ?>" class="form-control" placeholder="alamat_rumah" required>
                </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="L" <?= $siswa['jk'] == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                                <option value="P" <?= $siswa['jk'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No Telpon</label>
                            <input name="no_telpon" value="<?= $siswa['no_telpon'] ?>" class="form-control" placeholder="Telpon" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" value="<?= $siswa['email'] ?>" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" class="form-control">>
                                <option value="">-- Pilih Agama --</option>
                                <option value="Islam" <?= ($siswa['agama'] == "Islam" ? "selected" : ""); ?>>Islam</option>
                                <option value="Kristen" <?= ($siswa['agama'] == "Kristen" ? "selected" : ""); ?>>Kristen</option>
                                <option value="Buddha" <?= ($siswa['agama'] == "Buddha" ? "selected" : ""); ?>>Buddha</option>
                                <option value="Katholik" <?= ($siswa['agama'] == "Katholik" ? "selected" : ""); ?>>Katholik</option>
                                <option value="Hindu" <?= ($siswa['agama'] == "Hindu" ? "selected" : ""); ?>>Hindu</option>
                            </select>
                            <!-- <input name="tipe_kar" class="form-control" placeholder="Masukkan Tipe" required> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<!-- /.modal add identitas -->

<!-- modal add alamat kampus -->
<div class="modal fade" id="asalkampus">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">ASAL KAMPUS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Profile/updateasalkampus/' .$siswa['id_siswa']) ?>
            <div class="modal-body">
                <div class="form-group">
                  <label>Nama Kampus</label>
                    <input name="nama_kampus" value="<?= $siswa['nama_kampus'] ?>" class="form-control" placeholder="Nama Kampus" required>
                    </div>
                    <div class="form-group">
                    <label>Alamat Kampus</label>
                    <input name="alamat_kampus" value="<?= $siswa['alamat_kampus'] ?>" class="form-control" placeholder="alamat_kampus" required>
                    </div>
                    <div class="form-group">
                  <label>Program Studi</label>
                <input name="prodi" value="<?= $siswa['prodi'] ?>" class="form-control" placeholder="prodi" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
</div>
<!-- /.modal add alamat kampus -->
<?= $this->endSection() ?>