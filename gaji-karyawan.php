<?php 

  // membuat data karyawan 
  $karyawan = [
    [
      "namaKaryawan1" => "agus",  
      "jabatanKaryawan1" => "supervisor",
      "jamLembur1" => 40,
      "totalSakit1" => 2,     
      "jamIzin1" => 10
    ],
    [
      "namaKaryawan2" => "anto",     
      "jabatanKaryawan2" => "karyawan biasa",
      "jamLembur2" => 30,
      "totalSakit2" => 0,     
      "jamIzin2" => 5
    ]
  ];

  // menambahkan data gaji pokok karyawan
  $gajiPokokKaryawan1 = 1_500_000;
  $gajiPokokKaryawan2 = 1_200_000;

  // menghitung potongan gaji karyawan dengan jam izin
  $potonganGaji1 = $karyawan[0]["jamIzin1"] * 5000;
  $potonganGaji2 = $karyawan[1]["jamIzin2"] * 3000;

  // menghitung bonus lembur
  if($karyawan[0]["jamLembur1"] <= 20){
    $gajiPokokKaryawan1 += 500_000;
  }elseif($karyawan[0]["jamLembur1"] <= 30){
    $gajiPokokKaryawan1 += 600_000;
  }elseif($karyawan[0]["jamLembur1"] >= 40){
    $gajiPokokKaryawan1 += 700_000;
  }

  if($karyawan[1]["jamLembur2"] <= 20){
    $gajiPokokKaryawan2 += 400_000;
  }elseif($karyawan[1]["jamLembur2"] <= 30){
    $gajiPokokKaryawan2 += 500_000;
  }elseif($karyawan[1]["jamLembur2"] >= 40){
    $gajiPokokKaryawan2 += 600_000;
  }

  // menghitung total gaji
  $totalGajiKaryawan1 = $gajiPokokKaryawan1 - $potonganGaji1;
  $totalGajiKaryawan2 = $gajiPokokKaryawan2 - $potonganGaji2;

  // menampilkan hasil perhitungan
  echo "Nama karyawan = " . $karyawan[0]["namaKaryawan1"].PHP_EOL;
  echo "jabatan = " . $karyawan[0]["jabatanKaryawan1"].PHP_EOL; 
  echo "total jam lembur = " . $karyawan[0]["jamLembur1"]. " jam".PHP_EOL; 
  echo "total sakit = " . $karyawan[0]["totalSakit1"].PHP_EOL; 
  echo "total jam izin = " . $karyawan[0]["jamIzin1"]." jam".PHP_EOL; 
  echo "total gaji = Rp. " . number_format($totalGajiKaryawan1, 0, "", ".").PHP_EOL; 

  echo "".PHP_EOL;

  echo "Nama karyawan = " . $karyawan[1]["namaKaryawan2"].PHP_EOL;
  echo "jabatan = " . $karyawan[1]["jabatanKaryawan2"].PHP_EOL; 
  echo "total jam lembur = " . $karyawan[1]["jamLembur2"]. " jam".PHP_EOL; 
  echo "total sakit = " . $karyawan[1]["totalSakit2"].PHP_EOL; 
  echo "total jam izin = " . $karyawan[1]["jamIzin2"]." jam".PHP_EOL; 
  echo "total gaji = Rp. " . number_format($totalGajiKaryawan2, 0, "", ".").PHP_EOL; 

  // jujurly ini code masih berantakan wkwk
  

?>