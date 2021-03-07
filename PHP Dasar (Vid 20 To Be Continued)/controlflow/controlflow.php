<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-abu {
            background-color: silver;
        }

        .warna-biru {
            background-color: blue;
        }
    </style>
</head>

<body>
    <?php
    // pengulangan
    // for
    for ($i = 0; $i < 10; ++$i) {
        echo $i . '<br>';
    }
    // while
    $i = 0;
    while ($i < 10) {
        echo $i . '<br>';
        ++$i;
    }

    // do while
    // akan menjalankan minimal 1 kali perintah ketika kondisinya false.
    do {
        echo $i . '<br>';
        ++$i;
    } while ($i < 20);
    ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; ++$i) {
            echo '<tr>';
            for ($j = 1; $j <= 3; ++$j) {
                echo "<td>$i,$j</td>";
            }
            echo '</tr>';
        }

        ?>

    </table>

    <!-- memisahkan php dan html -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 0; $i <= 3; ++$i) : ?>
            <!-- buka -->
            <tr>
                <?php for ($j = 0; $j <= 9; ++$j) : ?>
                    <!-- buka -->
                    <td><?php echo $i, $j; ?></td>
                <?php endfor; ?>
                <!-- tutup -->

            </tr>
        <?php endfor; ?>
        <!-- tutup -->
    </table>

    <?php
    $u = 40;
    if ($u < 40) {
        echo 'kuran benar';
    } elseif ($u === 40) {
        echo 'bingo';
    } else {
        echo 'salah';
    }

    ?>
    <!-- MEMADUKAN PENGKONDISIAN PADA TABEL -->
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ($i = 1; $i <= 5; ++$i) : ?>
            <?php if ($i % 2 === 1) : ?>
                <tr class="warna-abu">
                <?php else : ?>
                <tr>
                <?php endif; ?>

                <?php for ($j = 1; $j <= 10; ++$j) : ?>

                    <td><?php echo "$i, $j"; ?></td>

                <?php endfor; ?>

                </tr>
            <?php endfor; ?>

    </table>


</body>

</html>