<?php
// cek apakah tombol submit udah di tekan
if (isset($_POST["submit"])) {

    //cek username dan passowrd
    if ($_POST["username"] === "admin" && $_POST["password"] === "123") {


        // jika benar redirec ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah bikin variabel error isinya true
        $error = true;
    }
}

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



    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <h1>username dan password salah</h1>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">username : </label>
        <input type="text" name="username" id="username">
        <label for="password">password : </label>
        <input type="password" name="password" id="password">
        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>