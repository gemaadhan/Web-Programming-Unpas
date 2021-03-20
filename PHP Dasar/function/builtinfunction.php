<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- fungsi date -->
    <?php
    echo nl2br(date("l \n")); //menampilkan hari

    echo nl2br(date("d \n")); //tanggal
    echo nl2br(date("j \n")); //tanggal tanpa leading 0
    echo nl2br(date("m \n")); //bulan
    echo nl2br(date("M \n")); //bulan dalam bentuk nama
    echo nl2br(date("l, d-M-y \n"));
    ?>

    <!-- time -->
    <?php
    date_default_timezone_set('Asia/Jakarta');
    echo date_default_timezone_get();
    echo time();
    echo "<br>"; //UNIX time stamp / EPOCH time. detik yang sudah berlalu sejak 1 januari 1970 sampai saat ini. 

    //tampilkan hari di saat ini time()
    echo nl2br(date("l\n", time()));

    //tampilkan tanggal 100 hari kedepan. tambah time() dengan 100 hari dalam detik
    echo nl2br(date("l, d-M-y h i s", time() + 60 * 60 * 24 * 100));

    // tampilkan detaul hari ini
    echo nl2br(date("l, d-M-y h i s", time()));
    ?>

    <!-- mktime -->
    <!-- untuk membuat time stamp dari waktu yang kita tentuykan -->
    <!-- mktime punya 6 parameter (jam, menit, detik, bulan, tanggal, tahun) -->
    <!-- hari apa aku lahir -->
    <?php
    echo date("l", mktime(0, 0, 0, 02, 15, 1994));
    ?>

    <!-- strtotime -->
    <!-- mengubah string menjadi unix -->
    <?php
    echo strtotime("15 Feb 1994");
    ?>
</body>

</html>
<!-- // php.net/manual/funcref.php -->