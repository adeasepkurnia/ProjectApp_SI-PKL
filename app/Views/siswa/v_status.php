<?= $this->extend('templat/template_siswa') ?>
<?= $this->section('content') ?>  
<table class="table">
  <thead>
    <tr>
      <th scope="col">N0</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Kampus Asal</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
      <span class="badge badge-success">DITERIMA</span>
      <p> selamat anda diterima</p>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><span class="badge badge-danger">TIDAK DITERIMA</span>
    <p> mohon maaf pendaftaran anda belum diterima</p>
    </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td><span class="badge badge-warning">SEDANG DIKONFIRMASI</span>
    <p> mohon tunggu..</p></td>
    </tr>
  </tbody>
</table>


<?= $this->endSection() ?>