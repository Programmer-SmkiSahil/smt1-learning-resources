<?php
// String Function adalah fungsi yang digunakan untuk memanipulasi string

// join(); untuk menggabungkan array jd string
// explode(); untuk memecah string jd array
// ucfirst(); untuk mengubah huruf pertama jd besar
// ucwords(); untuk mengubah huruf pertama di setiap kata jd besar
// strtolower(); untuk mengubah smua huruf jd kecil
// strtoupper(); untuk mengubah smua huruf jd besar

var_dump(join(" ", ["Fazle", "Gavin", "Laiq"]));
var_dump(explode(" ", "Fazle Gavin Laiq"));
var_dump(ucfirst("fazle gavin laiQ"));
var_dump(ucwords("fazle gavin laiQ"));
var_dump(strtolower("FAZLE GAVIN LAIQ"));
var_dump(strtoupper("fazle gavin laiQ"));



$rey = "reysa";