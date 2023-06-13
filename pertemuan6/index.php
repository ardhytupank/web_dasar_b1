<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>
<body>
    <h1>Multidimensional Arrays</h1>
    <?php
    $mobil = array(
        array("Toyota","Rp 50.000","Merah"),
        array("Mitsubishi","Rp 100.000","Hitam"),
        array("Honda","Rp 500.000","Biru")
    );
    // var_dump($mobil);
    // echo $mobil[1][2];
    $jumlah_mobil = count($mobil);
    ?>
    <center>
    <table border="1" style="border-collapse: collapse; text-align: center">
        <tr>
            <th>No</th>
            <th>Nama Mobil</th>
            <th>Harga Mobil</th>
            <th>Warna Mobil</th>
        </tr>
        <?php
        for ($i=0; $i < $jumlah_mobil; $i++) { 
        $jumlah_isi_mobil = count($mobil[$i]);    
        ?>
        <tr>
            <td><?php echo $i+1; ?></td>
            <?php for($x=0; $x < $jumlah_isi_mobil; $x++) { ?>
            <td><?php echo $mobil[$i][$x]; ?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    </center>
</body>
</html>