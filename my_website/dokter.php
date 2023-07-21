<?php require "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
</head>

<body>
  <h1>Ini adalah Halaman Dokter</h1>
  <ul>
    <a href="index.php">
      <li>Home</li>
    </a>
    <a href="jadwal_dokter.php">
      <li>Jadwal Dokter</li>
    </a>
  </ul>
  <hr>
  <a href="tambah_dokter.php">Tambah Data Dokter</a>

  <table border="1" style="width: 100%; border-collapse: collapse;">
    <tr>
      <th>No</th>
      <th>ID Dokter</th>
      <th>Nama Dokter</th>
      <th>Spesialis</th>
      <th>Created</th>
      <th>Updated</th>
      <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    foreach (dokter() as $d) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $d["id"]; ?></td>
        <td><?= $d["nama_dokter"]; ?></td>
        <td><?= spesialis_satu($d["id_spesialis"], "nama"); ?></td>
        <td><img src="img/<?= dokter_gambar($d["id"], "gambar"); ?>" alt="" style="width: 100px;"></td>
        <td><?= $d["simpan"]; ?></td>
        <td><?= $d["edit"]; ?></td>
        <td>
          <a href="edit_dokter.php?id=<?= $d["id"] ?>">Edit</a>
          <a href="javascript:hapus('hapus.php?id=<?= $d["id"] ?>')">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

  <script>
    function hapus(url) {
      if (confirm("Apakah data berikut akan dihapus?")) {
        document.location = url;
      }
    }
  </script>

</body>

</html>