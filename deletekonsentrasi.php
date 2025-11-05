<?php
$semester = $_GET['semester'];
//include class mahasiswa
include "class/konsentrasi.class.php";
//object mahasiswa
$konsentrasi = new konsentrasi();
$exec = $konsentrasi->deletekonsentrasi($semester);

if ($exec) {
    echo "<script>alert('Data berhasil dihapus'); window.location = 'hasilkonsentrasi.php'; </script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location = 'hasilkonsentrasi.php'; </script>";
}