<?php

// koneksi ke database
$link = mysqli_connect("localhost", "root", "", "gema's_net_worth");

function query($query)
{
    global $link;
    $result = mysqli_query($link, $query); //ini lemari
    $fetchassoc_rows = []; //bikin wadah
    while ($fetchassoc_row = mysqli_fetch_assoc($result)) {
        $fetchassoc_rows[] = $fetchassoc_row; //isi wadah nya baris per baris
    }
    return $fetchassoc_rows;
}

function tambah($data)
{

    global $link;
    $pabrikan = htmlspecialchars($data["pabrikan"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $warna = htmlspecialchars($data["warna"]);
    $bahan_bakar = htmlspecialchars($data["bahan_bakar"]);


    //upload gambar dulu
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    $query = "INSERT INTO cars VALUES ('','$pabrikan','$tahun','$jenis','$warna','$bahan_bakar','$gambar')";
    mysqli_query($link, $query);
    $kembalian = [];
    $kembalian[] = mysqli_affected_rows($link);
    $kembalian[] = mysqli_error($link);


    return $kembalian;
}


function upload()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('pilih gambar dulu')</script>";
        return false;
    }

    // cek apakah yang diupload gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namafile); //menghasilkan array nama dan ektensi
    $ekstensiGambar = strtolower(end($ekstensiGambar)); // ambil array yang terakhir, jadikan huruf kecil semua
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {  // menghasilkan true jika ada false jika ga ada
        echo "<script>alert('yang anda upload bukan gambar')</script>";
        return false;
    }

    //cek jika ukurannya terlalu besar dalam byte
    if ($ukuranfile > 1000000) {
        echo "<script>alert('ukuran gambar terlalu besar')</script>";
        return false;
    }

    //lolos pengecekan gambar siap diupload
    //generate nama gambar
    $namafileBaru = uniqid();
    $namafileBaru .= '.';
    $namafileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../img/' . $namafileBaru);
    return $namafileBaru;
}


function hapus($id)
{
    global $link;
    $query = "DELETE FROM cars WHERE id = $id";
    mysqli_query($link, $query);
    $kembalian = [];
    $kembalian[] = mysqli_affected_rows($link);
    $kembalian[] = mysqli_error($link);

    return $kembalian;
}

function ubah($data)
{
    global $link;
    $id = $data["id"];
    $pabrikan = htmlspecialchars($data["pabrikan"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $warna = htmlspecialchars($data["warna"]);
    $bahan_bakar = htmlspecialchars($data["bahan_bakar"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }



    $query = "UPDATE cars SET pabrikan='$pabrikan', tahun=$tahun, jenis='$jenis', warna='$warna', bahan_bakar='$bahan_bakar', gambar='$gambar' WHERE id=$id";
    mysqli_query($link, $query);
    $kembalian = [];
    $kembalian[] = mysqli_affected_rows($link);
    $kembalian[] = mysqli_error($link);


    return $kembalian;
}

function cari($keyword)
{
    $query = "SELECT * FROM cars WHERE pabrikan LIKE '%$keyword%' OR tahun LIKE '%$keyword%' OR jenis LIKE '%$keyword%' OR warna LIKE '%$keyword%' OR bahan_bakar LIKE '%$keyword%'";
    return query($query);
}

function registrasi($data)
{
    global $link;

    $username = strtolower(stripslashes($data["username"])); //menghilangkan backslash dan paksa huruf kecil
    $password = mysqli_real_escape_string($link, $data["password"]); //memperbolehkan menggunakan petik
    $password2 = mysqli_real_escape_string($link, $data["password2"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($link,"SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "<script>alert('username sudah ada')</script>";
        return false; 
    }
    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>alert('konfirmasi password tidak sesuai')</script>";
        return false; //supaay masuk ke else
    }


    // enkripsi passwordnya
    $password = password_hash($password, PASSWORD_DEFAULT); //hash algoritma nya PASSWORD_DEFAULT(akan berubah dinamis kalo ada cara pengamanan baru)
    
    //tambahka  user baru ke database
    mysqli_query($link, "INSERT INTO users VALUES('','$username','$password')");

    return mysqli_affected_rows($link);
}
