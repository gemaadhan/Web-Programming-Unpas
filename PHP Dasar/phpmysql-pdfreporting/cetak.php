<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'function.php';
$records = query("SELECT * FROM cars");


$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
    <style>
    img {
        width: 200px;
    }
    </style>
    
</head>

<body>
    <h1>Cetak Mobil Gema</h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Pabrikan</th>
                <th>Tahun</th>
                <th>Jenis</th>
                <th>Warna</th>
                <th>Bahan Bakar</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>';

$i = 1;
foreach ($records as $record) {
    $html .= '<tr>
        <td>' . $i++ . '</td>
        <td>' . $record["pabrikan"] . '</td>
        <td>' . $record["tahun"] . '</td>
        <td>' . $record["jenis"] . '</td>
        <td>' . $record["warna"] . '</td>
        <td>' . $record["bahan_bakar"] . '</td>
        <td> <img src="../img/' . $record["gambar"] . '"></td>
    </tr>';
}


$html .= '</tbody> </table>
</body>

</html>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('cetak mobilku.pdf', 'I');
