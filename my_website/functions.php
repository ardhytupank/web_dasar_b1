<?php
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
