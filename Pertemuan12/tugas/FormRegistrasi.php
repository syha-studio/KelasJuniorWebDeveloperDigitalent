<?php
require 'functions.php';
if (isset($_POST["submit"])) {
  if ( tambahSiswa($_POST)){
    echo "
      <script>
        document.location.href = 'index.php?status=true';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Pendaftaran gagal!');
        document.location.href = 'index.php';
      </script>
    ";
  }
}

$NISgenerate = query("SELECT max(NIS) as NISterakhir FROM siswa");
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$angkatan1 = (int) substr($NISgenerate[0]['NISterakhir'], 0, 2);
$urutan = (int) substr($NISgenerate[0]['NISterakhir'], 2, 4);
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;

// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015' 
$angkatan = date('y');
if ($angkatan == $angkatan1) {
  $NISbaru = $angkatan . sprintf("%04s", $urutan);
} else {
  $NISbaru = $angkatan . sprintf("%04s", 1);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulir Registrasi Siswa Baru</title>
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
      <a href="index.php"><button type="button" class="btn btn-light"><i class="bi bi-x-square-fill"></i> Batal</button></a>
    </div>
    <div class="d-flex justify-content-center pt-3 pb-3">
      <h1 class="fw-bolder">Formulir Registrasi Siswa Baru</h1>
    </div>
    <!-- Akhir Keterangan -->

    <!-- Formulir -->
    <form action="" method="post" class="row g-3">
      <div class="mb-2">
        <label for="tanggalInput" class="form-label">Tanggal : <?= date('Y-m-d') ?></label>
        <input type="text" name="tanggalInput" id="tanggalInput" value="<?= date('Y-m-d') ?>" hidden>
      </div>
      <div class="mb-2">
        <label for="NIS" class="form-label">NIS</label>
        <input class="form-control" style="background-color: #d2d2d2" type="text" name="NIS" id="NIS" value="<?= $NISbaru ?>" readonly>
      </div>
      <div class="mb-2">
        <label for="nama" class="form-label">Nama</label>
        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap" required autocomplete="off">
      </div>
      <div class="mb-2">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" style="height: 100px" required autocomplete="off"></textarea>
      </div>
      <div class="mb-2">
        <label for="jenis" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis" id="jenis1" value="Laki-Laki">
          <label class="form-check-label" for="jenis1">Laki-Laki</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis" id="jenis2" value="Perempuan">
          <label class="form-check-label" for="jenis2">Perempuan</label>
        </div>
      </div>
      <div class="mb-2">
        <label for="agama" class="form-label">Agama</label>
        <select class="form-select" name="agama" id="agama" required>
          <option selected></option>
          <option value="Islam">Islam</option>
          <option value="Kristen Katolik">Kristen Katolik</option>
          <option value="Kristen Protestan">Kristen Protestan</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Khonghucu">Khonghucu</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>
      <div class="mb-2">
        <label for="sekolahasal" class="form-label">Sekolah Asal</label>
        <input class="form-control" type="text" name="sekolahasal" id="sekolahasal" placeholder="Nama Sekolah" required autocomplete="off">
      </div>
      <div class="d-flex justify-content-center mb-3">
        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
      </div>
    </form>
    <!-- Akhir Formulir -->
  </div>
</body>

</html>