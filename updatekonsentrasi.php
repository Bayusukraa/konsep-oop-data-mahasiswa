<?php

$semester = $_POST['semester'];
$pilihanI = $_POST['pilihanI'];
$pilihanII = $_POST['pilihanII'];


include "class/konsentrasi.class.php";

$data_update = [
    "semester" => $semester,
    "pilihanI" => $pilihanI,
    "pilihanII" => $pilihanII
];
$exec = $konsentrasi->updatekonsentrasi($data_update);

if($exec){
    echo "<script>alert('data berhasil di simpan'); window.location = 'hasilkonsentrasi.php';</script>";
}else{
    echo "Data gagal disimpan";
}