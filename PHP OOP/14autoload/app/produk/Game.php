<?php
class Game extends Produk implements InfoProduk
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

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} | {$this->harga}";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->waktumain} Jam";
        return $str;
    }
}