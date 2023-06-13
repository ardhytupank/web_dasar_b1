<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel dan Function PHP</title>
</head>
<body>

    <?php
        // $nama_mahasiswa = "Jono";
        // $prodi = "Sistem Informasi";
    ?>

    <!-- <p>
        Nama saya adalah <?//= $nama_mahasiswa . ' ' . $prodi; ?>, saya adalah mahasiswa UMSU Prodi <?//= $prodi; ?>
    </p> -->

    <!-- 

    Buatlah 2 variabel yang nilainya adalah 2 angka yang berbeda.
    Kemudian buatlah fungsi perhitungan aritmatika dari kedua variabel tersebut (tambah, kali, bagi, kurang)

     -->

    <?php
    echo perkalian(5,6);

    $nilai1 = 21;
    $nilai2 = 15;

    function perkalian($nilai1,$nilai2){
        return $nilai1 * $nilai2;
    }
    ?>

    <p>Hasil penjumlahan dari <?= $nilai1 ?> dengan <?= $nilai2 ?> adalah <?= $nilai1 + $nilai2 ?></p>

    <p>Hasil perkalian dari <?= $nilai1 ?> dengan <?= $nilai2 ?> adalah <?= perkalian($nilai1,$nilai2) ?></p>

</body>
</html>