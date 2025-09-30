<?php
// Function adalah perintah yang bisa kita buat sendiri
// Function dapat dipanggil berkali-kali
// Function dapat mengembalikan nilai

function halo() {
    echo "Hello World" . PHP_EOL;
}

// Parameter
function haloNama($nama) {
    echo "Halo $nama" . PHP_EOL;
}


haloNama("Musa");

// Default Parameter
function salam($nama = "Kenal") {
    echo "Salam $nama" . PHP_EOL;
}
salam();

// Type Declaration
// Digunakan untuk menentukan tipe data pada parameter
function tambah(int $angka1, int $angka2) {
    echo $angka1 + $angka2 . PHP_EOL;
}
tambah(10, 5);
tambah("10", "5");

// Function Return Value
// Function yang mengembalikan nilai
function sum(int $a1, int $a2) {
    return $a1 + $a2;
}
$total = sum(100, 50);
echo $total . PHP_EOL;