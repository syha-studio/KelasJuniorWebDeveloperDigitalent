<?php
session_start();
if (!isset($_SESSION["login"])){
  header ("Location: index.php");
  exit;
}
require 'functions.php';

$id = $_GET["id"];

if ( hapuskegiatan($id)){
    echo "
      <script>
        alert('Kegiatan Berhasil Dihapus!');
        document.location.href = 'dashboard.php';
      </script>
    ";
  }else {
    echo "
      <script>
        alert('Kegiatan Gagal Dihapus!');
        document.location.href = 'dashboard.php';
      </script>
    ";
  }
?>