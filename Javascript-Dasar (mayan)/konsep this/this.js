// this akan mengembalikan nilai sesuai dengan context nya

// 1. this pada function declaration
function halo() {
    console.log("Ini adalah isi dari this di dalam pada object declaration");
    console.log(this);
    console.log('Halo');
    // console.log(this === window)
}
halo(); // == window.halo
// this mengembalikan object global

// 2. object literal
var obj = {
    nama : "gema",
    kelas : "2be"
};

obj.halo = function() {
    console.log("Ini adalah isi dari this di dalam object literal");
    console.log(this);
    console.log("halo");
};

obj.halo();
// this mengembalikan object itu sendiri

// 3. Constructro
function Halo(nama,kelas) {
    this.nama = nama;
    this.kelas = kelas;
    console.log("Ini adalah isi dari this di dalam constrcutor");
    console.log(this);
    console.log('Halo');
}

new Halo("jambrut","29");
new Halo("jambrong","39");
// this mengembalikan object baru
