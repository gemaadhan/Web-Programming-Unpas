<?php

// untuk membuat konstanta kita bisa menggunakan define atau const
// define tidak bisa disimpan di dalam kelas
// sedangkan const bisa dimasukkan ke dalam kelas
define('Phi', 3.14);

echo Phi;

const GRAVITASI = 9.8;

echo GRAVITASI;

?>

<?php
class Coba {
    const GRAVITASI = 9.8;
}

//cara memanggil konstanta
echo Coba::GRAVITASI;


?>
<hr>
<?php 
// magic constanta

echo __LINE__ . "<br>";
echo __FILE__ . "<br>";

function hahaha(){
    return __FUNCTION__;
}
echo hahaha() . "<br>";

?>

