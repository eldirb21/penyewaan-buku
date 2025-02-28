<?php
session_start();
include_once('koneksi.php');

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['fullname'] = $user['fullname'];
        $_SESSION['level'] = $user['level'];
        
        header("Location: pages/index.php");
        exit();
    } else {
        header("Location: login.php?error=Username atau Password salah!");
        exit();
    }
} else {
    header("Location: login.php?error=Harap isi semua kolom!");
    exit();
}
?>
