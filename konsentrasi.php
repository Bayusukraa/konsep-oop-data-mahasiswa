<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latian Form</title>
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
          <a class="nav-link" href="konsentrasi.php" >konsentrasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hasilkonsentrasi.php">hasil konsentrasi</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

</head>
<body>
    <div class="container-fluid">
        <div class="container p-5 my-5 border border-dark">
            <h2>Konsentrasi</h2>
            <hr>
            <form action="proseskonsentrasi.php" method="POST">
            <div class="mb-3 mt-3">
            <label for="semester">semester:</label>
                    <select name="semester" class="form-select">
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                        <option value="VII">VII</option>
                    </select>
                    <br>
                    <label for="pilihanI">pilihanI:</label>
                    <select name="pilihanI" class="form-select">
                        <option value="cybersecurity">cybersecurity</option>
                        <option value="kalkulus">Kalkulus</option>
                        <option value="electro">electro</option>
                    </select>
                    <br>
                    <label for="pilihanII">pilihanII:</label>
                    <select name="pilihanII" class="form-select">
                        <option value="cybersecurity">cybersecurity</option>
                        <option value="kalkulus">kalkulus</option>
                        <option value="electro">electro</option>
                    </select>
                    <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</body>

</html>