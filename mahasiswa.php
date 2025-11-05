<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Biodata</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg p-3 mb-2 bg-secondary text-white fixed-top sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="latianform.php">Input Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="krs.php">krs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="konsentrasi.php">konsentrasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</head>

<body class="bg-light text-dark">
    <?php
    // Menambahkan file class mahasiswa
    include "class/mahasiswa_class.php";
    
    // Menangani pencarian jika parameter search_query ada
    $searchQuery = isset($_GET['search_query']) ? $_GET['search_query'] : '';

    // Dapatkan data mahasiswa, filter jika ada query pencarian
    if ($searchQuery) {
        // Menggunakan method di class mahasiswa untuk pencarian
        $data = $mhs->searchMahasiswa($searchQuery);
    } else {
        // Jika tidak ada pencarian, ambil semua data mahasiswa
        $data = $mhs->getMahasiswa();
    }
    ?>

    <div class="container p-5 my-5 border border-dark bg-white text-dark">
        <div class="d-flex justify-content-between mb-3">
            <h3 class="mb-0">Data Mahasiswa</h3>
            <form class="d-flex" role="search" method="get" action="mahasiswa.php">
                <input class="form-control me-1 border-2 border-dark" type="search" name="search_query" placeholder="Search" aria-label="Search" value="<?= isset($_GET['search_query']) ? htmlspecialchars($_GET['search_query']) : '' ?>">
                <button class="btn btn-outline-success custom-search-btn" type="submit">Search</button>
            </form>
        </div>
        <hr>
        <table class="table">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kode Jurusan</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Foto</th>
                <th>Act</th>
            </tr>
            <?php
            // Tampilkan data mahasiswa dengan perulangan
            foreach ($data as $mhs) {
            ?>
                <tr>
                    <td><?= $mhs['Nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['jurusan'] ?></td>
                    <td><?= $mhs['gender'] == 1 ? "Laki-Laki" : "Perempuan" ?></td>
                    <td><?= $mhs['alamat'] ?></td>
                    <td><?= $mhs['no_hp'] ?></td>
                    <td><?= $mhs['email'] ?></td>
                    <td><img src="Foto/<?= $mhs['Foto'] ?>" width="100px"></td>
                    <td>
                        <a href="edit.php?Nim=<?= $mhs['Nim'] ?>"><button class="btn btn-warning">Edit</button></a>
                        <a href="delete.php?Nim=<?= $mhs['Nim'] ?>"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>
