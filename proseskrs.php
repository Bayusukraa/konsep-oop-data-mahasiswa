<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $semester = $_POST['semester'];
    $MatakuliahI = $_POST['MatakuliahI'];
    $MatakuliahII = $_POST['MatakuliahII'];
    $MatakuliahIII = $_POST['MatakuliahIII'];


   //membuat koneksi
   include "class/krs.class.php";

   //buat query insert
$data_insert = [
    "semester" => $semester,
    "MatakuliahI" => $MatakuliahI,
    "MatakuliahII" => $MatakuliahII,
    "MatakuliahIII" => $MatakuliahIII
];

$exec = $krs->insertkrs($data_insert);

   //cek apakah berhasil
   if($exec){
    echo " <script>alert('data berhasil di simpan'); window.location = 'hasilkrs.php';</script> ";
   }else{
    echo " yahhh data gagal disimpan";
}
}