// konsep this pada arrow function

// constructor function
const Mahasiswa = function (nama, tinggi) {
    // this.nama = nama;
    // this.tinggi = tinggi;
    
    console.log(this);

    this.sayHello = function () {
        console.log(this);
    }
}

const gema = new Mahasiswa("Gema", 167);
const aga = new Mahasiswa("Aga", 178);

// constrcutor tidak bisa diubah menjadi arrow function, tapi kalau method di dalam nya bisa

const MahasiswaLain = function (nama, tinggi) {
    // this.nama = nama;
    // this.tinggi = tinggi;
    
    

    this.sayHello = () => {
        
        console.log(this);
    }
}

const gemaLain = new MahasiswaLain("Gema", 167);
const agaLain = new MahasiswaLain("Aga", 178);
