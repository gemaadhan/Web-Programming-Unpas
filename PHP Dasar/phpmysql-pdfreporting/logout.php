<?php

session_start();
$_SESSION = []; //mengosongi array
session_unset(); //jaga jaga kalo destroy ga works
session_destroy(); 

// untuk hapus cookie, kita set valuenya jadi kosong, trus waktunya kita bikin waktu yang sudah lewat
setcookie('id','', time()-3600);
setcookie('key','', time()-3600);


header("Location: login.php");
exit;

?>