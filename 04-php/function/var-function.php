<?php
// Variable Function adalah kemampuan memanggil function menggunakan variable
function sayHi($name) {
    echo "Hi $name" . PHP_EOL;
}
$hi = "sayHi";
$hi("Musa");