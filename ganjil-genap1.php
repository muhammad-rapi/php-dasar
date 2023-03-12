<?php 

  /* memasukkan angka inputan kedalam variable
    kemudian cek apakah dia ganjil atau genap
  */
  $angka = 10;

  if ($angka % 2 == 0){
    echo "angka $angka adalah angka genap";
  }else if($angka % 2 == 1){
    echo "angka $angka adalah angka ganjil";
  }else{
    echo "angka $angka bukanlah angka";
  }


?>