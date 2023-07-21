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
  <form action="" method="POST" enctype="multipart/form-data">
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
          <input name="nama_dokter" type="text" placeholder="Input nama dokter" value="<?= dokter_satu($id_dokter, "nama_dokter"); ?>">
        </td>
      </tr>
      <tr>
        <th>Spesialis</th>
        <td>:</td>
        <td>
          <select name="id_spesialis">
            <option value="<?= dokter_satu($id_dokter, "id_spesialis") ?>" selected><?= spesialis_satu(dokter_satu($id_dokter, "id_spesialis"), "nama") ?></option>

            <?php foreach (spesialis_kecuali(dokter_satu($id_dokter, "id_spesialis")) as $sk) : ?>
              <option value="<?= $sk["id"]; ?>"><?= $sk["nama"]; ?></option>
            <?php endforeach; ?>

          </select>
        </td>
      </tr>
      <tr>
        <th>Gambar Dokter</th>
        <td>:</td>
        <td>
          <input type="file" name="gambar">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" name="edit_dokter" style="width: 100%; background-color: aqua;">Edit Dokter</button>
        </td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST["edit_dokter"])) {
    $nama_dokter = $_POST["nama_dokter"];
    $id_spesialis = $_POST["id_spesialis"];

    $tmp = "img/";

    // var_dump($_FILES);

    $nama_gambar = $_FILES["gambar"]["name"];
    $type_gambar = $_FILES["gambar"]["type"];
    $tmp_name_gambar  = $_FILES["gambar"]["tmp_name"];
    $ukuran_gambar = $_FILES["gambar"]["size"];

    $daftar_gambar = ["png", "jpg", "jpeg"];
    $x = explode('.', $nama_gambar);
    $x = strtolower(end($x));

    if ($nama_gambar == "") {
      echo "<script>
      alert('Gambar tidak boleh kosong');
      </script>";
    } elseif ($nama_dokter == "") {
      echo "<script>
      alert('Nama Dokter tidak boleh kosong!');
      </script>";
    } else {

      if (!in_array($x, $daftar_gambar)) {
        echo "<script>
      alert('Format Gambar tidak sesuai');
      </script>";
      } elseif ($type_gambar != "image/png" and $type_gambar != "image/jpeg" and $type_gambar != "image/jpg") {
        echo "<script>
      alert('Format Gambar tidak sesuai loh');
      </script>";
      } elseif ($ukuran_gambar > 1000000) {
        echo "<script>
      alert('Ukuran gambar terlalu besar!');
      </script>";
      } else {
        $g = uniqid();
        $nama_gambar_baru = $g . "." . $x;

        $tanggal_hari_ini = date("Y-m-d H:i:s");

        $simpan_edit_dokter = mysqli_query(
          koneksi(),
          "UPDATE dokter SET
          nama_dokter = '$nama_dokter',
          id_spesialis = '$id_spesialis',
          edit = '$tanggal_hari_ini'
          WHERE
          id = '$id_dokter'"
        );

        if ($simpan_edit_dokter) {
          //ini digunakan untuk mengechek apakah gambar di tabel dokter_gambar ada atau tidak
          if (dokter_gambar_jumlah($id_dokter) > 0) {
            //jika gambar dokter sudah ada sebelumnya
            $nama_gambar_lama = dokter_gambar($id_dokter, "gambar");
            $edit_gambar_dokter = mysqli_query(
              koneksi(),
              "UPDATE dokter_gambar SET
              gambar = '$nama_gambar_baru',
              updated = '$tanggal_hari_ini'
              WHERE
              id_dokter = '$id_dokter'"
            );
            if ($edit_gambar_dokter) {
              //ini digunakan untuk menghapus gambar dari folder img
              unlink($tmp . $nama_gambar_lama);
              //ini untuk menyimpan gambar yang telah di upload
              move_uploaded_file($tmp_name_gambar, $tmp . $nama_gambar_baru);
              echo "<script>
              alert('Edit Dokter berhasil!');
              location='dokter.php'
              </script>";
            } else {
              echo "<script>
              alert('Edit Gambar Dokter Gagal!');
              location='dokter.php'
              </script>";
            }
          } else {
            //ini jika gambar belum ada sebelumnya
            $simpan_gambar_dokter = mysqli_query(
              koneksi(),
              "INSERT INTO dokter_gambar VALUES('$id_dokter','$nama_gambar_baru','$tanggal_hari_ini','$tanggal_hari_ini')"
            );
            if ($simpan_gambar_dokter) {
              //ini untuk menyimpan gambar yang telah di upload
              move_uploaded_file($tmp_name_gambar, $tmp . $nama_gambar_baru);
              echo "<script>
              alert('Edit Dokter berhasil!');
              location='dokter.php'
              </script>";
            } else {
              echo "<script>
              alert('Simpan gambar dokter gagal!');
              </script>";
            }
          }
        } else {
          echo "<script>
          alert('Edit dokter gagal');
          </script>";
        }
      }
    }
  }
  ?>

</body>

</html>