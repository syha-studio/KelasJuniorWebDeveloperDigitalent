<?php
require 'functions.php';

$id = $_GET["NIS"];

if ( hapusSiswa($id)){
    echo "
      <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'dataSiswa.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'dataSiswa.php';
      </script>
    ";
  }
?>