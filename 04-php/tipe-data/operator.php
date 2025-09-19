<?php
// Operator Aritmatika
$angka1 = 10;
$angka2 = 5;
echo $angka1 + $angka2 . PHP_EOL; // Penjumlahan
echo $angka1 - $angka2 . PHP_EOL; // Pengurangan
echo $angka1 * $angka2 . PHP_EOL; // Perkalian
echo $angka1 / $angka2 . PHP_EOL; // Pembagian
echo $angka1 % $angka2 . PHP_EOL; // Sisa Bagi
echo $angka1 ** $angka2 . PHP_EOL; // Eksponen

// Operator Penugasan
$total = 0;
echo $total += 100; // $total = $total + 100
echo $total -= 50; // $total = $total - 50
echo $total *= 2; // $total = $total * 2
echo $total /= 4; // $total = $total / 4
echo $total %= 3; // $total = $total % 3
echo $total **= 3; // $total = $total ** 3

// Operator Perbandingan
var_dump(10 == "10") . PHP_EOL; // Sama Dengan
var_dump(10 === "10") . PHP_EOL; // Sama Isi dan Tipe Data
var_dump(10 != "10") . PHP_EOL; // Tidak Sama Dengan
var_dump(10 !== "10") . PHP_EOL; // Tidak Sama Isi dan Tipe Data
var_dump(10 > "10") . PHP_EOL; // Lebih Besar
var_dump(10 < "10") . PHP_EOL; // Lebih Kecil
var_dump(10 >= "10") . PHP_EOL; // Lebih Besar Sama Dengan
var_dump(10 <= "10") . PHP_EOL; // Lebih Kecil Sama Dengan

// Operator Logika
var_dump(true && true) . PHP_EOL; // AND
var_dump(true and false) . PHP_EOL; // AND
var_dump(true || false) . PHP_EOL; // OR
var_dump(true or false) . PHP_EOL; // OR
var_dump(true xor false) . PHP_EOL; // XOR
var_dump(!true) . PHP_EOL; // NOT

// Increment and Decrement
$angka = 10;
echo ++$angka . PHP_EOL; // Tambah dan Kembalikan Nilai
echo $angka++ . PHP_EOL; // Kembalikan Nilai dan Tambah
echo --$angka . PHP_EOL; // Kurang dan Kembalikan Nilai
echo $angka-- . PHP_EOL; // Kembalikan Nilai dan Kurang
echo $angka . PHP_EOL;

// Operator Array
$buah = [
    "nama" => "Apel",
    "warna" => "Merah",
    "harga" => 5000
];
$buah2 = [
    "nama" => "Apel",
    "warna" => "Merah",
    "harga" => 5000
];
var_dump($buah == $buah2) . PHP_EOL; // Sama key, value
var_dump($buah === $buah2) . PHP_EOL; // Sama key, value, posisi
var_dump($buah != $buah2) . PHP_EOL; // Tidak Sama key, value
var_dump($buah <> $buah2) . PHP_EOL; // Tidak Sama key, value

$depan = [
    "depan" => "Eko"
];
$belakang = [
    "belakang" => "Patrio"
];
var_dump($depan + $belakang) . PHP_EOL; // Gabungan
?>