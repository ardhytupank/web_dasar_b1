<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Grade</title>
</head>
<body>
    <?php
    // $nilai = 101;
    // if ($nilai >= 80 && $nilai <= 100) {
    //     $grade = "A";
    // }elseif ($nilai >= 75 && $nilai <= 79) {
    //     $grade = "B+";
    // }elseif ($nilai >= 70 && $nilai <= 74) {
    //     $grade = "B";
    // }elseif ($nilai >= 65 && $nilai <= 69) {
    //     $grade = "C+";
    // }elseif ($nilai >= 60 && $nilai <= 64) {
    //     $grade = "C";
    // }elseif ($nilai >= 50 && $nilai <= 59) {
    //     $grade = "D";
    // }elseif ($nilai < 50) {
    //     $grade = "E";
    // }
    // else {
    //     $grade = "Tidak ditemukan";
    // }
    // echo $grade;

    function grade($nilai){
        if ($nilai >= 80 && $nilai <= 100) {
            $grade = "A";
        }elseif ($nilai >= 75 && $nilai <= 79) {
            $grade = "B+";
        }elseif ($nilai >= 70 && $nilai <= 74) {
            $grade = "B";
        }elseif ($nilai >= 65 && $nilai <= 69) {
            $grade = "C+";
        }elseif ($nilai >= 60 && $nilai <= 64) {
            $grade = "C";
        }elseif ($nilai >= 50 && $nilai <= 59) {
            $grade = "D";
        }elseif ($nilai < 50) {
            $grade = "E";
        }
        else {
            $grade = "Tidak ditemukan";
        }
        return $grade;
    }

    ?>

    <form action="" method="post">
        <input type="number" placeholder="Input Nilai" name="nilai">
        <button name="grade">Grade</button>
    </form>

    <?php 
    if (@$_POST["nilai"]) {
    echo grade($_POST["nilai"])."<br>";

        if (grade($_POST["nilai"]) == "A") {
            echo "Sempurna";
        }

    }
     ?>

</body>
</html>