<?php
date_default_timezone_set("Asia/Jakarta");

function koneksi()
{
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "web_dasar_b1";
  return mysqli_connect(
    $server,
    $username,
    $password,
    $database
  );
}

function spesialis()
{
  return mysqli_query(
    koneksi(),
    "SELECT * FROM spesialis"
  );
}

function dokter()
{
  return mysqli_query(
    koneksi(),
    "SELECT * FROM dokter"
  );
}

function dokter_satu($id_dokter, $isi_tabel)
{
  $x = mysqli_fetch_assoc(
    mysqli_query(
      koneksi(),
      "SELECT * FROM dokter WHERE
      id = '$id_dokter'"
    )
  );
  return $x[$isi_tabel];
}

function dokter_hapus($id_dokter)
{
  return mysqli_query(
    koneksi(),
    "DELETE FROM dokter WHERE id = '$id_dokter'"
  );
}

function spesialis_satu($id_spesialis, $isi_tabel)
{
  $x = mysqli_fetch_assoc(
    mysqli_query(
      koneksi(),
      "SELECT * FROM spesialis WHERE id = '$id_spesialis'"
    )
  );
  return $x[$isi_tabel];
}
