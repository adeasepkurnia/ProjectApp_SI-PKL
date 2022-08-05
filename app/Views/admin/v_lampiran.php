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
                            <th>lampiran</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead> 
                    <tbody>
                <?php $no=1; foreach ($lampiran as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['lampiran'] ?></td>
                    <td>
                    <button class="btn btn-flat btn-warning btn-xs" data-toggle="modal" data-target="#edit<?=$value['id_lampiran'] ?>"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-flat btn-danger btn-xs" data-toggle="modal" data-target="#delete<?=$value['id_lampiran'] ?>"><i class="fas fa-trash"></i></button>
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
              <h4 class="modal-title">Add lampiran</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('lampiran/insertData') ?>
            <div class="modal-body">
              
            <div class="form-group">
                    <label>lampiran</label>
                    <input name="lampiran" class="form-control" placeholder="lampiran" required>
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

      <!-- model edit -->
      <?php foreach ($lampiran as $key => $value) { ?>
      <div class="modal fade" id="edit<?= $value['id_lampiran'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">edit lampiran</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('lampiran/editData/' . $value['id_lampiran']) ?>
            <div class="modal-body">
              
            <div class="form-group">
                    <label>lampiran</label>
                    <input name="lampiran" value="<?= $value['lampiran'] ?>"class="form-control" placeholder="lampiran" required>
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
      <?php foreach ($lampiran as $key => $value) { ?>
      <div class="modal fade" id="delete<?= $value['id_lampiran'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus lampiran</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <div class="modal-body">
              Apakah Anda Ingin Menghapus <b><?= $value['lampiran'] ?></b> ?

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
              <a href="<?= base_url('lampiran/deleteData/' .$value['id_lampiran']) ?>" class="btn btn-danger btn-sm">delete</a>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php } ?>

<?= $this->endSection() ?>