<?php

$semester = $_POST['semester'];
$MatakuliahI = $_POST['MatakuliahI'];
$MatakuliahII = $_POST['MatakuliahII'];
$MatakuliahIII = $_POST['MatakuliahIII'];


include "class/krs.class.php";

$data_update = [
    "semester" => $semester,
    "MatakuliahI" => $MatakuliahI,
    "MatakuliahII" => $MatakuliahII,
    "MatakuliahIII" => $MatakuliahIII
];

$exec = $krs->updatekrs($data_update);

if($exec){
    echo "<script>alert('data berhasil di simpan'); window.location = 'hasilkrs.php';</script>";
}else{
    echo "Data gagal disimpan";
}