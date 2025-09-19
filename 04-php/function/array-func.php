<?php
// Array Function adalah fungsi yang digunakan untuk memanipulasi array

// array_keys() Untuk mengambil semua key dari array
// array_values() Untuk mengambil semua value dari array
// array_map() Untuk memetakan array ke array baru
// sort() Untuk mengurutkan array secara ascending
// rsort() Untuk mengurutkan array secara descending
// shuffle() Untuk mengacak isi array

$nama = [
    "Fazle",
    "Gavin",
    "Laiq"
];
var_dump(array_keys($nama));
var_dump(array_values($nama));
var_dump(array_map(function($value) {
    return strtoupper($value);
}, $nama));
sort($nama);
var_dump($nama);
rsort($nama);
var_dump($nama);
shuffle($nama);
var_dump($nama);