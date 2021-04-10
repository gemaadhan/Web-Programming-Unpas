<?php

session_start();

if (!isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'function.php';

// cek apakah tombol udah di klik?
if (isset($_POST["submit"])) {

    // var_dump($_POST);
    // var_dump($_FILES);
    // die; //artinya setelah dijalankan, script yang bawah tidak akan di eksekusi

    // cek apakah ada error
    if (tambah($_POST)[0] > 0) {
        echo "<script>
        alert('Gema Berhasil Beli Mobil Baru');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "Gema Ga Jadi Beli Mobil Baru Data Gagal di Tambah";
        echo tambah($_POST)[1];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gema Beli Mobil Lagi</title>
</head>

<body>
    <h1>Gema Beli Mobil Lagi</h1>
    <!-- enctype untuk mengelola file, sedangkan method untuk mengelola string -->
    <!-- kemudian input type file (gambar) akan dikelola superglobal $_FILES -->

    <!-- array(6) {
    ["pabrikan"]=>
    string(5) "Honda"
    ["tahun"]=>
    string(4) "2020"
    ["jenis"]=>
    string(5) "Civic"
    ["warna"]=>
    string(5) "Hitam"
    ["bahan_bakar"]=>
    string(6) "bensin"
    ["submit"]=>
    string(0) ""
    }
    array(1) {
    ["gambar"]=> //nih jadi pidnah ke sini
    array(5) {
    ["name"]=>
    string(58) "108868478_142a4ede-d081-43c6-9b4f-961ea90cbb3d_700_700.jpg" 
    ["type"]=>
    string(10) "image/jpeg"
    ["tmp_name"]=>
    string(24) "C:\xampp\tmp\php3875.tmp" //folder penyimpanan sementara, nanti kita pindah dengan fungsi move_uploaded_file()
    ["error"]=>
    int(0) //kalo nol artinya tidak ada error, selain 0 pasti ada error.
    ["size"]=>
    int(2056)
    }
    } -->

    <form action="" method="post" enctype="multipart/form-data">
        
            
                <label for="pabrikan">Pabrikan : </label>
                <input type="text" id="pabrikan" name="pabrikan">
            
            
                
        
                <button type="submit" name="submit">Tuku Gem</button>
            
        
    </form>
</body>

</html>