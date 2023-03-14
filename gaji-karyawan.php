<?php 

  // membuat data karyawan 
  $karyawan = [
    [
      "namaKaryawan" => "agus",  
      "jabatanKaryawan" => "supervisor",
      "jamLembur" => 40,
      "totalSakit" => 2,     
      "jamIzin" => 10,
      "totalGaji" => 0
    ],
    [
      "namaKaryawan" => "anto",     
      "jabatanKaryawan" => "karyawan biasa",
      "jamLembur" => 30,
      "totalSakit" => 0,     
      "jamIzin" => 5,
      "totalGaji" => 0
    ]
  ];

  // menambahkan data gaji pokok karyawan
  $gajiPokokKaryawan1 = 1_500_000;
  $gajiPokokKaryawan2 = 1_200_000;

  // menghitung potongan gaji karyawan dengan jam izin
  $potonganGaji1 = $karyawan[0]["jamIzin"] * 5000;
  $potonganGaji2 = $karyawan[1]["jamIzin"] * 3000;

  // menghitung bonus lembur
  if($karyawan[0]["jamLembur"] <= 20){
    $gajiPokokKaryawan1 += 500_000;
  }elseif($karyawan[0]["jamLembur"] <= 30){
    $gajiPokokKaryawan1 += 600_000;
  }elseif($karyawan[0]["jamLembur"] >= 40){
    $gajiPokokKaryawan1 += 700_000;
  }

  if($karyawan[1]["jamLembur"] <= 20){
    $gajiPokokKaryawan2 += 400_000;
  }elseif($karyawan[1]["jamLembur"] <= 30){
    $gajiPokokKaryawan2 += 500_000;
  }elseif($karyawan[1]["jamLembur"] >= 40){
    $gajiPokokKaryawan2 += 600_000;
  }

  // menghitung total gaji
  $karyawan[0]["totalGaji"] +=  $gajiPokokKaryawan1 - $potonganGaji1;
  $karyawan[1]["totalGaji"] +=  $gajiPokokKaryawan2 - $potonganGaji2;

  // menampilkan hasil perhitungan
  foreach ($karyawan as $pegawai){

    echo "Nama karyawan = ". $pegawai["namaKaryawan"] . PHP_EOL;
    echo "Jabatan karyawan = ". $pegawai["jabatanKaryawan"]. PHP_EOL;
    echo "Jam Lembur karyawan = ". $pegawai["jamLembur"] ." jam".  PHP_EOL;
    echo "Total sakit karyawan = ". $pegawai["totalSakit"] . PHP_EOL;
    echo "Jam izin karyawan = ". $pegawai["jamIzin"] ." jam". PHP_EOL;
    echo "Total gaji karyawan = Rp. ".number_format($pegawai["totalGaji"], 0, ",", ".").PHP_EOL;
    echo "".PHP_EOL;
  } 

  // jujurly ini code masih berantakan wkwk
  

?>
