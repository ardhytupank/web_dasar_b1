<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
</head>

<body>
  <h1>Ini adalah Halaman Tambah Data Dokter</h1>
  <ul>
    <a href="dokter.php">
      <li>Data Dokter</li>
    </a>
    <a href="jadwal_dokter.php">
      <li>Jadwal Dokter</li>
    </a>
  </ul>
  <hr>

  <form action="" method="post">
    <table>
      <tr>
        <th>Nama Dokter</th>
        <td>:</td>
        <td>
          <input type="text" name="nama_dokter">
        </td>
      </tr>
      <tr>
        <th>Spesialis</th>
        <td>:</td>
        <td>
          <select name="spesialis">
            <option value="" selected>Pilih Spesialis</option>

          </select>
        </td>
      </tr>
    </table>
  </form>

</body>

</html>