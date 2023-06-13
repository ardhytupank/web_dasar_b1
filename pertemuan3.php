<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>
<body>
    <h3>Form Input Produk</h3>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Kode Produk</td>
            <td>:</td>
            <td>
                <input type="text" name="kode_produk" placeholder="Input kode produk" value="<?= @$_POST["kode_produk"] ?>">
            </td>
        </tr>
        <tr>
            <td>Jenis Produk</td>
            <td>:</td>
            <td>
                <select name="jenis_produk" id="">
                    <option value="">Pilih Jenis Produk</option>
                    <option>Kosmetik</option>
                    <option>Jajanan</option>
                    <option>Minuman</option>
                    <option>Elektronik</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td>
                <input type="text" name="nama_produk" placeholder="Input nama produk">
            </td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td>:</td>
            <td>
                <input type="number" name="harga_produk" placeholder="Input harga produk">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <button style="width: 100%;" name="simpan" value="1" type="submit">Simpan</button>
            </td>
        </tr>
    </table>
    </form>
    <hr>
    <?php
    if (@$_POST["simpan"] == "1") {
        if ($_POST["kode_produk"] == "") {
            echo "<h3 style='color: red; font-style: italic;'>Kode produk masih kosong!</h3>";
            $cek_kode_produk = 0;
        }else {
            $cek_kode_produk = 1;
        }
        if ($_POST["jenis_produk"] == "") {
            echo "<h3 style='color: red; font-style: italic;'>Jenis produk belum dipilih!</h3>";
            $cek_jenis_produk = 0;
        }else {
            $cek_jenis_produk = 1;
        }
        if ($_POST["nama_produk"] == "") {
            echo "<h3 style='color: red; font-style: italic;'>Nama produk masih kosong!</h3>";
            $cek_nama_produk = 0;
        }else {
            $cek_nama_produk = 1;
        }
        if ($_POST["harga_produk"] == "") {
            echo "<h3 style='color: red; font-style: italic;'>Harga produk masih kosong!</h3>";
            $cek_harga_produk = 0;
        }else {
            $cek_harga_produk = 1;
        }

        if ($cek_kode_produk == 1 AND $cek_jenis_produk == 1 AND $cek_nama_produk == 1 AND $cek_harga_produk == 1) { ?>

    <table>
        <tr>
            <th>Kode Produk</th>
            <td>:</td>
            <td><?php echo @$_POST["kode_produk"] ?></td>
        </tr>
        <tr>
            <th>Jenis Produk</th>
            <td>:</td>
            <td><?= @$_POST["jenis_produk"] ?></td>
        </tr>
        <tr>
            <th>Nama Produk</th>
            <td>:</td>
            <td><?= @$_POST["nama_produk"] ?></td>
        </tr>
        <tr>
            <th>Harga Produk</th>
            <td>:</td>
            <td><?= @$_POST["harga_produk"] ?></td>
        </tr>
    </table>

        <?php } ?>

    <?php } ?>


    <?php

        // echo $_POST["harga_produk"];
        // var_dump($_POST);
        // print_r($_POST)

        // echo $_GET["nama_produk"]
        // var_dump($_GET);

        // $x = 10;
        // $y = "Jum'at";
        // echo $y.$x;

        // $x = 50;
        // $y = 5;

        // echo $x - $y;

        // if ($nilai == 149) {
        //     echo "Kecil";
        // }else {
        //     echo "besar";
        // }

        // $nilai = 150;

        // if ($nilai >= 80 AND $nilai <= 100) {
        //     echo "A";
        // }elseif ($nilai >= 70 AND $nilai < 80) {
        //     echo "B";
        // }
        // else{
        //     echo "E";
        // }

        // $x = 8;
        // $y = 7;

        // if ($x == 6 OR $y < 1) {
        //     echo "Berhasil";
        // }else {
        //     echo "Gagal";
        // }

    ?>

</body>
</html>