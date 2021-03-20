<?php
// konek ke database
$link = mysqli_connect("localhost", "root", "", "gema's_net_worth");

// cek apakah tombol udah di klik?
if (isset($_POST["submit"])) {
    $pabrikan = $_POST["pabrikan"];
    $tahun = $_POST["tahun"];
    $jenis = $_POST["jenis"];
    $warna = $_POST["warna"];
    $bahan_bakar = $_POST["bahan_bakar"];
    $gambar = $_POST["gambar"];


    $query = "INSERT INTO cars VALUES ('','$pabrikan','$tahun','$jenis','$warna','$bahan_bakar','$gambar')";


    mysqli_query($link, $query);

    // cek apakah ada error
    

    if (mysqli_affected_rows($link) > 0) {
        echo "Gema Jadi Beli Mobil Baru";
    }
    else {
        echo "Gema Gagal Beli Mobil";
        echo "<br>";
        echo mysqli_error($link);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gema Beli Mobil Lagi</title>
</head>

<body>
    <h1>Gema Beli Mobil Lagi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="pabrikan">Pabrikan : </label>
                <input type="text" id="pabrikan" name="pabrikan">
            </li>
            <li>
                <label for="tahun">Tahun : </label>
                <input type="text" id="tahun" name="tahun">
            </li>
            <li>
                <label for="jenis">Jenis : </label>
                <input type="text" id="jenis" name="jenis">
            </li>
            <li>
                <label for="warna">Warna : </label>
                <input type="text" id="warna" name="warna">
            </li>
            <li>
                <label for="bahan_bakar">Bahan Bakar : </label>
                <input type="text" id="bahan_bakar" name="bahan_bakar">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" id="gambar" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tuku Gem</button>
            </li>
        </ul>
    </form>
</body>

</html>