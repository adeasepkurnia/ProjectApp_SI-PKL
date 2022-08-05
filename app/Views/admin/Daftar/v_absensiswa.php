<?= $this->extend('templat/template_backend') ?>
<?= $this->section('content') ?>

          <div class="col-sm-12">
          <?php 
                if (session()->getflashdata('edit')) {
                  echo '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> ';
                  echo session()->getflashdata('edit');
                  echo '</h5></div>';
                }
                if (session()->getflashdata('delete')) {
                  echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> ';
                  echo session()->getflashdata('delete');
                  echo '</h5></div>';
                }

                ?>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Absen Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Npm</th>
                    <th>Tanggal</th>
                    <th>Nama Kegiatan</th>
                    <th>Jam Kehadiran</th>
                    <th>Jam Pulang</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($absen as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['nama_lengkap'] ?></td>
                    <td><?= $value['npm'] ?></td>
                    <td><?= $value['tanggal'] ?></td>
                    <td><?= $value['nama_kegiatan'] ?></td>
                    <td><?= $value['jam_kehadiran'] ?></td>
                    <td><?= $value['jam_pulang'] ?></td>
                    <td>
                    <button class="btn btn-flat btn-warning btn-xs" data-toggle="modal" data-target="#edit<?=$value['id_absen'] ?>"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-flat btn-danger btn-xs" data-toggle="modal" data-target="#delete<?=$value['id_absen'] ?>"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <?php } ?>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

          <!-- modal edit -->
      <?php foreach ($absen as $key => $value) { ?>
      <div class="modal fade" id="edit<?= $value['id_absen'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Absen</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open_multipart('absen/editData/' . $value['id_absen']) ?>
            <div class="modal-body">
              
            <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="nama_lengkap" value="<?= $value['nama_lengkap'] ?>" class="form-control" placeholder="Nama_lengkap" required>
            </div>

            <div class="form-group">
                    <label>Npm</label>
                    <input type="text" name="npm" value="<?= $value['npm'] ?>" class="form-control" placeholder="Npm" required>
            </div>

            <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" value="<?= $value['tanggal'] ?>" class="form-control" placeholder="Tanggal" required>
            </div>

            <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <input name="nama_kegiatan" value="<?= $value['nama_kegiatan'] ?>" class="form-control" placeholder="Nama_Kegiatan" required>
            </div>

            <div class="form-group">
                    <label>Jam Kehadiran</label>
                    <input type="time" name="jam_kehadiran" value="<?= $value['jam_kehadiran'] ?>" class="form-control" placeholder="Jam_kehadiran" required>
            </div>

            <div class="form-group">
                    <label>Jam Pulang</label>
                    <input type="time" name="jam_pulang" value="<?= $value['jam_pulang'] ?>" class="form-control" placeholder="Jampulang" required>
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
        <!-- /.modal-dialog -->
      </div>
      <?php } ?>

      <!-- delete data -->
      <?php foreach ($absen as $key => $value) { ?>
      <div class="modal fade" id="delete<?= $value['id_absen'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              Apakah Anda Ingin Menghapus <b><?= $value['nama_lengkap'] ?></b> ?

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
              <a href="<?= base_url('absen/deleteData/' .$value['id_absen']) ?>" class="btn btn-danger btn-sm">delete</a>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php } ?>


<?= $this->endSection() ?> 