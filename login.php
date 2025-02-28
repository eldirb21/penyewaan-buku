<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-container {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .login-container h2 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-login {
            background: #4facfe;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 8px;
            transition: 0.3s;
            width: 100%;
            color: white;
        }
        .btn-login:hover {
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

    <div class="login-container">
        <h2><i class="fa-solid fa-sign-in-alt"></i> Login</h2>
        <?php
        if (isset($_GET['error'])) {
            echo "<div class='alert alert-danger' role='alert'>{$_GET['error']}</div>";
        }
        ?>
        <form action="prosesLogin.php" method="post">
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
            <button type="submit" class="btn btn-login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</button>
        </form>
        <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
