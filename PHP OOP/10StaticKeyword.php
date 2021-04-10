<!-- KITA BISA MENGAKSES PEROPERTY DAN METHOD DALAM KONTEKS CLASS /TANPA INSTANSIASI DULU MENGGUNAKNA KEYWORD STATIC-->
<?php

class ContohStatic {

    public static $angka = 1;

    public static function halo() {
        // karena kita ga melakukan instansiasi kita ga pake this(merujuk ke object), gantinya kita memakai self
        return "Halo" . self::$angka++ . "Kali .";
    }


}


echo ContohStatic::$angka;
echo "<hr>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();


echo "<hr>";
// untuk apa static keyword
// member nya terika dengan kelas bukan object


// nilai static akan selalu tetap meskipun object di instansiasi berulang kali
class ContohNilaiTetap {
    public static $nomer = 1;
    public $number = 1;

    public function hi() {
        return "Hi" . self::$nomer++ . "kali <br>";
    }

    public function halo() {
        return "Halo" . $this->number++ . "kali <br>";
    }
}

echo "INI KETIKA KITA AKSES NILAI STATIC<br>";
echo "SETIAP INSTANSIASI BARU NILAI NYA TETAP DIPERTAHANKAN<br>";
$obj1 = new ContohNilaiTetap();
echo $obj1->hi();
echo $obj1->hi();
echo $obj1->hi();

$obj2= new ContohNilaiTetap();
echo $obj2->hi();
echo $obj2->hi();
echo $obj2->hi();

echo "INI KETIKA KITA AKSES NILAI BIASA<br>";
echo "SETIAP INSTANSIASI BARU NILAI DIRESET DARI AWAL<br>";

$obj3= new ContohNilaiTetap();
echo $obj3->halo();
echo $obj3->halo();
echo $obj3->halo();

$obj4= new ContohNilaiTetap();
echo $obj4->halo();
echo $obj4->halo();
echo $obj4->halo();

// DENGAN KEYWORD STATIC SEOLAH OLAH KODE KITA SEPERTI PROSEDURAL KARENA KITA BISA LANGSUNG AKSES METHOD / PROPERTY TANPA INSTANSIASI
// BISANYA DIGUNAKAN UNTUK MEMBUAT FUNGSI BANTUAN /HELPER
// DIGUNAKAN DI CLAS CLAS UTILITY PADA FRAMEWORK
