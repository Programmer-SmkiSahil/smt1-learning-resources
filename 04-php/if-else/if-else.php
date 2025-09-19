<?php

$nilai = 80;
if ($nilai <= 80) {
    echo "Lulus" . PHP_EOL;
} elseif ($nilai <= 60) {
    echo "Lulus Bersyarat" . PHP_EOL;
} else {
    echo "Tidak Lulus" . PHP_EOL;
}

$hujan = false;
$tangan = "";
if ($hujan) {
    $tangan = "payung";
} else {
    $tangan = "kosong";
}
echo $tangan;