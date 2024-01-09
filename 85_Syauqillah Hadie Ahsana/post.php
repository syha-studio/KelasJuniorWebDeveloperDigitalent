<?php
require 'functions.php';
$id = $_GET["id"];
$show  = query("SELECT * FROM kegiatan WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $show['judul'] ?> - BPSDMP Kominfo Surabaya</title>
    <link rel="shortcut icon" href="assets\img\logoBPSDMP.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <p class="h5 align-items-center">
                    <img src="assets\img\logoBPSDMP.png" alt="Logo" height="36vh" class="d-inline-block align-text-top">
                    &nbsp; BPSDMP Kominfo Surabaya
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item p-1">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link" href="login.php"><button type="button" class="btn btn-primary btn-sm ps-3 pe-3 pt-1 pb-1">Login</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section style="background-color: #f1f9fe;">
        <div class="container pt-4 text-center">
            <img src="assets\img\<?= $show['gambar'] ?>" alt="<?= $show['gambar'] ?>" style="width: 100vh;">
        </div>
    </section>
    <section style="background-color: #f1f9fe;">
        <div class="container pb-4">
            <div class="row p-3 text-center">
                <div class="col">
                    <p class="h1"><?= $show['judul'] ?></p>
                    <p class="opacity-50"> tanggal Upload : <?= $show['created_date'] ?> &nbsp; terakhir diedit : <?= $show['last_updated'] ?></p>
                </div>
            </div>
            <div class="row p-3 pt-0">
                <div class="col">
                    <p><?= $show['isi'] ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
<footer class="p-2 m-0" style="background-color: #e3f2fd;">
    <div class="text-center">
        <p>Created by <a href="https://www.instagram.com/syauqillah_ahsa/" class="text-black fw-bold" style="text-decoration:none">SYHA</a></p>
    </div>

</footer>

</html>