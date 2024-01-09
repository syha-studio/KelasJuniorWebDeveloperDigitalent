<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
// Query
$kegiatan = query("SELECT id, judul, isi, gambar, created_date, last_updated FROM kegiatan ORDER BY created_date, id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - BPSDMP KOMINFO Surabaya</title>
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
            <div class="row p-3">
                <div class="col text-center">
                    <p class="h3">Daftar Kegiatan</p>
                    <hr class="border border-secondary border-2 opacity-50">
                </div>
            </div>
            <div class="row ps-3 pe-3">
                <div class="col-md-auto ps-3">
                    <a href="tambah.php"><button type="button" class="btn btn-primary me-4">Unggah Kegiatan <i class="bi bi-plus-lg"></i></button></a>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center p-2 pb-2 overflow-y-scroll" style="max-height: 30rem;">
                        <table class="table table-striped align-middle">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Created Date</th>
                                <th>Last Updated</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            <?php $i = 1;
                            if ($kegiatan == null) {
                                echo "<tr class=\"text-center\"><td colspan=\"7\">Empty</td></tr>";
                            } else {
                                foreach ($kegiatan as $row) : ?>
                                    <tr>
                                        <td class="align-middle"><?= $i ?></td>
                                        <td class="align-middle"><?= $row["judul"] ?></td>
                                        <td class="align-middle"><img src="assets/img/<?= $row["gambar"] ?>" width="250vh" alt="<?= $row["gambar"] ?>"></td>
                                        <td class="align-middle"><?= $row["created_date"] ?></td>
                                        <td class="align-middle"><?= $row["last_updated"] ?></td>
                                        <td class="text-center">
                                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda akan menghapus kegiatan, yakin?');">
                                                <button type="button" class="btn btn-danger btn-sm m-1">
                                                    <i class="bi bi-trash p-1"></i> Hapus
                                                </button>
                                            </a>
                                            <br>
                                            <a href="post.php?id=<?= $row["id"]; ?>" target="_blank">
                                                <button type="button" class="btn btn-success btn-sm m-1">
                                                    <i class="bi bi-eye p-1"></i> Lihat
                                                </button>
                                            </a>
                                            <br>
                                            <a href="edit.php?id=<?= $row["id"]; ?>">
                                                <button type="button" class="btn btn-secondary btn-sm m-1">
                                                    <i class="bi bi-pencil p-1"></i> Edit
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                            <?php $i++;
                                endforeach;
                            } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>