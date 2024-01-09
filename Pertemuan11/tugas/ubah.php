<?php
require 'functions.php';
$id = $_GET["no"];
$ganti  = query("SELECT * FROM barang WHERE `no` = $id")[0];

if (isset($_POST["submit"])) {
    if (ubahbarang($_POST) > 0) {
        echo "
        <script>
          alert('Data Berhasil di-Update!');
          document.location.href = 'index.php';
        </script>
      ";
    } else {
        echo "
        <script>
          alert('Data Gagal di-Update!');
          document.location.href = 'index.php';
        </script>
      ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulir Ubah Barang</title>
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
    <div class="container pt-4 pb-2">
      <div class="d-flex justify-content-between">
        <a href="index.php"><button type="button" class="btn btn-secondary"><i class="bi bi-back"></i> Batal</button></a>
      </div>
      <div class="d-flex justify-content-center pt-3 pb-3">
        <h1 class="fw-bolder">Formulir Ubah Barang</h1>
      </div>
    <!-- Akhir Keterangan --> 
    
    <!-- Formulir -->
      <form action="" method ="post" class="row g-3">
        <input type="hidden" name="no" id="no" value="<?=$ganti['no']?>">
        <div class="mb-2">
          <label for="nama_Merek" class="form-label">Nama Merek</label>
          <input class="form-control" type="text" name="nama_merek" id="nama_merek" required autocomplete ="off" value="<?=$ganti['nama_merek']?>">
        </div>
        <div class="mb-2">
          <label for="warna" class="form-label">Warna</label>
          <input class="form-control" type="text" name="warna" id="warna" required autocomplete ="off" value="<?=$ganti['warna']?>">
        </div>
        <div class="mb-2">
          <label for="jumlah" class="form-label">Jumlah</label>
          <input class="form-control" type="text" name="jumlah" id="jumlah" required autocomplete ="off" value="<?=$ganti['jumlah']?>">
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    <!-- Akhir Formulir -->
    </div>
  </body>
</html>