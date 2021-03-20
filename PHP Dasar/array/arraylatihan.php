<?php
$mahasiswa = ["gema nadia ramadhana", 211202112130040, "teknik komputer"];

$students = [
    ["gema nadia ramadhana", 211202112130040, "teknik komputer"],
    ["hafiz aga altamis", 211202112130041, "teknik planologi"]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Array</title>
</head>

<body>

<!-- kita keluarkan elemen array sebagai detailmhs -->
    <ol>
        <?php foreach ($mahasiswa as $detailmhs) : ?>

            <li><?php echo $detailmhs; ?></li>

        <?php endforeach; ?>
    </ol>

    



    <!-- kita keluarkan dulu array didalam students sebagai student lalu kita keluarkan elemen student sebgai detailstudent -->

    <?php foreach ($students as $student) : ?>
        <ol>
            <?php foreach ($student as $detalstudent) : ?>

                <li><?php echo $detalstudent; ?></li>

            <?php endforeach; ?>
        </ol>
    <?php endforeach; ?>

<!-- atau kita bisa keluarkan array dari array students sebagai student, nah nanti panggil elemen student satu satu dengan index nya -->

    <?php foreach ($students as $student) : ?>
        <ol>
            

                <li><?php echo $student[0]; ?></li>
                <li><?php echo $student[1]; ?></li>
                <li><?php echo $student[2]; ?></li>


           
        </ol>
    <?php endforeach; ?>
    
</body>

</html>