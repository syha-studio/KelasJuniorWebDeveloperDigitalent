<?php
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pendaftaran Siswa Baru</title>
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

    <!-- Menu Admin -->
    <section id="Menu Admin">
      <div class="container pt-5 pb-5">
        <div class="row text-center justify-content-center">
          <div class="col-6">
            <h1 class="fw-bold">Digital Talent</h1>
            <?php
            if (isset($_GET["status"])) {
              echo '<br><div class="alert alert-success" role="alert">
              <h5 class="fw-bold">Pendaftaran Siswa Berhasil!</h5>
            </div>';
              
            }
            ?>
          </div>
        </div>
      </div>
      <div class="container pb-5">
        <div class="row justify-content-center text-center">
          <div class="col-md-5 mb-4">
            <a class="nav-link" href="dataSiswa.php">
              <div class="card p-2" style="background-color: #b6ccff">
                <h5 class="fw-bolder"><i class="bi bi-people" style = "font-size : 3rem;"></i><br> Lihat Data Siswa</h5>
              </div>
            </a>
          </div>
          <div class="col-md-5 mb-4">
            <a class="nav-link" href="FormRegistrasi.php">
              <div class="card p-2" style="background-color: #b6ccff">
                <h5 class="fw-bolder"><i class="bi bi-person-add" style = "font-size : 3rem;"></i><br>Tambah Data Siswa</h5>
              </div>
            </a>
          </div>
        </div>
    </section>
    <!-- Akhir Menu Admin -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>