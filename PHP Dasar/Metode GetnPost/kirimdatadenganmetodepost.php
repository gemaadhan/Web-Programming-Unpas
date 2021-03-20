<!-- Untuk menggunakan metode post kita harus menggunakan form -->
<!-- walapun form juga bisa meggunakan metode get -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim data dengan post</title>
</head>

<body>
    <!-- atribute action dan method harus ada, jika tidak ditulis default value untuk action adalah halaman ini sendiri dan default value untuk method adalah get -->
    <!-- action adalah halaman yang akan menerima data menggunakan superglobal $_get atau $_post -->
    <form action="superglobal$_post.php" method="post">
        <label for="username">Username</label>
        <!-- attribute name digunakan sebagai key di variable superglobal -->
        <input type="text" name="username" id="username">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>


</body>

</html>