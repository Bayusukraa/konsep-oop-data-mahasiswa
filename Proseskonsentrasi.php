<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $semester = $_POST['semester'];
    $pilihanI = $_POST['pilihanI'];
    $pilihanII = $_POST['pilihanII'];


   //membuat koneksi
   include "class/konsentrasi.class.php";

   //buat query insert
$data_insert = [
    "semester" => $semester,
    "pilihanI" => $pilihanI,
    "pilihanII" => $pilihanII
];

$exec = $konsentrasi->insertkonsentrasi($data_insert);

   //cek apakah berhasil
   if($exec){
    echo " <script>alert(' data berhasil di simpan'); window.location = 'hasilkonsentrasi.php';</script> ";
   }else{
    echo " yahhh data gagal disimpan";
}
}