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
    <a href="produk.php">
      <li>Menu Produk</li>
    </a>
  </ul>
  <h1>Halaman Pembelian</h1>
  <hr>
  <table>
    <form action="" method="post">
      <tr>
        <th>Nama Produk</th>
        <td>:</td>
        <td>
          <input type="text" name="nama_produk" required>
        </td>
      </tr>
      <tr>
        <th>Harga Produk</th>
        <td>:</td>
        <td>
          <input type="number" name="harga_produk" id="" required>
        </td>
      </tr>
      <tr>
        <th>Qty</th>
        <td>:</td>
        <td>
          <input type="number" name="qty" id="" required>
        </td>
      </tr>
      <tr>
        <th>Jumlah Bayar</th>
        <td>:</td>
        <td>
          <input type="number" name="jumlah_bayar" id="" required>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <button type="submit" name="bayar" style="width: 100%;">Bayar</button>
        </td>
      </tr>
    </form>
  </table>
  <?php
  if (isset($_POST["bayar"])) {
    $nama_produk = $_POST["nama_produk"];
    $harga_produk = $_POST["harga_produk"];
    $qty = $_POST["qty"];
    $jumlah_bayar = $_POST["jumlah_bayar"];

    $total_harga = $qty * $harga_produk;
    $total_kembalian = $jumlah_bayar - $total_harga;

    echo "Nama Produk : " . $nama_produk . '<br>';
    echo "Harga Produk : " . $harga_produk . '<br>';
    echo "Qty : " . $qty . '<br>';
    echo "Jumlah Bayar : " . $jumlah_bayar . '<br>';
    echo "Total Harga : " . $total_harga . '<br>';
    echo "Total kembalian anda adalah : <b>" . $total_kembalian . "</b><br>";
    if ($total_kembalian < 0) {
      echo "<i style='color: red; font-weight: bold'>Uang anda tidak mencukupi</i>";
    }
  }
  ?>
</body>

</html>