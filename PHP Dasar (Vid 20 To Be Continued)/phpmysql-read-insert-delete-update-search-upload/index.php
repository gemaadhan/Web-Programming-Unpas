<?php
require 'function.php';

$records = query("SELECT * FROM cars ORDER BY id DESC"); //menampilkan dari yang terbaru, ASC kebalikannya

// saat page di load gunakan records yang atas
//tombol cari diklik
// gunakan records yang bawah
if (isset($_POST["cari"])) {
    $records = cari($_POST["keyword"]);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        img {
            width: 200px;
        }
    </style>
</head>

<body>


    <h1>Gema's Cars</h1>
    <a href="tambah.php">Gema Beli Mobil Lagi</a>
    <br>
    <br>
    <form action="" method="post">


        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Pabrikan</th>
            <th>Tahun</th>
            <th>Jenis</th>
            <th>Warna</th>
            <th>Bahan Bakar</th>
            <th>Gambar</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($records as $record) : ?>

            <tr>
                <td><?php echo $i ?></td>
                <td>
                    <a href="ubah.php?id=<?php echo $record["id"]; ?>">ubah</a>
                    <a href="hapus.php?id=<?php echo $record["id"]; ?>" onclick="return confirm('yakin');">hapus</a>
                </td>
                <td><?php echo $record["pabrikan"]; ?></td>
                <td><?php echo $record["tahun"]; ?></td>
                <td><?php echo $record["jenis"]; ?></td>
                <td><?php echo $record["warna"]; ?></td>
                <td><?php echo $record["bahan_bakar"]; ?></td>
                <td><img src="../img/<?php echo $record["gambar"]; ?>" alt=""></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>