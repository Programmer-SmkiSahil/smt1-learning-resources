<?php
// If Else Biasa
$nilai = 80;
if ($nilai > 80) {
    echo "Lulus" . PHP_EOL;
} else {
    echo "Tidak Lulus" . PHP_EOL;
}
// Ternary
$hasil = $nilai > 80 ? "Lulus" : "Tidak Lulus";
echo $hasil . PHP_EOL;

// Jadikan ini Ternary
$gender = "Co";
if ($gender == "Co"){
    echo "Lanang";
} else {
    echo "Perempuan";
}

$kelamin = $gender == "Co" ? "Lanang" : "Perempuan";
echo $kelamin . PHP_EOL;