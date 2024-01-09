<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

$id = $_GET["id"];
$ganti  = query("SELECT * FROM kegiatan WHERE id = $id")[0];
// Query
if (isset($_POST["submit"])) {
    if (ubahkegiatan($_POST) > 0) {
        echo "
        <script>
          alert('Kegiatan Berhasil DiUpdate!');
          document.location.href = 'dashboard.php';
        </script>
      ";
    } else {
        echo "
        <script>
          alert('Kegiatan Gagal DiUpdate!');
          document.location.href = 'dashboard.php';
        </script>
      ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan - BPSDMP KOMINFO Surabaya</title>
    <link rel="shortcut icon" href="assets\img\logoBPSDMP.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-color: #f1f9fe;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <p class="h5 align-items-center">
                    <img src="assets\img\logoBPSDMP.png" alt="Logo" height="36vh" class="d-inline-block align-text-top">
                    &nbsp; BPSDMP KOMINFO Surabaya
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item p-1">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link" href="logout.php"><button type="button" class="btn btn-danger btn-sm ps-3 pe-3 pt-1 pb-1">Log Out</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section style="background-color: #f1f9fe;">
        <div class="container pt-4 pb-4">
            <div class="row">
                <div class="col d-flex justify-content-start ps-3 pe-3">
                    <a href="dashboard.php"><button type="button" class="btn btn-secondary"><i class="bi bi-back"></i> Kembali</button></a>
                </div>
            </div>
            <div class="row p-3">
                <div class="col text-center">
                    <p class="h3">Edit Kegiatan</p>
                    <hr class="border border-secondary border-2 opacity-50">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-12">
                    <!-- Formulir -->
                    <form action="" method="post" enctype="multipart/form-data" class="row g-3">
                        <input type="text" hidden name="id" value="<?= $ganti['id'] ?>">
                        <input type="text" hidden name="gambarLama" value="<?= $ganti['gambar'] ?>">
                        <input type="text" hidden name="last_updated" value="<?= date("Y-m-d") ?>">
                        <div class="row">
                            <div class="col-md-8 mb-2">
                                <label for="judul" class="form-label">Judul Postingan</label>
                                <input class="form-control" type="text" name="judul" id="judul" required autocomplete="off" value="<?= $ganti['judul'] ?>">
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="mb-2">
                                    <label for="gambar" class="form-label">gambar Postingan</label>
                                    <input class="form-control" type="file" name="gambar" id="gambar" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-2">
                                <label for="isi">Isi Postingan</label>
                                <textarea class="form-control" name="isi" id="isi" style="height: 25rem" required><?= $ganti['isi'] ?></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!-- Akhir Formulir -->
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>