<?= $this->extend('template/template-backend') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $subtitle ?></h3>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped projects">
                    <thead>
                        <tr class="bg-primary">
                            <th width="1%">No</th>
                            <th>Foto</th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th width="50px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($daftar as $key => $value) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><img src="<?= base_url('foto/' . $value['foto']) ?>" alt="avatar" class="img-circle" width="100px"> </td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['nama_lengkap'] ?></td>
                                <td>
                                    <a href="<?= base_url('daftar/detailData/' . $value['id_calkar']) ?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> View</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

</div>
<?= $this->endSection() ?>