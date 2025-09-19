<?php
// For loop adalah metode perulangan yang paling sering digunakan
// Post statement
for ($i = 1; $i <= 10; $i++) {
    echo "Angka $i" . PHP_EOL;
}

// For untuk Array
$merk = ["Oppo", "Vivo", "Xiaomi", "Samsung", "Infinix"];
for ($i = 0; $i < count($merk); $i++) {
    echo "Hp ke-" . ($i + 1) . " " . "adalah " . $merk[$i] . PHP_EOL;
}

// Init statement
for ($i = 1; $i <= 10;) {
    echo "Perulangan ke-" . $i . PHP_EOL;
    $i++;
}

// Urutan untuk setiap putaran:
// 1. cek kondisi (i <= 10)
// 2. jalankan isi loop → echo "Perulangan ke-"
// 3. post-statement (i++) → nilai i ditambah 1
// 4. ulang lagi ke langkah 1