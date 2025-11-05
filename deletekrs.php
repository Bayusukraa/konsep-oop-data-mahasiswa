<?php
$semester = $_GET['semester'];
//include class mahasiswa
include "class/krs.class.php";
//object mahasiswa
$krs = new krs();
$exec = $krs->deletekrs($semester);

if ($exec) {
    echo "<script>alert('Data berhasil dihapus'); window.location = 'hasilkrs.php'; </script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location = 'hasilkrs.php'; </script>";
}