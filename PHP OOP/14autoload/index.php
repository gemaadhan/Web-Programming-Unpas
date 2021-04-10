<?php

require_once 'App/init.php';

$game = new Game("Fifa 21", "Steve Hooks", "EA Games", 700000, 90);
$buku = new Komik("Naruto", "Masashi", "Shonen Jump", 30000, 150);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($game);
$cetakProduk->tambahProduk($buku);

echo $cetakProduk->cetak();