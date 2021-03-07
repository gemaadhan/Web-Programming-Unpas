<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
} //biar ga bisa ke halaman login kalo sudah login

require 'function.php';
if (isset($_POST["login"])) {



    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($link, "SELECT * FROM users WHERE username='$username'");



    if (mysqli_num_rows($result) === 1) { //akan mengembalikan berapa banyak baris dari hasil query
        //cek password
        $records = mysqli_fetch_assoc($result);
        if (password_verify($password, $records["password"])) //parameter nya adalah password yang dimasukkan, password yang ada di dalam db
        {
            // SET SESSION
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit; //supaya berhenti ga diterusin kode di bawahnya
        }
    }
    $error = true;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>

    <?php if (isset($error)) : ?>
        <p style="font-style:italic;">Username / Password salah</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocapitalize="off">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>
</body>

</html>