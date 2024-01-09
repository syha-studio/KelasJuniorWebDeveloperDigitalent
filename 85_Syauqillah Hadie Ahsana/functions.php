<?php
//koneksi ke database ============================================================================
$conn = mysqli_connect("localhost", "root", "", "85_syauqillah hadie ahsana");
//umum ===========================================================================================
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
//kegiatan =========================================================================================
function tambahkegiatan($data)
{
    global $conn;
    $judul = htmlspecialchars($data["judul"]);
    $gambar = uploadgambar();
    $isi = $data["isi"];
    $created_date = htmlspecialchars($data["created_date"]);
    $last_updated = htmlspecialchars($data["last_updated"]);
    if (!$gambar) {
        return false;
    }
    $query = "INSERT INTO kegiatan VALUES ('','$judul','$isi','$gambar','$created_date','$last_updated')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function uploadgambar()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!')
              </script>";
        return false;
    }
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namaFile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo "<script>
                alert('Upload file dengan ekstensi jpg/jpeg/png!')
              </script>";
        return false;
    }
    if ($ukuranFile > 10000000) {
        echo "<script>
                alert('Ukuran terlalu besar!')
              </script>";
        return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensigambar;
    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}
function ubahkegiatan($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $judul = htmlspecialchars($data["judul"]);
    $isi = $data["isi"];
    $last_updated = htmlspecialchars($data["last_updated"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploadgambar();
    }
    $query = "UPDATE kegiatan SET
                judul = '$judul',
                isi ='$isi',
                gambar = '$gambar',
                last_updated = '$last_updated' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapuskegiatan($id)
{
    global $conn;
    $query = "DELETE FROM kegiatan WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
