<?php
require 'functions.php';
$kegiatan = query("SELECT id, judul, isi, gambar, created_date, last_updated FROM kegiatan ORDER BY created_date , id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info - BPSDMP KOMINFO Surabaya</title>
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
                    &nbsp; BPSDMP KOMINFO Surabaya
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
        <div class="container pt-4 pb-4">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets\img\tambahan1.jpg" class="d-block w-100" alt="tambahan1.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\tambahan2.jpg" class="d-block w-100" alt="tambahan2.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="assets\img\tambahan3.jpg" class="d-block w-100" alt="tambahan3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #f1f9fe;">
        <div class="container pt-4 pb-4">
            <div class="row p-3">
                <div class="col">
                    <p class="h3">Kegiatan terbaru</p>
                    <hr class="border border-secondary border-2 opacity-50">
                </div>
            </div>
            <div class="row p-3">
                <?php $i = 1;
                if ($kegiatan == null) {
                    echo "<div class=\"col-md-12\"><p class=\"h3\">Coming Soon</div>";
                } else {
                    foreach ($kegiatan as $row) : ?>
                        <div class="col-md-6 p-2">
                            <div class="card" style="min-height:100%">
                                <img src="assets\img\<?= $row["gambar"] ?>" class="card-img-top" alt="kegiatan1.jpg">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row['judul'] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">tanggal Upload : <?= $row["created_date"] ?> &nbsp; terakhir diedit : <?= $row["last_updated"] ?></h6>
                                    <a href="post.php?id=<?= $row['id'] ?>" class="btn btn-primary">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                <?php $i++;
                    endforeach;
                } ?>
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