<?php

// Tipe Data Number Bulat
echo 10 . PHP_EOL;

// Tipe Data Number Float
echo 10.5 . PHP_EOL;

// Tipe Data Boolean
var_dump(true);
var_dump(false);

// Tipe Data String
echo 'Hello World \n';
echo "Hello World \n";
echo "Hello World" . PHP_EOL;
var_dump("Hello Dunia");

// Multiline String
echo <<<AA
lorem ipsum
dolor sit amet
consectetur adipiscing elit
AA;
echo PHP_EOL;

// Dot Operator
echo "Hello" . " " . "World" . PHP_EOL;

// Konversi Tipe Data
$int = (string)100;
$string = (int)"100";
var_dump($int);
var_dump($string);

// Tipe Data NULL
$null = null;
var_dump($null);

// Tipe Data Array
$sayuran = ["Bayam", "Kangkung", "Wortel"]; // Cara Pertama
var_dump($sayuran);
$buah = array("Nanas", "Apel", "Jeruk"); // Cara Kedua
var_dump($buah);
echo $sayuran[1] . PHP_EOL; // Mengakses Array
$buah[2] = "Mangga"; // Mengubah Array
echo $buah[2] . PHP_EOL;
$sayuran[] = "Kubis"; //Menambah Array
echo $sayuran[3] . PHP_EOL;
unset($sayuran[0]); // Menghapus Array
count($sayuran); // Menghitung Array

// Map atau Associative Array
$rey = [
    "inisial" => "Reysha",
    "nama_tengah" => "Mirza",
    "nama_akhir" => "Aiman",
];
var_dump($rey);
echo $rey["nama_akhir"] . PHP_EOL;

// Mengakses Karakter
$nama = "Shawqi";
echo $nama[0] . PHP_EOL;
echo $nama[5] . PHP_EOL;

// Variable Parsing
echo "Halo, $nama" . PHP_EOL;
echo "Halo, {$nama}'s" . PHP_EOL; // Curly Braces



?>