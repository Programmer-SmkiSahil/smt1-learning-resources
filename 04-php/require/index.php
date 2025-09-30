<?php

// Include dan Require digunakan untuk memanggil file php lain
// Perbedaannya :
// Include : Jika file tidak ditemukan, maka akan menampilkan warning, namun script tetap berjalan
// Require : Jika file tidak ditemukan, maka akan menampilkan fatal error, dan script berhenti
// include_once dan require_once digunakan untuk memanggil file php lain, namun jika file sudah pernah dipanggil, maka tidak akan dipanggil lagi

include 'include/ambil.php';
require 'include/transfer.php';

ambilUang();
echo "\n";
transfer();
