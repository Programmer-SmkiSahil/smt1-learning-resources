<?php

$nilai = "B";
$hasil = "";
switch ($nilai) {
    case 'A':
        $hasil = "Sangat Baik";
        break;
    case 'B':
        $hasil = "Baik";
        break;
    case 'C':
        $hasil = "Cukup";
        break;
    default:
        $hasil = "Masukin Yang Bener";
        break;
}

echo $hasil;

