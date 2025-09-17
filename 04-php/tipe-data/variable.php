<?php
// Variabel dibuat dengan $
$siswa = "Toni";
$umur = 17;
$siswa = "Sahroni";
echo $siswa . ": " . $umur . PHP_EOL;
// Constant dibuat dengan define
define("SISWA", "Bambang");
echo SISWA . PHP_EOL;
// Menghapus Variabel dengan unset
$hapus = "Ini akan dihapus";
unset($hapus);
var_dump(isset($hapus)); // cek apakah variabel ada

?>