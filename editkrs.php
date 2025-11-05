<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
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
          <a class="nav-link" href="krs.php" >krs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hasilkrs.php">hasil krs</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            padding: auto;
        }

        fieldset {
            background: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 800px;
            margin: 20px auto;
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
            text-align: center;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }

        td {
            padding: 8px;
            vertical-align: middle;
        }

        td:first-child {
            width: 120px;
            font-weight: 500;
            color: #444;
        }

        td:nth-child(2) {
            width: 20px;
            color: #666;
        }

        input[type="number"],
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            color: #333;
            transition: all 0.3s ease;
        }

        input[type="number"]:read-only {
            background-color: #f5f5f5;
            cursor: not-allowed;
        }

        input[type="number"]:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        select:focus {
            outline: none;
            border-color: #1a73e8;
            box-shadow: 0 0 0 3px rgba(26,115,232,0.2);
        }

        select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            padding-right: 30px;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        input[type="radio"] {
            width: 16px;
            height: 16px;
            margin: 0;
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #1557b0;
        }

        @media (max-width: 600px) {
            fieldset {
                padding: 20px;
            }

            table, tr, td {
                display: block;
            }

            td:first-child {
                padding-bottom: 5px;
            }

            td:nth-child(2) {
                display: none;
            }

            td:last-child {
                padding-bottom: 15px;
            }

            .radio-group {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
<?php

$semester = $_GET['semester'];
include "class/krs.class.php";
$data = $krs->getUpdatekrs($semester);
?>

<form action="updatekrs.php" method="POST">
    <fieldset>
        <h2>LENGKAPI BIODATA</h2>
        <table>
                <td>Semester</td>
                <td>:</td>
                <td>
                    <select name="semester">
                        <option value="I" <?= ($data['semester'] == 'I') ? 'selected' : '' ?>>I</option>
                        <option value="II" <?= ($data['semester'] == 'II') ? 'selected' : '' ?>>II</option>
                        <option value="III" <?= ($data['semester'] == 'III') ? 'selected' : '' ?>>III</option>
                        <option value="IV" <?= ($data['semester'] == 'IV') ? 'selected' : '' ?>>IV</option>
                        <option value="V" <?= ($data['semester'] == 'V') ? 'selected' : '' ?>>V</option>
                        <option value="VI" <?= ($data['semester'] == 'VI') ? 'selected' : '' ?>>VI</option>
                       <option value="VII" <?= ($data['semester'] == 'VII') ? 'selected' : '' ?>>VII</option>
                        <option value="VIII" <?= ($data['semester'] == 'VIII') ? 'selected' : '' ?>>VIII</option>
                    </select>
                </td>
                <td>
                    <select name="MatakuliahI">
                        <option value="sensor" <?= ($data['MatakuliahI'] == 'sensor') ? 'selected' : '' ?>>sensor</option>
                        <option value="ipa" <?= ($data['MatakuliahI'] == 'ipa') ? 'selected' : '' ?>>ipa</option>
                        <option value="ips" <?= ($data['MatakuliahI'] == 'ips') ? 'selected' : '' ?>>ips</option>
                        <option value="matematika" <?= ($data['MatakuliahI'] == 'matematika') ? 'selected' : '' ?>>matematika</option>
                    </select>
                </td>
                <td>
                <select name="MatakuliahII">
                        <option value="sensor" <?= ($data['MatakuliahII'] == 'sensor') ? 'selected' : '' ?>>sensor</option>
                        <option value="ipa" <?= ($data['MatakuliahII'] == 'ipa') ? 'selected' : '' ?>>ipa</option>
                        <option value="ips" <?= ($data['MatakuliahII'] == 'ips') ? 'selected' : '' ?>>ips</option>
                        <option value="matematika" <?= ($data['MatakuliahII'] == 'matematika') ? 'selected' : '' ?>>matematika</option>
                    </select>
                </td>
                <td>
                <select name="MatakuliahIII">
                        <option value="sensor" <?= ($data['MatakuliahIII'] == 'sensor') ? 'selected' : '' ?>>sensor</option>
                        <option value="ipa" <?= ($data['MatakuliahIII'] == 'ipa') ? 'selected' : '' ?>>ipa</option>
                        <option value="ips" <?= ($data['MatakuliahIII'] == 'ips') ? 'selected' : '' ?>>ips</option>
                        <option value="matematika" <?= ($data['MatakuliahIII'] == 'matematika') ? 'selected' : '' ?>>matematika</option>
                    </select>
                </td>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>