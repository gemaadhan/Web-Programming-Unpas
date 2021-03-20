<?php

//x dan y adalah variable local untuk halaman ini
$x = 10;
$y = 20;
function tampilx()
{
    return $x;
}

function tampily()
{
    $y = 30; //variable local untuk function ituy saja
    return $y;
}

echo $x;
echo "<br>";
echo tampilx(); //akan tampil undefined error karena $x diluar fungsi tidak dikenali oleh $x di dalam fungsi

echo "<br>";
echo $y;

echo "<br>";
echo tampily();

echo "<br>";


function tampilxdanyglobal()
{ //cari variabel x dan y di luar fungsi
    global $x;
    global $y;

    echo "$x dan $y";
}

tampilxdanyglobal();


