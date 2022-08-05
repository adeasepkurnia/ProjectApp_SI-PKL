<?= $this->extend('templat/template_backend') ?>
<?= $this->section('content') ?>

<div class="col-12"> 
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Daftar <?= $subtitle ?></h3>
                <div class="card-tools">
                  <button class="btn btn-flat btn-primary btn-xs" data-toggle="modal" data-target="#add"><i class="fas fa-plus"></i> Add</button>
                </div>

              </div>
              <div class="card-body p-0">  
              <?php 
                if (session()->getflashdata('tambah')) {
                  echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> ';
                  echo session()->getflashdata('tambah');
                  echo '</h5></div>';
                }
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
                <table class="table table-sm"> 
                    <thead> 
                        <tr> 
                            <th width="70px">No</th>
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Foto</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead> 
                    <tbody>
                <?php $no=1; foreach ($user as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['nama_user'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><img class="img-circle img-fluid" src="<?= base_url('foto/' . $value['foto']) ?>" width="100px"></td>
                    <td>
                    <button class="btn btn-flat btn-warning btn-xs" data-toggle="modal" data-target="#edit<?=$value['id_user'] ?>"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-flat btn-danger btn-xs" data-toggle="modal" data-target="#delete<?=$value['id_user'] ?>"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
                </table>          
            </div>
        </div>
    </div>

    <!-- modal add -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('user/insertData') ?>
            <div class="modal-body">
              
            <div class="form-group">
                    <label>Nama user</label>
                    <input name="nama_user" class="form-control" placeholder="Nama_user" required>
            </div>

            <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="form-group">
                    <label>Password</label>
                    <input name="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto"class="form-control" accept="image/*" required>
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

      <!-- modal edit -->
      <?php foreach ($user as $key => $value) { ?>
      <div class="modal fade" id="edit<?= $value['id_user'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open_multipart('user/editData/' . $value['id_user']) ?>
            <div class="modal-body">
              
            <div class="form-group">
                    <label>Nama User</label>
                    <input name="nama_user" value="<?= $value['nama_user'] ?>" class="form-control" placeholder="Nama_user" required>
            </div>

            <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= $value['email'] ?>" class="form-control" placeholder="Email" required>
            </div>

            <div class="form-group">
                    <label>Password</label>
                    <input name="password" value="<?= $value['password'] ?>" class="form-control" placeholder="Password" required>
            </div>

            <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto"class="form-control" accept="image/*">
                    <img src="<?= base_url('foto/'. $value['foto']) ?>" width="100px" height=100px>
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
      <?php foreach ($user as $key => $value) { ?>
      <div class="modal fade" id="delete<?= $value['id_user'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              Apakah Anda Ingin Menghapus <b><?= $value['nama_user'] ?></b> ?

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
              <a href="<?= base_url('user/deleteData/' .$value['id_user']) ?>" class="btn btn-danger btn-sm">delete</a>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php } ?>

<?= $this->endSection() ?>