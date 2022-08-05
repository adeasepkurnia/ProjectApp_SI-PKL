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
              
                <table class="table table-sm"> 
                    <thead> 
                        <tr> 
                  <th width="50px">No</th>
                    <th>Nama Lengkap</th>
                    <th>Npm</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telpon</th>
                    <th>Agama</th>
                    <th>Nama Kampus</th>
                    <th>Prodi</th>
                    <th width="120px">Action</th>
                        </tr>
                    </thead> 
                    <tbody>
                <?php $no=1; foreach ($daftarmasuk as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['nama_lengkap'] ?></td>
                    <td><?= $value['npm'] ?></td>
                    <td><?= $value['jk'] ?></td>
                    <td><?= $value['no_telpon'] ?></td>
                    <td><?= $value['agama'] ?></td>
                    <td><?= $value['nama_kampus'] ?></td>
                    <td><?= $value['prodi'] ?></td>
                    <td>
                   <p> <a href="<?= base_url('daftarmasuk/detailData/' .$value['id_siswa']) ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> View</a></p>
                   <p> <a href="<?= base_url('daftarmasuk/detailData/' . $value['id_siswa']) ?>" class="btn btn-sm btn-warning"><i class="fas fa-spinner"></i> Proses</a></p>
                   <p> <a href="<?= base_url('daftarmasuk/detailData/' . $value['id_siswa']) ?>" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Terima</a></p>
                   <p> <a href="<?= base_url('daftarmasuk/ditolak/' . $value['id_siswa']) ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Tolak</a></p>
              </td>
                </tr>
                <?php } ?>
                </tbody>
                </table>          
            </div>
        </div>
    </div>

<?= $this->endSection() ?> 