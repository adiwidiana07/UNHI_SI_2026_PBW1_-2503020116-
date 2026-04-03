function sapa() {
console.log("Halo, selamat belajar JavaScript");
}
function sapa(nama) {
console.log("Halo " + nama);
}

sapa("Budi");

function tambah(a, b) {
return a + b;
}

let hasil = tambah(5, 3);
console.log(hasil); // 8

let sapa = function(nama) {
console.log("Halo " + nama);
};

sapa("Andi");

const tambah = (a, b) => {
return a + b;
};

function tampilkanPesan() {
console.log("Ini fungsi tanpa parameter");
}

function hitungLuas(panjang, lebar) {
return panjang * lebar;
}

console.log(hitungLuas(5, 4));

