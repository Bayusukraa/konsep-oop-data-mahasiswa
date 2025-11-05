<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="sign.css">
    <style>
          h2 {
            text-align: center;
        }

        .form-signin button {
            width: 100%; 
            margin: 0 auto; 
        }
    </style>
</head>
<body>
    <div class="container-sm">
        <div class="form-signin">
            <h2>LOGIN</h2>
            <form action="login_act.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <br>
                <br>
                <div class="text-center">
                <label for="username" class="form-label">belum punya akun?</label>
                <a href="registrasi.php" class="regis">daftar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


