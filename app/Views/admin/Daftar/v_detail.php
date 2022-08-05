<?= $this->extend('templat/template_backend') ?>

<?= $this->section('content') ?>

        <?php 
        session()->getFlashdata('errors');
        if (session()->get('pesan')) {
        echo '<div class="alert alert-success">';
        echo session()->get('pesan');
        echo '</div>';
        } ?>

     <div class="row">
       <div class="col-sm-12">
         <div class="card card-outline card-primary">
           <div class="card-header">
             <h3 class="card-title"><i class="fas fa-file"></i> <b>Pendaftaran</b></h3>
             <div class="card-tools">
                  <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#editpendaftaran"><i class="fas fa-pencil-alt text-primary"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->

           <div class="card-body">
             <div class="row"> 
               <div class="col-sm-3">
                 <strong><i class="fas fa-book mr-1"></i> Npm</strong>
                <?= ($siswa['npm'] == null) ? '<p class="text=danger">Wajib Diisi !!!></p>' : '<p>' . $siswa['npm'] . '</p>' ?>
               </div>

               <div class="col-sm-3">
                 <strong><i class="fas fa-book mr-1"></i> Job Profile</strong>
                <?= ($siswa['job_profile'] == null) ? '<p class="text-danger">Wajib diisi</p>' : '<p>' .$siswa['job_profile']. '</p>'?>
               </div>

               <div class="col-sm-3">
                 <strong><i class="fas fa-book mr-1"></i> Tanggal Mulai</strong>
                 <?= ($siswa['tgl_mulai'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['tgl_mulai'] . '</p>' ?>
               </div>

               <div class="col-sm-3">
                 <strong><i class="fas fa-book mr-1"></i> Tanggal Selesai</strong>
                 <?= ($siswa['tgl_selesai'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['tgl_selesai'] . '</p>' ?>
               </div>
             </div>
           </div>
         </div>
       </div>
      <div class="col-sm-3">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-image"></i> <b>FOTO</b></h3>
            <div class="card-tools">
          <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#foto"><i class="fas fa-pencil-alt text-primary"></i></button>
      </div>
        </div>
        <div class="box-body">
      <div class="text-center">
    <?php if ($siswa['foto'] == null) { ?>
      <img src="<?= base_url('foto/blank.jpg') ?>" width="100%" height="100px" class="img-fluid pad">
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
         <div class="card card-outline card-primary">
           <div class="card-header">
             <h3 class="card-title"><i class="fas fa-file"></i> <b>Identitas Peserta PKL</b></h3>
             <div class="card-tools">
          <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#identitas"><i class="fas fa-pencil-alt text-primary"></i></button>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
        <strong><i class="fas fa-book mr-1"></i> Nama Lengkap</strong>
          <?= ($siswa['nama_lengkap'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['nama_lengkap'] . '</p>' ?>
          <strong><i class="fas fa-map-marker-alt mr-1"></i> Tempat Lahir</strong>
          <?= ($siswa['tempat_lahir'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['tempat_lahir'] . '</p>' ?>
          <strong><i class="fas fa-pencil-alt mr-1"></i> Tanggal Lahir</strong>
          <?= ($siswa['tgl_lahir'] == null) ? '<p class="text-danger">Wajib Diisi !!!></p>' : '<p>' . $siswa['tgl_lahir'] . '</p>' ?>
          <strong><i class="far fa-file-alt mr-1"></i> Jenis Kelamin</strong>
          <?php if ($siswa['jk'] == 'p') {
            $jk = 'Perempuan';
          } elseif ($siswa['jk'] == 'L') {
            $jk = 'Laki-laki';
          } ?>
          <?= ($siswa['jk'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $jk . '</p>' ?>
        </div>

    <div class="col-sm-6">
        <strong><i class="fas fa-book mr-1"> No.Telpon </i> </strong>
        <?= ($siswa['no_telpon'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['no_telpon'] . '</p>' ?>
          <strong><i class="fas fa-map-marker-alt mr-1"></i> Email</strong>
          <?= ($siswa['email'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['email'] . '</p>' ?>
          <strong><i class="fas fa-pencil-alt mr-1"></i> Agama</strong>
          <?= ($siswa['agama'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['agama'] . '</p>' ?>
          <strong><i class="far fa-file-alt mr-1"></i> Alamat Rumah</strong>
          <?= ($siswa['alamat_rumah'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['alamat_rumah'] . '</p>' ?>
        </div>
    </div>

    </div>
  </div>
 </div>
</div> 

<div class="col-sm-12">
         <div class="card card-outline card-primary">
           <div class="card-header">
             <h3 class="card-title"><i class="fas fa-file"></i> <b>Asal Kampus</b></h3>
             <div class="card-tools">
             <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#asalkampus"><i class="fas fa-pencil-alt text-primary"></i></button>
                </div>
              </div>
           <div class="card-body">
             <div class="row">
               <div class="col-sm-4">
                 <strong><i class="fas fa-book mr-1"></i>Nama Kampus</strong>
                 <?= ($siswa['nama_kampus'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['nama_kampus'] . '</p>' ?>
               </div>
               <div class="col-sm-4">
                 <strong><i class="fas fa-book mr-1"></i>Alamat Kampus</strong>
                 <?= ($siswa['alamat_kampus'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['alamat_kampus'] . '</p>' ?>
               </div>

               <div class="col-sm-4">
                 <strong><i class="fas fa-book mr-1"></i>Program Study</strong>
                 <?= ($siswa['prodi'] == null) ? '<p class="text-danger">Wajib Diisi !!</p>' : '<p>' . $siswa['prodi'] . '</p>' ?>
               </div>
             </div>
           </div>
         </div>
       </div>

       <div class="col-sm-12">
                    <div class="box box-outline box-primary">
                        <div class="box-header with-border">
                            <p> <i class="fa fa-file"></i> <b>Upload Berkas</b></p>
                            <div class="box-tools">
                                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#berkas"> <i class="fa fa-plus text-primary"></i> Add File</button>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>#</th>
                                    <th>Jenis Berkas</th>
                                    <th>Keterangan</th>
                                    <th>File</th>
                                    <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                        <th width="50px">Action</th>
                                    <?php } ?>
                                </tr>
                                <?php $no = 1;
                                foreach ($berkas as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['lampiran'] ?></td>
                                        <td><?= $value['ket'] ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('berkas/' . $value['berkas']) ?>"><i class="far fa-file-pdf fa-2x text-danger"></i></a>
                                        </td>
                                        <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                            <td class="text-center">
                                                <a href="<?= base_url('pengajuanpkl/deleteBerkas/' . $value['id_berkas']) ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> </a>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                    <div class="text-center">
                        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#upload"><i class="fa fa-check"></i> Upload Form</button>
                    </div>
                <?php } ?>
                </div>
        </div>
    </div>

<!-- /.modal add -->
<?= $this->endSection() ?>