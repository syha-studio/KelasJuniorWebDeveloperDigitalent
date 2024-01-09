<html>
    <head>
        <title>Tampilan Tabel</title>
    </head>
    <body>
        <h2>List Kontak</h2>
        <table border="1">
            <tr>
                <th>NO</th><th>ID</th><th>NAMA</th><th>GENDER</th><th>EMAIL</th>
                <th>ALAMAT</th><th>KOTA</th><th>USIA</th>
            </tr>
            <?php
            include 'koneksi.php';
            $kontak = mysqli_query ($conn, "SELECT * from murid2");
            $no=1;
            foreach ($kontak as $row){
                $jenis_kelamin = $row['jkel']=='P'?'Perempuan':'Laki Laki';
                echo "<tr>
                <td>$no</td>
                <td>".$row['id']."</td>
                <td>".$row['Nama']."</td>
                <td>".$jenis_kelamin."</td>
                <td>".$row['Email']."</td>
                <td>".$row['Alamat']."</td>
                <td>".$row['Kota']."</td>
                <td>".$row['Usia']."</td>
                </tr>";
            }
            ?>
        </table></body></html>