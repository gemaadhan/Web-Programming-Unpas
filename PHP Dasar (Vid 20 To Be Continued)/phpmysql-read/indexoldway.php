<?php
// koneksi ke database
$link = mysqli_connect("localhost", "root", "", "gema's_net_worth");

// ambil data dari tabel mahasiswa / query datany
$result = mysqli_query($link, "SELECT * FROM cars"); //jika berhasil fungsi akan menjalankan query dan mengembalikan nilai true, jika gagal query tidak dijalankan dan mengembalikan false. result analoginya seperti kita bawa lemari baju

// if (!$result) {
//     echo mysqli_error($link);
// }

// ambil baju dari lemari, ada 4 cara
// mysqli_fetch_row(), mengembalikan array numeric
// $fetchrow = mysqli_fetch_row($result);
// var_dump($fetchrow);
// var_dump($fetchrow[4]);


// // mysqli_fetch_assoc(), mengembalikan array associative
// $fetchassoc = mysqli_fetch_assoc($result);
// var_dump($fetchassoc);
// var_dump($fetchassoc["tahun"]);

// // mysqli_fetch_array(), mengembalikan keduanya numeric dan assoc, data yang disajikan jadi double, jadi berat
// $fetcharray = mysqli_fetch_array($result);
// var_dump($fetcharray);
// var_dump($fetcharray["tahun"]);
// var_dump($fetcharray[2]);

// // mysqli_fetch_object()
// $fetchobject = mysqli_fetch_object($result);
// var_dump($fetchobject);
// var_dump($fetchobject->warna);




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
    <?php if (!$result) : ?>
        <h1><?php echo mysqli_error($link); ?></h1>
    <?php endif; ?>

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
        <?php while ($fetchassoc_row = mysqli_fetch_assoc($result)) : ?>
            
            <tr>
                <td><?php echo $i ?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><?php echo $fetchassoc_row["pabrikan"]; ?></td>
                <td><?php echo $fetchassoc_row["tahun"]; ?></td>
                <td><?php echo $fetchassoc_row["jenis"]; ?></td>
                <td><?php echo $fetchassoc_row["warna"]; ?></td>
                <td><?php echo $fetchassoc_row["bahan_bakar"]; ?></td>
                <td><img src="../img/<?php echo $fetchassoc_row["gambar"]; ?>" alt=""></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile ; ?>
    </table>
</body>

</html>