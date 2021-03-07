<?php
require 'function.php';
// ambil data di url

$id = $_GET["id"];
$records = query("SELECT * FROM cars WHERE id=$id")[0];

// cek apakah tombol udah di klik?
if (isset($_POST["submit"])) {
    // cek apakah ada error
    if (ubah($_POST)[0] > 0) {
        echo "<script>
        alert('Gema Berhasil Ubah Data Mobil Baru');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "Gema Ga Jadi Ubah Data Mobil Baru Data Gagal di ubah";
        echo ubah($_POST)[1];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gema Ubah Data Mobil</title>
</head>

<body>
    <h1>Gema Ubah Data Mobil</h1>
    <form action="" method="post">
        <ul>

            <input type="hidden" name="id" value="<?php echo $records["id"]; ?>">

            <li>
                <label for="pabrikan">Pabrikan : </label>
                <input type="text" id="pabrikan" name="pabrikan" value="<?php echo $records["pabrikan"]; ?>">
            </li>
            <li>
                <label for="tahun">Tahun : </label>
                <input type="text" id="tahun" name="tahun" value="<?php echo $records["tahun"]; ?>">
            </li>
            <li>
                <label for="jenis">Jenis : </label>
                <input type="text" id="jenis" name="jenis" value="<?php echo $records["jenis"]; ?>">
            </li>
            <li>
                <label for="warna">Warna : </label>
                <input type="text" id="warna" name="warna" value="<?php echo $records["warna"]; ?>">
            </li>
            <li>
                <label for="bahan_bakar">Bahan Bakar : </label>
                <input type="text" id="bahan_bakar" name="bahan_bakar" value="<?php echo $records["bahan_bakar"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" id="gambar" name="gambar" value="<?php echo $records["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Tuku Gem</button>
            </li>
        </ul>
    </form>
</body>

</html>