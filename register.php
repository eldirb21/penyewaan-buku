<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 450px;
            width: 100%;
            text-align: center;
        }
        .register-container h2 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-register {
            background: #4facfe;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            transition: 0.3s;
            width: 100%;
            color: white;
        }
        .btn-register:hover {
            background: #00c6ff;
        }
        .text-center a {
            color: #4facfe;
            text-decoration: none;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2><i class="fa-solid fa-user-plus"></i> Registrasi</h2>
        <form action="prosesRegist.php" method="post">
            <div class="mb-3">
                <label class="form-label">Username (Email)</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="username" class="form-control" placeholder="Masukkan email" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="fullname" class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>
            </div>
            <button type="submit" class="btn btn-register"><i class="fa-solid fa-user-check"></i> Daftar</button>
        </form>
        <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
