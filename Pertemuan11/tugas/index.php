<?php
require 'functions.php';
$barang  = query("SELECT * FROM barang ORDER BY no DESC");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Barang</title>
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>

  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #0B2Fa6">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php" style="color: white; font-weight: 700">Sistem Input Data</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Akhir NavBar -->

    <!-- Keterangan -->
    <div class="container pt-2 pb-2">
      <div class="d-flex justify-content-center pt-3 pb-1">
        <h1 class="fw-bolder">DATA BARANG</h1>
      </div>
      <div class="d-flex justify-content-center pt-1 pb-3">
        <p class="text-start">Berikut adalah Daftar Barang yang telah dimasukkan pada sistem.</p>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Pencarian -->
      <div class="col-md-auto d-flex justify-content-end pt-2 pb-2">
        <div class="d-flex justify-content-end">
          <a href="tambahBarang.php"><button type="button" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Tambah Barang</button></a>
        </div>
      </div>
    <!-- Akhir Pencarian -->

    <!-- Tabel dan Kontrol -->
      <div class="pt-2 pb-2 table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <tr class="text-center">
            <th>No.</th>
            <th>Nama Merek</th>
            <th>warna</th>
            <th>jumlah</th>
            <th>Aksi</th>
          </tr>
          <?php $i = 1 ?>
          <?php foreach ($barang as $row) : ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row["nama_merek"]?></td>
            <td><?= $row["warna"]?></td>
            <td ><?= $row["jumlah"]?></td>
            <td class="text-center">
            <a class="p-1" href="ubah.php?no=<?= $row["no"];?>"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-pencil"></i></button></a>
              <a class="p-1" href="hapus.php?no=<?= $row["no"];?>" onclick="return confirm('Yakin?');"><button type="button" class="btn btn-secondary btn-sm"><i class="bi bi-trash"></i></button></a>
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