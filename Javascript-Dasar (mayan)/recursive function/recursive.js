// fungsi yang memanggil dirinya sendiri.

// for (var i = 10; i >=1; i--){
//     console.log(i)
// }

// function tampilangka(n) {
//     if (n == 0){ 
//         return;
//     } // ini namanya base case atau kondisi akhir
//     console.log(n);
//     return tampilangka(n-1);
// }

// tampilangka(10);

function faktorial(n) {
    if (n == 0) return 1;
    return n * faktorial(n-1);
}

console.log(faktorial(7));

// semua rekursif bisa dibuat rekursif, tapi tidak sebalikny

// kegunaan fungsi rekursif
// menggantikan looping
// fibonacci
// pencarian dan penulusuran struktur data list dan tree
// bahasa yang tidak memiliki pengulangan