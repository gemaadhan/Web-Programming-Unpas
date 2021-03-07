var penumpang = [];

var penumpangNaik = function (x, y) {

    if (y.includes(x)) {
        console.log(y.join(" || "));
        console.log(x + " sudah ada di dalam angkot")
        return penumpang;
    }

    else {
        if (y.includes(undefined)) {
            y[y.indexOf(undefined)] = x;
            return penumpang;
        }
        else {
            y.push(x);
            return penumpang;
        }
    }
}

var penumpangTurun = function (x, y) {
    if (y.length == 0) {
        console.log("angkot kosong");
        return y;
    }

    else {
        for (var i = 0; i < y.length; i++) {
            if (y[i] == x) {
                y[i] = undefined;
                return y;
            }

            else {
                console.log("penumpang" + " " + x + " " + "ga ada di angkot");
                return y;
            }
        }
    }
}