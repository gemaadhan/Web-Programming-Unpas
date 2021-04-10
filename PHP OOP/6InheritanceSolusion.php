<?php

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $halaman;
    public $waktumain;
    

    public function __construct($judul="Judul Default", $penulis="Penulis Default", $penerbit = "Penerbit Default", $harga=0, $halaman=0, $waktumain=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktumain = $waktumain;
        
    }

    public function getLabel()
    {
        //ingat harus pake this, karena kalo tanpa this php ga kenal ini variabel punya siapa (function scope)
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} | {$this->harga}";

        
        return $str;
    }
}

class Komik extends Produk {
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} | {$this->harga} - {$this->halaman} Halaman";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} | {$this->harga} - {$this->waktumain} Jam";
        return $str;
    }
}


class CetakInfoProduk {
    //fungsi cetak hanya menerima parameter yang tipe data nya produk / class produk
    public function cetak(produk $produk) {
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
$game = new Game("Fifa 21", "Steve Hooks","EA Games", 700000,0,90);
$buku = new Komik("Naruto", "Masashi","Shonen Jump",30000,150,0);


echo $game->getInfoProduk();
echo "<br>";
echo $buku->getInfoProduk();