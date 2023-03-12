<?php 

// kita akan membuat program mengecek nilai rata rata menggunakan variable length argument list

// pertama kita buat function terlebih dahulu 

function nilai (...$seluruhNilai){

  $jlhNilai = count($seluruhNilai);
  $totalNilai = array_sum($seluruhNilai)/$jlhNilai;

  return $totalNilai;

}

echo nilai(100, 90, 95, 85, 80, 85, 90, 95, 100);


?>