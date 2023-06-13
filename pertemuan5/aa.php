<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <h1>Associative Arrays</h1>
    <ul>
        <li>
            <a href="index.php">Indexed Array</a>
        </li>
        <li>
            <a href="aa.php">Associative Arrays</a>
        </li>
    </ul>
    <hr>
    <?php
        $laptop = array("Acer" => "Rp 15.000.000","Asus" => "Rp 1.000.000","MSI" => "Rp 500.000","MACBOOK" => "Rp 300.000");
        // var_dump($laptop);
        // echo $laptop["Acer"];
    ?>
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th>No</th>
            <th>Nama Laptop</th>
            <th>Harga Laptop</th>
        </tr>
        <?php
        $i = 1;
        foreach($laptop as $l => $l_value) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $l; ?></td>
            <td><?= $l_value; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>