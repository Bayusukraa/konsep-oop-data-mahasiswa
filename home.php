<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['is_login']) == false){
            echo "<script>alert('Silahkan login terlebih dahulu');window.location='login.php';</script>";
        }
    ?>
    <h2>Selamat datang <?= $_SESSION['username']; ?> <a href="logout.php">logout</a></h2>
</body>
</html>