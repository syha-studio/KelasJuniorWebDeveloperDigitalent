<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: dashboard.php");
    exit;
}
require 'functions.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM `admin` where username = '$username' AND password ='$password'");

    if (mysqli_num_rows($result) === 1) {
        $_SESSION["login"] = true;
        header("Location: dashboard.php");
        exit;
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BPSDMP KOMINFO Surabaya</title>
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
                        <a class="nav-link" href="login.php"><button type="button" class="btn btn-primary btn-sm ps-3 pe-3 pt-1 pb-1">Login</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section style="background-color: #f1f9fe;">
        <div class="container p-5">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-center">
                                    <div class="pt-5 pb-5 ps-4 pe-4">
                                        <div class="text-center">
                                            <p class="h4 text-gray-900 mb-1" style="font-weight:700">Selamat Datang</p>
                                            <p class="text-gray-900 mb-4">Silahkan Login</p>
                                        </div>
                                        <?php if (isset($error)) : ?>
                                            <div class="row text-center mb-1">
                                                <div class="col pt-1">
                                                    <p style="color : red;">Username/Password salah!!</p>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                        <form action="" method="post">
                                            <div class="form-group p-1">
                                                <input type="text" name="username" class="form-control" placeholder="Enter username" autocomplete="off">
                                            </div>
                                            <div class="form-group p-1">
                                                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-3"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>