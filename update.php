<?php
include "class/mahasiswa_class.php";
// Koneksi ke database
// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "ba231_db";
// $conn = mysqli_connect($host, $username, $password, $database);

// Ambil data dari form
$Nim = $_POST['Nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];


// Mengecek apakah ada foto yang di-upload
if(isset($_FILES['Foto']) && $_FILES['Foto']['error'] == 0) {
    // Ambil nama foto dan ekstensi
    $Foto = $_FILES['Foto']['name'];
    $file_type = strtolower(pathinfo($Foto, PATHINFO_EXTENSION));
    
    // Validasi tipe file (hanya PNG, JPG, JPEG yang diperbolehkan)
    $allowed_types = ['png', 'jpg', 'jpeg'];
    if(!in_array($file_type, $allowed_types)) {
        echo "<script>
                alert('Format file tidak valid. Hanya PNG, JPG, JPEG yang diperbolehkan.');
                window.location = 'mahasiswa.php';
              </script>";
        exit;
    }
    
    // Cari foto lama untuk dihapus
    //$result = mysqli_query($conn, "SELECT Foto FROM mahasiswa WHERE Nim = '$Nim'");
    $result = $mhs->getFotoMhs($Nim);
    if ($result) {
        $old_file_path = "Foto/" . $result['foto'];
        // Jika file lama ada, hapus file tersebut
        if (file_exists($old_file_path)) {
            unlink($old_file_path);
        }
    }
    
    // Generate unique filename untuk foto baru
    $unique_filename = uniqid() . '.' . $file_type;
    $target_file = "Foto/" . $unique_filename;
    
    // Upload file baru
    if(move_uploaded_file($_FILES['Foto']['tmp_name'], $target_file)) {
        $Foto = $unique_filename; // Gunakan nama file baru
    } else {
        echo "<script>
                alert('Gagal mengupload foto');
                window.location = 'mahasiswa.php';
              </script>";
        exit;
    }
} else {
    // Jika tidak ada file baru di-upload, gunakan foto lama
    $result = $mhs->getFotoMhs($Nim);
    $Foto = $result['foto'];  // Menggunakan foto lama jika tidak di-upload
}

// Menyusun data untuk update
$data_update = [
    "Nim" => $Nim,
    "nama" => $nama,
    "jurusan" => $jurusan,
    "gender" => $gender,
    "alamat" => $alamat,
    "no_hp" => $no_hp,
    "email" => $email,
    "Foto" => $Foto  // Menyimpan foto baru (atau foto lama jika tidak di-upload)
];

// Mengupdate data mahasiswa di database
$exec = $mhs->updateMahasiswa($data_update);

if($exec) {
    echo "<script>
            alert('Data berhasil disimpan');
            window.location = 'mahasiswa.php';
          </script>";
} else {
    echo "Data gagal disimpan: " . mysqli_error($conn);
}
?>