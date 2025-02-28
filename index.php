<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['user_id'])) {
    echo "Error: Session tidak ditemukan!";
    header("Location: login.php");
    exit();
}

echo "Session user_id: " . $_SESSION['user_id'];
?>