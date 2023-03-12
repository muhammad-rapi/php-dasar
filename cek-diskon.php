<?php 

  // membuat program mengecek angka diskon 
  // kita akan mengecek apakah angka tersebut sudah mencapai angka minimal diskon
  // jika sudah maka kita tampilkan pesan "selamat anda mendapatkan diskon sebesar 10%, maka total belanjaan anda menjadi segini"

  // pertama kita membuat angka minimal untuk mencapai diskon dan jumlah diskonnya
  $angkaMinimal = 300_000;
  $jlhDiskon = 75/100;

  // kemudian kita menerima inputan total belanja 
  $totalBelanja = 325000;

  // kemudian kita cek harga diskonnya berapa
  $cekDiskon = $totalBelanja * $jlhDiskon;
  $cekHarga = $totalBelanja - $cekDiskon; 

  // kemudian kita cek apakah angka mencapai minimal

  if($totalBelanja >= $angkaMinimal){
    echo "selamat anda berhak mendapatkan diskon sebesar " . $jlhDiskon * 100 ."% maka total belanjaan anda adalah Rp.$cekHarga" ;
  }else{
    echo "maaf anda belum berhak mendapatkan diskon";
  }

  

?>