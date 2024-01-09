<?php
require 'functions.php';
$murid  = query("SELECT * FROM siswa ORDER BY NIS DESC");
//tombol cari
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Siswa Baru</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #0B2Fa6">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="color: white; font-weight: 700">Pendaftaran Siswa Baru</a>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Keterangan -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-start">
        <a href="index.php"><button type="button" class="btn btn-light"><i class="bi bi-back"></i> Kembali</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">Data Siswa Baru</h1>
      </div>
      <div class="d-flex justify-content-center pt-1 pb-3">
        <p class="text-start">Berikut adalah Daftar Siswa Baru yang telah terdaftar di Digital Talent.</p>
      </div>
    <!-- Akhir Keterangan --> 

    <!-- Tabel dan Kontrol -->
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Aksi</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($murid as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["NIS"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["alamat"]?></td>
            <td ><?= $row["jenis"]?></td>
            <td ><?= $row["agama"]?></td>
            <td ><?= $row["sekolahasal"]?></td>
            <td class="text-center">
            <a class="p-1" href="hapus.php?NIS=<?= $row["NIS"];?>" onclick="return confirm('Yakin?');"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-trash"></i></button></a>
            <a class="p-1" href="edit.php?NIS=<?= $row["NIS"];?>"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil"></i></button></a>
            </td>
          </tr>
          <?php $i++ ?>
          <?php endforeach ?>
        </table>
      </div>
    <!-- Akhir Tabel dan Kontrol -->
    </div>
  </body>
</html>