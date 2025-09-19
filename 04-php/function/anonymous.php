<?php
// Anonymous Function adalah function tanpa nama
// Di PHP biasa disebut Closure
// Biasa digunkan sebagai argumen/parameter function lain
$iniFunction = function($nama) {
    echo "Hallo $nama" . PHP_EOL;
};
$iniFunction("Imran");

// Anonymous Function sebagai argumen function lain
function sayHello($nama, $filter) {
    $nama = $filter($nama);
    echo "Hello $nama" . PHP_EOL;
}
sayHello("Imran", function($nama) {
    return strtoupper($nama);
});