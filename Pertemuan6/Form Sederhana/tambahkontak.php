<?php
include 'koneksi.php';
//menyimpan data ke dalam variabel
$nama       = $_POST['nama'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$email      = $_POST['email'];
$alamat     = $_POST ['alamat'];
$kota     = $_POST ['kota'];
$usia     = $_POST ['usia'];
// query SQL untuk insert data
$query = "INSERT INTO murid2 SET Nama='$nama', jkel='$jenis_kelamin',Email='$email',
Alamat='$alamat',Kota='$kota', Usia='$usia'";
mysqli_query($conn,$query);
//mengalihkan ke halaman tampilkontak.php
header("location: tampilkontak.php");
?>