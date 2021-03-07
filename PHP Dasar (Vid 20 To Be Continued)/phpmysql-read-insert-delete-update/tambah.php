<?php
require 'function.php';

// cek apakah tombol udah di klik?
if (isset($_POST["submit"])) {
    // cek apakah ada error
    if (tambah($_POST)[0] > 0) {
        echo "<script>
        alert('Gema Berhasil Beli Mobil Baru');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "Gema Ga Jadi Beli Mobil Baru Data Gagal di Tambah";
        echo tambah($_POST)[1];
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