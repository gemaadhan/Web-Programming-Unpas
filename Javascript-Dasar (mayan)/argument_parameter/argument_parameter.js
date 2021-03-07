
// di dalam javascript jika argument lebih banyak dari parameter, maka argument kelebihannya akan di abaikan
var kali = function (a,b) {
    var hasilkali = a * b
    return hasilkali;
}

alert(kali(5,5,8));

// di dalam javascript jika argument nya kurang dari parameter, maka parameter terakhir akan bernilai undefined

function kurang(a,b) {
    var hasilkurang = a - b;
    return hasilkurang;
}

alert (kurang(6));


// variable arguments menyimpan nilai argument kedalam array 

function tambah() {
    var hasil = 0;
    for (var i = 0; i < arguments.length; i++) {
        hasil += arguments[i];
    }
    return hasil;
}

alert(tambah(1, 1, 1, 1, 5));
