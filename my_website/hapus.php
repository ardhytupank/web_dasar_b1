<?php
require "functions.php";
$id_dokter = $_GET["id"];

if (dokter_hapus($id_dokter)) {
  echo "<script>
  alert('Data dokter berhasil dihapus');
  location='dokter.php';
  </script>";
} else {
  echo "<script>
  alert('Data dokter gagal dihapus!')
  location='dokter.php';
  </script>";
}
