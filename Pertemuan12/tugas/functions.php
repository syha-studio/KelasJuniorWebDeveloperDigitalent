<?php
//koneksi ke database ============================================================================
$conn = mysqli_connect("localhost","root","","digitalent");
//umum ===========================================================================================
function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}
//Murid ======================================================================================
function tambahSiswa ($data) {
    global $conn;
    $tanggalInput = htmlspecialchars($data["tanggalInput"]);
    $NIS = htmlspecialchars($data["NIS"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $nama = htmlspecialchars($data["nama"]);
    $agama = htmlspecialchars($data["agama"]);
    $sekolahasal = htmlspecialchars($data["sekolahasal"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $query = "INSERT INTO siswa VALUES (
        '$NIS','$tanggalInput','$nama','$alamat','$jenis',
        '$agama','$sekolahasal')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubahSiswa ($data) {
    global $conn;
    $NIS= htmlspecialchars($data["NIS"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $nama = htmlspecialchars($data["nama"]);
    $sekolahasal = htmlspecialchars($data["sekolahasal"]);
    $agama = htmlspecialchars($data["agama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $query = "UPDATE siswa SET
                        jenis = '$jenis',
                        nama = '$nama',
                        sekolahasal = '$sekolahasal',
                        alamat = '$alamat',
                        agama = '$agama'
                         WHERE NIS = '$NIS'";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapusSiswa ($id){
    global $conn;
    $query = "DELETE FROM siswa WHERE NIS = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>