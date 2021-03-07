<?php 
// koneksi ke database
$link = mysqli_connect("localhost", "root", "", "gema's_net_worth");

function query($query){
    global $link;
    $result = mysqli_query($link, $query); //ini lemari
    $fetchassoc_rows = []; //bikin wadah
    while ($fetchassoc_row = mysqli_fetch_assoc($result)) {
        $fetchassoc_rows[] = $fetchassoc_row; //isi wadah nya baris per baris
    }
    return $fetchassoc_rows;
}