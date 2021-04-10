<?php

class Produk
{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul="Judul Default", $penulis="Penulis Default", $penerbit = "Penerbit Default", $harga=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        //ingat harus pake this, karena kalo tanpa this php ga kenal ini variabel punya siapa (function scope)
        return "$this->penulis, $this->harga";
    }
}



// $produk1 = new Produk();
// $produk1->judul = "FIFA 21";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->propertiyangbelumada = "hahaha";
// var_dump($produk2);

$produk1 = new Produk("Naruto", "Masashi","Shonen Jump",30000);

$produk2 = new Produk("Fifa 21", "Steve Hooks","EA Games", 700000);

$produk3 = new Produk();


echo "komik : " . $produk1->getLabel();

echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";
echo "kosong : " . $produk3->getLabel();