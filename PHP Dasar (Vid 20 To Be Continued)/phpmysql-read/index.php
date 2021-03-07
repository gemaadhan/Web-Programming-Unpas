<?php
require 'function.php';

$records = query("SELECT * FROM cars");




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
        
        <?php $i=1 ?>
        <?php foreach($records as $record) : ?>
            
            <tr>
                <td><?php echo $i ?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><?php echo $record["pabrikan"]; ?></td>
                <td><?php echo $record["tahun"]; ?></td>
                <td><?php echo $record["jenis"]; ?></td>
                <td><?php echo $record["warna"]; ?></td>
                <td><?php echo $record["bahan_bakar"]; ?></td>
                <td><img src="../img/<?php echo $record["gambar"]; ?>" alt=""></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ; ?>
    </table>
</body>

</html>