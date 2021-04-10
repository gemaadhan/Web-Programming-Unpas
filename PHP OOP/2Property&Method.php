<?php

class Produk
{
    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "penerbit";
    public $harga = 0;

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

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mashasi";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Fifa 21";
$produk4->penulis = "Steve Hooks";
$produk4->penerbit = "EA Games";
$produk4->harga = 700000;

echo "komik : " . $produk3->getLabel();

echo "<br>";
echo "game : " . $produk4->getLabel();
