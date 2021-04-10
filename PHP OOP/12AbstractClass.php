<!-- VISIBILITY DIGUNAKAN UNTUK MEMBATASI HAK AKSES KEPADA SEBUAH METHOD ATAU PROPERTY -->
<!-- VISIBILITY ADA 3, PUBLIC (Bisa Diakses Dimanapun), Protected(Hanya bisa diakses dari dalam kelas dan turunannya), Private(hanya bisa diakses di dalam kelas saja) -->
<!-- ideal nya property tidak boleh langsung di akses dari luar(gunakan visibility selain public), kita perlu membuat setter dan getter untuk mengisi dan menampilan sebuah property -->




<?php

abstract class Produk
{
    private $judul, $penulis, $penerbit, $harga, $diskon;





    public function __construct($judul = "Judul Default", $penulis = "Penulis Default", $penerbit = "Penerbit Default", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function setJudul($judul)
    {

        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {

        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {

        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }






    public function getLabel()
    {
        //ingat harus pake this, karena kalo tanpa this php ga kenal ini variabel punya siapa (function scope)
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();


    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} | {$this->harga}";
        return $str;
    }

    public function setHarga($harga)
    {

        $this->harga = $harga;
    }


    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
        $str = "Komik : " . $this->getInfo() . "  - {$this->halaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    //ini property khusus yang cuma ada di kelas Game
    public $waktumain;

    //override constructor parent class Produk, jangan lupa tambahkan property khusus kelas Game (waktu main)
    public function __construct($judul = "Judul Default", $penulis = "Penulis Default", $penerbit = "Penerbit Default", $harga = 0, $waktumain = 0)
    {

        // supaya kita ga ngisi property yang udah diisi di konstruktor kelas Produk, kita panggil aja si konstruktor produk
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // baru disini tambahin property spesifik nya
        $this->waktumain = $waktumain;
    }



    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->waktumain} Jam";
        return $str;
    }
}


class CetakInfoProduk
{

    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        
        $str = "Daftar Produk : <br>";
        foreach($this->daftarProduk as $p) {
            $str .= " - {$p->getInfoProduk()} <br>";
        }
        return $str;
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

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($game);
$cetakProduk->tambahProduk($buku);

echo $cetakProduk->cetak();
