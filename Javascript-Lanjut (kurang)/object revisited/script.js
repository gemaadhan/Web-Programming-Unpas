// ini object literal
// let mahasiswa = {
//     nama: `Gema`,
//     energi: 10,
//     makan: function (porsi) {
//         this.energi = this.energi + porsi;
//         console.log(`Halo ${this.nama}, selamat makan!`);
//     }
// }

// let mahasiswa2 = {
//     nama: `Nadia`,
//     energi: 10,
//     makan: function (porsi) {
//         this.energi = this.energi + porsi;
//         console.log(`Halo ${this.nama}, selamat makan!`)
//     }
// }

// 2 function declaration

// dengan membuat fungsi dalam bentuk object, tidak terjadi pengulangan di background sehingga lebih efektif
const methodMahasiswa = {
    makan: function (porsi) {
        this.energi += porsi;
        console.log(`Halo ${this.nama} Selamat Makan`)
    },

    main: function (jam) {
        this.energi -= jam;
        console.log(`halo ${this.nama} Selamat Bermain`)
    },

    tidur: function (jam) {
        this.energi += jam * 2;
        console.log(`halo ${this.nama} Selamat Tidur`)
    }
}


function mahasiswa(nama, energi) {
    // let mahasiswa = {}; //wajib ada
    let mahasiswa = Object.create(methodMahasiswa);
    mahasiswa.nama = nama;
    mahasiswa.energi = energi;

    //merujuk ke atas
    // mahasiswa.makan = methodMahasiswa.makan;
    // mahasiswa.main = methodMahasiswa.main;
    // mahasiswa.tidur = methodMahasiswa.tidur;

    // biar otomatis gimana ? biar agar setiap bikin method baru di object method mahasiswa, gausah bikin inisialisasi nya, caranya adalah menggunakan method Object Create, liat ke atas ya
    


    return mahasiswa; //wajib ada
}

let Gema = mahasiswa('gema', 10);
let Doddy = mahasiswa(`doddy`, 20);

// 3. constructor
// function Mahasiswa(nama, energi) {

//     this.nama = nama;
//     this.energi = energi;

//     this.makan = function(porsi) {
//         this.energi += porsi;
//         console.log(`Halo ${this.nama} Selamat Makan`)
//     }

//     this.main = function(jam) {
//         this.energi -= jam;
//         console.log(`halo ${this.nama} Selamat Bermain`)
//     }

// }

// Gema = new Mahasiswa('jambrong', 90);


