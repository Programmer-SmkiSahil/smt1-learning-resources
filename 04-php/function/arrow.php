<?php
// Arrow Function adalah function yang lebih ringkas
$nama = "Gapin";
$halo = fn() => "Halo $nama" . PHP_EOL;
echo $halo();

// Arrow Function
$angka1 = 10;
$angka2 = 20;
$tambah = fn($a1, $a2) => $a1 + $a2;
echo $tambah($angka1, $angka2) . PHP_EOL;