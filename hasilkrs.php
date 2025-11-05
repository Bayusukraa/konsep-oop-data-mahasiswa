<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Biodata</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg p-3 mb-2 bg-secondary text-white fixed-top sticky-top" >
    <div class="container-fluid">
    <a class="navbar-brand" href="latianform.php">Input Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="krs.php">krs</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hasilkrs.php" >hasil krs</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
    
</head>

<div class="container p-5 my-5 border border-dark bg-white text-dark">
        <div class="d-flex justify-content-between mb-3">
            <h3 class="mb-0">KRS</h3>
            <form class="d-flex" role="search" method="get" action="mahasiswa.php">
                <input class="form-control me-1 border-2 border-dark" type="search" name="search_query" placeholder="Search" aria-label="Search" value="<?= isset($_GET['search_query']) ? htmlspecialchars($_GET['search_query']) : '' ?>">
                <button class="btn btn-outline-success custom-search-btn" type="submit">Search</button>
            </form>
        </div>
            <hr>
            <table class="table">
        <tr>
            <th>Semester</th>
            <th>MatakuliahI</th>
            <th>MatakuliahII</th>
            <th>MatakuliahIII</th>
            <th class="text-center">Act</th>
        </tr>
        <?php 
             include "class/krs.class.php";
             $data = $krs->getkrs();
             foreach ($data as $krs) {
        ?>
        <tr>
            <td><?= $krs['semester'] ?></td>
            <td><?= $krs['MatakuliahI'] ?></td>
            <td><?= $krs['MatakuliahII'] ?></td>
            <td><?= $krs['MatakuliahIII'] ?></td>
            <td class="text-center">
            <a href="editkrs.php?semester=<?= $krs['semester'] ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="deletekrs.php?semester=<?= $krs['semester'] ?>"><button class="btn btn-danger">Delete</button></a>
            </td>
          </tr>
        <?php } ?>
    </table>
    </div>
</body>

</html>