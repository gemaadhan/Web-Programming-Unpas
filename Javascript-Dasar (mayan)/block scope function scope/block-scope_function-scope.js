//  =================================================
// blockscope artinya itu ada di dalam { }
//contoh block scope pada C
int i = 2;
if (i % 2 == 0) {
    bool genap = true;
}

if (genap) { 
    printf("genap"); 
}

// genap is undeclared, karena variable hanya berlaku di block itu saja

// ====================================================

//contoh pada javascript

var i = 2;
if ( i % 2 == 0) {
    var genap = true;
}

if (genap) { // disini akan tampil, karena javascript menggunakan function scope
    console.log('genap');
}

// ====================================================

var a = 1; //sama dengan window.a

function tes() {
    var b = 2;
}

tes();
console.log(b); //b is not defined, karena b ada di dalam function scope

// variable pada function selalu local