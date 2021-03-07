// function init() {
//     return function(nama) {
//         console.log(nama);
//     }
// }
// let panggilNama = init();
// panggilNama('aga');
// panggilNama('gema');


let add = function(waktu) {
    return function (nama) {
        console.log(`Halo ${nama}, selamat ${this.waktu}`)
    }
}

// skip dulu tentang closure, agak mbulet wkwk