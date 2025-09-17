<?php

$array = ["RPL", "DKV", "TKJ"];
$values = array(1, 2, 3, 4, 5);
$map = array(
    "nama" => "Toni",
    "umur" => 20,
    "alamat" => "Jakarta"
);

var_dump($array);
var_dump($values);

echo $array[0];
echo count($array);
echo "<br>";
var_dump($map["nama"]);