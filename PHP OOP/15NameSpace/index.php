<!-- pengelompokkan kelas -->
<!-- php tidak mengijinkan kita membuat nama class yang sama  -->
<!-- gimana kalau kita bekerja tim ? kita harus tau kan mereka bikin kelas nya nama nya apa -->
<!-- atau kita gunakan library orang lain apakah namanya sama -->
<!-- maka ada teknik namespace untuk membedakan kelas jika ada yang sama namanya -->
<?php



require_once 'App/init.php';

// $game = new Game("Fifa 21", "Steve Hooks", "EA Games", 700000, 90);
// $buku = new Komik("Naruto", "Masashi", "Shonen Jump", 30000, 150);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($game);
// $cetakProduk->tambahProduk($buku);

// echo $cetakProduk->cetak();

use App\service\User as serviceuser;
use App\produk\User as produkuser;

new serviceuser();
new produkuser();