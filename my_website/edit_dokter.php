<?php
require "functions.php";
$id_dokter = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Dokter</title>
</head>

<body>
  <h1>Halaman Edit Dokter</h1>
  <table>
    <tr>
      <th>ID Dokter</th>
      <td>:</td>
      <td><?= $id_dokter; ?></td>
    </tr>
    <tr>
      <th>Nama Dokter</th>
      <td>:</td>
      <td>
        <input type="text" placeholder="Input nama dokter" value="<?= dokter_satu($id_dokter, "nama_dokter"); ?>">
      </td>
    </tr>
    <tr>
      <th>Spesialis</th>
      <td>:</td>
      <td>
        <select name="">
          <option value="<?= dokter_satu($id_dokter, "id_spesialis") ?>" selected><?= spesialis_satu(dokter_satu($id_dokter, "id_spesialis"), "nama") ?></option>
        </select>
      </td>
    </tr>
  </table>
</body>

</html>