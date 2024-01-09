<?php
require 'functions.php';
$id = $_GET["NIS"];
$ganti  = query("SELECT * FROM siswa WHERE NIS = $id")[0];

if (isset($_POST["submit"])) {
  if (ubahSiswa($_POST) > 0) {
    echo "
        <script>
          alert('Data Berhasil di-Update!');
          document.location.href = 'dataSiswa.php';
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
  <title>Formulir Edit Siswa</title>
  <!--CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #0B2Fa6">
    <div class="container">
      <a class="navbar-brand" href="dashboard.php" style="color: white; font-weight: 700">Pendaftaran Siswa Baru</a>
    </div>
  </nav>
  <!-- Akhir NavBar -->

  <!-- Keterangan -->
  <div class="container pt-4 pb-2">
    <div class="d-flex justify-content-between">
      <a href="index.php"><button type="button" class="btn btn-secondary"><i class="bi bi-back"></i> Batal</button></a>
    </div>
    <div class="d-flex justify-content-center pt-3 pb-3">
      <h1 class="fw-bolder">Formulir Edit Siswa</h1>
    </div>
    <!-- Akhir Keterangan -->

    <!-- Formulir -->
    <form action="" method="post" class="row g-3">
      <input type="hidden" name="NIS" id="NIS" value="<?= $ganti['NIS'] ?>">
      <div class="mb-2">
        <label for="nama" class="form-label">Nama</label>
        <input class="form-control" type="text" name="nama" id="nama" value="<?= $ganti['nama'] ?>" required autocomplete="off">
      </div>
      <div class="mb-2">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" style="height: 100px" required autocomplete="off"><?= $ganti['alamat'] ?></textarea>
      </div>
      <div class="mb-2">
        <label for="jenis" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
        <?php if ($ganti['jenis'] == 'Laki-Laki') {
            echo '<input class="form-check-input" type="radio" name="jenis" id="jenis1" value="Laki-Laki" checked >';
          }else{
            echo '<input class="form-check-input" type="radio" name="jenis" id="jenis1" value="Laki-Laki">';
          } ?>
          <label class="form-check-label" for="jenis1">Laki-Laki</label>
        </div>
        <div class="form-check">
        <?php if ($ganti['jenis'] == 'Perempuan') {
            echo '<input class="form-check-input" type="radio" name="jenis" id="jenis2" value="Perempuan" checked>';
          }else{
            echo '<input class="form-check-input" type="radio" name="jenis" id="jenis2" value="Perempuan">';
          } ?>
          <label class="form-check-label" for="jenis2">Perempuan</label>
        </div>
      </div>
      <div class="mb-2">
        <label for="agama" class="form-label">Agama</label>
        <select class="form-select" name="agama" id="agama" required>
          <option selected value="<?= $ganti['agama'] ?>"><?= $ganti['nama'] ?></option>
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
        <input class="form-control" type="text" name="sekolahasal" id="sekolahasal" value="<?= $ganti['sekolahasal'] ?>" required autocomplete="off">
      </div>
      <div class="d-flex justify-content-center mb-3">
        <button type="submit" name="submit" class="btn btn-primary">Edit</button>
      </div>
    </form>
    <!-- Akhir Formulir -->
  </div>
</body>

</html>