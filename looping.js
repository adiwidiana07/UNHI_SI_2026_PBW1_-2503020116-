for (let i = 1; i <= 5; i++) {
console.log("Perulangan ke-" + i);
}

let i = 1;

while (i <= 5) {
console.log(i);
i++;
}

// let i = 1;

// do {
// console.log(i);
// i++;
// } while (i <= 5);

let buah = ["Apel", "Jeruk", "Mangga"];

for (let i = 0; i < buah.length; i++) {
console.log(buah[i]);
}

let buahh = ["Apel", "Jeruk", "Mangga"];

for (let item of buahh) {
console.log(item);
}

for (let i = 1; i <= 5; i++) {
if (i === 3) break;
console.log(i);
}

for (let i = 1; i <= 5; i++) {
if (i === 3) continue;
console.log(i);
}

