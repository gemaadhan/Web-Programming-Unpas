<?php
// array adaalh variable yang bisa menampung nilai lebih dari 1.
// array adalah pasangan key dan value.
// cara membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari"];

// element pada arrray boleh menggunakan tipe data yang berbeda
$arr = [123, "gema", false];

// menampilkan array dalam layar
// bisa pakai vardump, cuma dipakai saat debug
var_dump($hari);
echo "<br>";
// print r cuma dipakai saat debug
print_r($bulan);
echo "<br>";
// menampilkan 1 elemen array 
echo $arr[0];
echo "<br>";

// menambahkan elemen baru pada array
// penulisan dibawah mirip penggunaan push pada javascipt, menambahkan elemen baru di akhir
var_dump($hari);
echo "<br>";
$hari[] = "Kamis";
$hari[] = "Jum'at";
var_dump($hari);
echo "<br>";
?>

<!--menampilkan array untuk user  -->
<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- menggunakan for -->
    <?php for ($i = 0; $i < count($numbers); $i++) { ?>
        <div class="kotak"><?php echo $numbers[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- menggunakan foreach -->

    <?php foreach ($numbers as $number) : ?>
        <div class="kotak"><?=  $number; ?></div>
    <?php endforeach; ?>





</body>

</html>