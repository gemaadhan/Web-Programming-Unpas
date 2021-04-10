<?php

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    


    public function __construct($judul = "Judul Default", $penulis = "Penulis Default", $penerbit = "Penerbit Default", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        //ingat harus pake this, karena kalo tanpa this php ga kenal ini variabel punya siapa (function scope)
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} | {$this->harga}";
        return $str;
    }
}

class Komik extends Produk
{

    //ini property khusus yang cuam ada di kelas komik
    public $halaman;

    //override constructor parent class Produk, jangan lupa tambahkan property khusus kelas komik (halaman
    public function __construct($judul = "Judul Default", $penulis = "Penulis Default", $penerbit = "Penerbit Default", $harga = 0, $halaman = 0)
    {
        // supaya kita ga ngisi property yang udah diisi di konstruktor kelas Produk, kita panggil aja si konstruktor produk
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // baru disini tambahin property spesifik nya
        $this->halaman = $halaman;
    }

    public function getInfoProduk()
    {
        // overriding, memanggil method nya si parent
        $str = "Komik : " . parent::getInfoProduk() . "  - {$this->halaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    //ini property khusus yang cuma ada di kelas Game
    public $waktumain;

    //override constructor parent class Produk, jangan lupa tambahkan property khusus kelas Game (waktu main)
    public function __construct($judul = "Judul Default", $penulis = "Penulis Default", $penerbit = "Penerbit Default", $harga = 0, $waktumain = 0) {
        
        // supaya kita ga ngisi property yang udah diisi di konstruktor kelas Produk, kita panggil aja si konstruktor produk
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // baru disini tambahin property spesifik nya
        $this->waktumain = $waktumain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktumain} Jam";
        return $str;
    }
}


class CetakInfoProduk
{
    //fungsi cetak hanya menerima parameter yang tipe data nya produk / class produk
    public function cetak(Produk $produk)
    {
        return "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    }
}


// $produk1 = new Produk();
// $produk1->judul = "FIFA 21";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->propertiyangbelumada = "hahaha";
// var_dump($produk2);

// $produk1 = new Produk("Naruto", "Masashi","Shonen Jump",30000);

// $produk2 = new Produk("Fifa 21", "Steve Hooks","EA Games", 700000);

// Jdi ceritanya, kita punya tipe produk nih... Buku sama Game. kita pengen nambahin property halaman untuk buku dan waktu main untuk game. jadi di kelas produk kita tambahkan property halaman dan waktu main, dan parameter nya ketika instansiasi jadi ga kece. 

// intansiasi dari kelas child

// liat parameter terakhir, kalo yang Game itu waktu main, kalo yang komik itu halaman
$game = new Game("Fifa 21", "Steve Hooks", "EA Games", 700000, 90);
$buku = new Komik("Naruto", "Masashi", "Shonen Jump", 30000, 150);


echo $game->getInfoProduk();
echo "<br>";
echo $buku->getInfoProduk();
