<?php
session_start();
require 'function.php';

//cek cookie jika masih ada cookie.. set session nya true..sehingga ketika close browser walaupun session nya udah ga ada, kalo cookie nya masih ada, dia akan membangkikan session lagi
if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //kita cocokan username nya si id dengan key (username yang di hash)
    $result = mysqli_query($link, "SELECT username FROM users WHERE id=$id");
    $records = mysqli_fetch_assoc($result);

    if ($key === hash('sha256',$records['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
} //biar ga bisa ke halaman login kalo sudah login


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

            //cek remember me
            if (isset($_POST["remember"])) {
                //buat cookie id dan key(dapat dari username yang di hash)
                setcookie('id',$records['id'], time()+60);
                setcookie('key',hash('sha256', $records['username']),time()+60);
            }

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

                <input type="checkbox" id="remember" name="remember">
                <label for="remember">rememberme</label>
            </li>
            <li>
                <button type="submit" name="login">Masuk</button>
            </li>
        </ul>

    </form>
</body>

</html>