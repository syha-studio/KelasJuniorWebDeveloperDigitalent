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
function tambahbarang ($data) {
    global $conn;
    $nama_merek = htmlspecialchars($data["nama_merek"]);
    $warna = htmlspecialchars($data["warna"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $query = "INSERT INTO barang VALUES (''
        ,'$nama_merek','$warna','$jumlah')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubahbarang ($data) {
    global $conn;
    $no= htmlspecialchars($data["no"]);
    $nama_merek = htmlspecialchars($data["nama_merek"]);
    $warna = htmlspecialchars($data["warna"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $query = "UPDATE barang SET
                        nama_merek = '$nama_merek',
                        warna = '$warna',
                        jumlah = $jumlah WHERE `no` = $no";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapusBarang ($id){
    global $conn;
    $query = "DELETE FROM barang WHERE no = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>