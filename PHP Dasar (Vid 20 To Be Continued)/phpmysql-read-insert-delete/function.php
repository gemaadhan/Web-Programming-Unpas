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
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO cars VALUES ('','$pabrikan','$tahun','$jenis','$warna','$bahan_bakar','$gambar')";
    mysqli_query($link, $query);
    $kembalian = [];
    $kembalian[] = mysqli_affected_rows($link);
    $kembalian[] = mysqli_error($link);

    
    return $kembalian;
    
}

function hapus($id) {
    global $link;
    $query = "DELETE FROM cars WHERE id = $id";
    mysqli_query($link,$query);
    $kembalian = [];
    $kembalian[] = mysqli_affected_rows($link);
    $kembalian[] = mysqli_error($link);
    
    return $kembalian;
}
