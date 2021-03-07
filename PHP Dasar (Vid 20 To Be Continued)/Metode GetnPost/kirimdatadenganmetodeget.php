<?php

$mobilnyagema = [
    [
        "pabrikan" => "mitsubishi",
        "tahun" => 2021,
        "jenis" => "pajero",
        "warna" => "putih",
        "bahan bakar" => "bensin"

    ],
    [
        "pabrikan" => "suzuki",
        "tahun" => 2020,
        "jenis" => "jimny",
        "warna" => "hijau muda",
        "bahan bakar" => "bensin"
    ],
    [
        "pabrikan" => "honda",
        "tahun" => 2017,
        "jenis" => "jazz",
        "warna" => "putih",
        "bahan bakar" => "bensin"
    ]
]

?>
<!-- superglobal $_GET -->
<!-- metode request GET adalah metode pengiriman data melalui URL -->
<!-- jadi penjelasannya gini -->
<!-- data yang dikirimkan METODE request GET akan diterima oleh variabel superglobal $_GET -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Daftar Mobilnya Gema</h1>
<ol>
    <?php foreach ($mobilnyagema as $mobil) : ?>
        <li>
            <a href="superglobal$_get.php?pabrikan=<?php echo $mobil["pabrikan"]; ?>&tahun=<?php echo $mobil["tahun"]; ?>&jenis=<?php echo $mobil["jenis"]; ?>&warna=<?php echo $mobil["warna"]; ?>&bahan_bakar=<?php echo $mobil["bahan bakar"]; ?>"><?php echo $mobil["pabrikan"] . " " . $mobil["jenis"]; ?></a>
        </li>
    <?php endforeach; ?>
</ol>

<body>


</body>

</html>