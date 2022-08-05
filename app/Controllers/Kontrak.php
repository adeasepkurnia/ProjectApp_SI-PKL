<?= $this->extend('template/template-backend') ?>

<?= $this->section('content') ?>


<?php
// Create database connection using config file
include("connection/DB.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_kontrak where DATE_SUB(tgl_berakhir,INTERVAL 15 DAY) = CURDATE()");
?>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr class="bg-primary">
            <th>No</th>
            <th>Name</th>
            <th>status</th>
            <th>tanggal mulai</th>
            <th>tanggal berakhir</th>
        </tr>
    </thead>
    <?php $no = 1;
    while ($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $user_data['nama_karyawan'] . "</td>";
        echo "<td>" . $user_data['status'] . "</td>";
        echo "<td>" . $user_data['tgl_mulai'] . "</td>";
        echo "<td>" . $user_data['tgl_berakhir'] . "</td>";
    }
    ?>
</table>

<?= $this->endSection() ?>