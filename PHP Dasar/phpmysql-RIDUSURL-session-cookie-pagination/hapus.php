<?php

session_start();

if (!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'function.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
    alert('Gema Berhasil Jual Mobil Baru');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "Gema Ga Jadi Jual Mobil Baru Data Gagal di Hapus";
    echo hapus($_POST)[1];
}

?>