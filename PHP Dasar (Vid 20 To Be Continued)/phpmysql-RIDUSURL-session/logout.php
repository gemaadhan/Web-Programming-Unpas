<?php

session_start();
$_SESSION = []; //mengosongi array
session_unset(); //jaga jaga kalo destroy ga works
session_destroy(); 

header("Location: login.php");
exit;

?>