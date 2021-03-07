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
    $gambar = htmlspecialchars($data["gambar"]);

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
