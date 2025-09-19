<?php
// For Each sering digunakan untuk perulangan terhadap array
$motor = ["Honda", "Yamaha", "Suzuki", "Kawasaki"];
foreach ($motor as $merk) {
    echo $merk . PHP_EOL;
}

$nama_lengkap = [
    "nama_depan" => "Muh",
    "nama_tengah" => "Labib",
    "nama_akhir" => "Luthfi"
];
foreach ($nama_lengkap as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}