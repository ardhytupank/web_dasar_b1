<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS B1 Pagi Sistem Informasi</title>
</head>

<body>
  <ul>
    <a href="index.php">
      <li>Beranda</li>
    </a>
    <a href="pembelian.php">
      <li>Menu Pembelian</li>
    </a>
  </ul>
  <h1>Halaman Produk</h1>
  <?php
  $produk = array(
    array("Toyota", "Rp 50.000", "5"),
    array("Mitsubishi", "Rp 100.000", "1"),
    array("Honda", "Rp 500.000", "1")
  );
  // var_dump($mobil);
  // echo $mobil[1][2];
  $jumlah_produk = count($produk);
  ?>
  <center>
    <table border="1" style="border-collapse: collapse; text-align: center">
      <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Stok</th>
      </tr>
      <?php
      for ($i = 0; $i < $jumlah_produk; $i++) {
        $jumlah_isi_produk = count($produk[$i]);
      ?>
        <tr>
          <td><?php echo $i + 1; ?></td>
          <?php for ($x = 0; $x < $jumlah_isi_produk; $x++) { ?>
            <td><?php echo $produk[$i][$x]; ?></td>
          <?php } ?>
        </tr>
      <?php } ?>
    </table>
  </center>
</body>

</html>