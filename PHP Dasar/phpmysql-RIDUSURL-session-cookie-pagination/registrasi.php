 

<?php
require 'function.php';
 if(isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "<script>alert('user baru berhasil di tambahkan')</script>";
    }

    else {
        echo mysqli_error($link);
    }
 }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>

    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password" autocomplete="new-password">
            </li>
            <li>
                <label for="password2">konfirmasi password</label>
                <input type="password" name="password2" id="password2" autocomplete="new-password">
            </li>
            <li>
            <button type="submmit" name="register">Register</button>
            </li>
        </ul>
    </form>


</body>

</html>