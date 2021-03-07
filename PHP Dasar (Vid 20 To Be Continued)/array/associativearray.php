<?php
// array associative
// sama seperti array
// kecuali key nya adalah string yang kita buat sendiri

$students = [
    [
        "nama" => "gema nadia ramadhana",
        "nim" => 21120112130040,
        "email" => "gemaadhan@gmail.com",
        "jurusan" => "siskom",
        "foto" => "gema.png"
    ],
    [
        "nama" => "hafiz aga",
        "nim" => 21120112130041,
        "email" => "hafizaga@gmail.com",
        "jurusan" => "plano",
        "foto" => "aga.png"
    ],
    [
        "nama" => "quaneisha bilqis",
        "nim" => 21120112130042,
        "email" => "bilqis@gmail.com",
        "jurusan" => "arsitek",
        "foto" => "bilqis.png"
    ],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($students as $student) : ?>
        <ol>
            <li>
                <img src="../img/<?php echo $student["foto"]; ?>" alt="">
            </li>
            <li><?= $student["nama"] ?></li>
            <li><?= $student["nim"] ?></li>
            <li><?= $student["email"] ?></li>
            <li><?= $student["jurusan"] ?></li>
        </ol>
    <?php endforeach; ?>

</body>

</html>