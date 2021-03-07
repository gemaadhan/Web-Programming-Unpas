// 1. Object literal
var mhs = {
    nama : "Sandhika Galih",
    nip : 21120112130040,
    email : 'sandhika@gmail.com',
    jurusan : 'Teknik'
}

var mhs2 = {
    nama : "gema nadia",
    nip : 21120112130041,
    email : 'gemaadhan@gmail.com',
    jurusan : 'Teknik'
}



// 2. function declaration
function buatObjectMahasiswa (nama, nip, email, jurusan){
    var mhs = {};
    mhs.nama = nama;
    mhs.nip = nip;
    mhs.email = email;
    mhs.jurusan = jurusan;
    return mhs;
}

var mhs3 = buatObjectMahasiswa("gema",2222,"gema@gmail.com","teknik perkapalan");
var mhs4 = buatObjectMahasiswa("basna",3333,"basna@gmail.com","teknik industri");

// 3. constructor function (keyword new)

// untuk membuat constructor biasakan diawali huruf besar
function Mahasiswa (nama, nip, email,jurusan){
    // anggap dia punya...
    // var this = {};
    // yang dibuat otomatis
    this.nama = nama;
    this.nip = nip;
    this.email = email;
    this.jurusan = jurusan;
    // anggap dia punya
    // return this;
    // yang dibuat otomatis
}

var mhs5 = new Mahasiswa("jamil",13541,"jamil@gmail.com","teknik periklanan")

// 4. object.create()
// ini ga di bahas sama pak sandhika

