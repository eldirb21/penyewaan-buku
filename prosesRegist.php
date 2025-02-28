<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password
    $fullname = mysqli_real_escape_string($koneksi, $_POST['fullname']);
    $level = 'user'; // Default user level
    $gambar = 'default.jpg'; // Gambar default

    // Cek apakah username sudah ada
    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
    if (mysqli_num_rows($cek) > 0) {
        die("Username sudah digunakan! <a href='register.php'>Coba lagi</a>");
    }

    $sql = "INSERT INTO user (username, password, fullname, level, gambar) VALUES ('$username', '$password', '$fullname', '$level', '$gambar')";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: login.php?register=success");
        exit();
    } else {
        die("Error dalam query: " . mysqli_error($koneksi));
    }
}
?>