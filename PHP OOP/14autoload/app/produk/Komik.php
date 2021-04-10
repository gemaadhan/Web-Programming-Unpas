<?php

class Komik extends Produk implements InfoProduk
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

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} | {$this->harga}";
        return $str;
    }

    public function getInfoProduk()
    {
        // overriding, memanggil method nya si parent
        $str = "Komik : " . $this->getInfo() . "  - {$this->halaman} Halaman";
        return $str;
    }
}