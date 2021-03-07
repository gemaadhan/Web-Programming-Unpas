<?php
// ketika kita tembak localhost, dia akan cari index.php dulu kalo ga ada index.html baru kalo ga ada dia akan tampikan seluruh isi folde rnya


// STANDAR OUTPUT

// echo, print 
echo 'gema';
echo "<br>";
print "gema";
echo "<br>";

// untuk debugging
// print_r ini kusus mencetak isi array
// var_dump untuk melihat isi dari variable

print_r("gema");
echo "<br>";
var_dump("gema");
echo "<br>";

// menampilkan boolean
echo false; //tidak ditampilkan
echo true;

// menampilkan angka
echo "<br>";
echo 123;
echo "<br>";

// menggunakan petik di dalam petik
echo 'jum\'at';
echo "<br>";
?>
<!-- ================================================================== -->
<?php
$nama = "Adhan";
echo 'nama saya $nama';
echo '<br>';
echo "nama saya $nama"; // petik 2 bisa melakukan interpolasi petik satu ndak bisa
?>

<!-- MENULIS PHP DI DALAM SYNTAX HTML-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php echo "$nama"; ?>
    </h1>
    <p>
        <?php echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, vitae dolorum! Incidunt porro in ex expedita unde repudiandae, sint aut enim omnis. Vitae ut, minima perspiciatis ratione amet iure odit"; ?> </p>

    <!-- Menulis html di dalam syntax PHP (tidak disarankan) -->
    <?php echo "<h2>kakeane</h2>" ?>

</body>

</html>

<!-- operator aritmatika -->
<!-- + - * / -->
<?php
$x = 10;
$y = 20;
echo $x * $y;
echo '<br>';
echo $x + $y;
echo '<br>';
echo $x / $y;
echo '<br>';
echo $x - $y;
?>

<!-- penggabung string / concatenation -->
<?php $nama_depan = "gema"; 
$nama_belakang = "ramahana";
echo '<br>';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
?> 


<!-- operator assigment -->
<!-- = += -= *= /= %= .= -->

<?php
// =
$z = 20;
$z = 10;
echo $z;
echo '<br>';

// += podo karo $z = $z + 1

$z += 1;
echo $z;
echo '<br>';

// -= podo karo $z = $z - 1

$z -= 1;
echo $z;
echo '<br>';

// .= podo karo $nama . $nama . $nama;
$nama = "gema";
$nama .=" ";
$nama .="ramadhana";
echo $nama;
echo '<br>';

// operator perbandingan
var_dump(9 > 10);
echo '<br>';
var_dump(10 < 9);
echo '<br>';
var_dump(9 >= 9);
echo '<br>';
var_dump(9 == "9"); //kok gini ??????????????????
echo '<br>';
var_dump(9 != "9");
echo '<br>';

// operator identitas
// === & !== 
var_dump(9 === "9");
echo '<br>';
var_dump(9 !== "9");
echo '<br>';


// oporator logika
//  &&, ||, ! (not)
$x =20;
var_dump($x<20 || $x % 2 ==0);
?>

