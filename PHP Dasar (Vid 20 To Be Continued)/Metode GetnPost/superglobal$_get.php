<?php

// isset mengecek apakah sebuah variabel sudah di set / dibikin
// tambah not depannya, berarti kalo variabel tersebut belum pernha dibikin
if (
    !isset($_GET["pabrikan"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["jenis"]) ||
    !isset($_GET["warna"]) ||
    !isset($_GET["bahan_bakar"])
) {
    // redirect
    header("Location: kirimdatadenganmetodeget.php");
    exit; //agar script dibawahnya tidak di eksekusi
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Daftar Mobilnya Gema</h1>

    <ul>
        <li><?php echo $_GET["pabrikan"]; ?></li>
        <li><?php echo $_GET["tahun"]; ?></li>
        <li><?php echo $_GET["jenis"]; ?></li>
        <li><?php echo $_GET["warna"]; ?></li>
        <li><?php echo $_GET["bahan_bakar"]; ?></li>
    </ul>

    <a href="kirimdatadenganmetodeget.php">Balik</a>
</body>

</html>