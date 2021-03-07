<!-- variable superglobal adalah variable yang yang bisa diakses dimanapun -->
<!-- ada 7 -->
<!-- 
    $_GET (ini akan dibahas)
    $_POST (ini akan dibahas)
    $_REQUEST
    $_SERVER 
    $_SESSION (ini akan dibahas)
    $_ENV
    $_COOKIE (ini akan dibahas)
    -->

<!-- semuanya bertipe associative array -->

<?php 
var_dump($_GET); //secara default belum ada isinya
echo "<br>";
var_dump($_POST); //secara default belum ada isinya
echo "<br>";
var_dump($_SERVER); //secara default berisi informasi server
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

var_dump($_SERVER["HTTP_USER_AGENT"]);




?>