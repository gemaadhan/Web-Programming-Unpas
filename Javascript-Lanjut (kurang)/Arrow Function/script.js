//arrow function adalah cara membuat function expression secara lebih ringkas. 

//ini contoh function expression
const tampilNama = function (nama) {
    return `Halo, ${nama} ini adalah bentuk function expression`;
}
console.log (tampilNama('gema'));

//sekarang kita rubah bentuk nya menjadi arrow function dengan 1 parameter
const tampilNamaArrowFunction = (nama) => {return `Halo, ${nama}, ini adalah bentuk dari arrow function`;}

console.log(tampilNamaArrowFunction(`gema`));

//sekarang kita rubah bentuk nya menjadi arrow function dengan 1 parameter
const tampilNamaArrowFunction2Parameter = (nama,waktu) => {return `Selamat ${waktu} ${nama}, ini adalah bentuk dari arrow function dengan 2 parameter`;}

console.log(tampilNamaArrowFunction2Parameter(`gema`,'siang'));

//sebenarnya jika parameter nya 1 kita tidak perlu menambahkan kurung, dan jika fungsinya hanya mengandung 'return' saja, kita ga perlu menuliskan return dan kurung kurawal. sebutannya implisit return
const tampilNamaRingkas = nama => `Halo, ${nama} ini adalah bentuk sangat ringkas dari arrow function` ;
console.log (tampilNamaRingkas(`gema`));

// kalau tanpa parameter sama sekali tanda kurung harus tetap ditulis 
const tampilNamaTanpaParameter = () => `Halo ini fungsi arrow tanpa parameter`
console.log(tampilNamaTanpaParameter());


// penggunaan arrow function

// menghitung panjang masing masing elemen array
let mahasiswa = ['Gema nadia','aga hafiz','quaneisha bilqis'];

let jumlahHuruf = mahasiswa.map(function(nama) {
    return nama.length;
})

console.log('menghitung panjang masing masing elemen array')
console.log(jumlahHuruf);

// menghitung panjang masing masing element array menggunakan arrow function
let jumlahHurufArrowFunction = mahasiswa.map(nama => nama.length);
console.log(jumlahHurufArrowFunction);

// menghitung panjang masing masing element array menggunakan arrow function dan mengembalikan nya dalam bentuk object, kalau ingin mengembalikan object kita tidak bisa hanya gunakan {} karena javascript akan mengira kita akan menuliskan return, maka yang benar adalah tambahkan (), sehingga menjadi ({}). 
// dijavascript yang baru jika identifier dan value object nya sama maka cukup ditulis sekali aja. misalkan nama : nama menjadi nama. 

let jumlahHurufPakaiObject = mahasiswa.map (nama => ({ nama, jmlHuruf:nama.length }));
console.log(jumlahHurufPakaiObject);
console.table(jumlahHurufPakaiObject);