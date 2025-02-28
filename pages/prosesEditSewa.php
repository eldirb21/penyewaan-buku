<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('../koneksi.php'); 

// Cek koneksi database
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Cek apakah parameter ID tersedia
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID tidak valid!");
}

$id = $_GET['id'];

// Cek apakah semua data dikirim
if (!empty($_POST['judul']) && !empty($_POST['penyewa']) && !empty($_POST['durasi'])) {
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $penyewa = mysqli_real_escape_string($koneksi, $_POST['penyewa']);
    $durasi = (int) $_POST['durasi']; // Pastikan durasi berupa angka

    $tanggal_sewa = date('Y-m-d');
    $tanggal_selesai = date('Y-m-d', strtotime("+$durasi days", strtotime($tanggal_sewa))); // Hitung tanggal selesai

    // Perbaikan Query Update
    $sql = "UPDATE sewa SET 
                judul = '$judul', 
                penyewa = '$penyewa', 
                durasi = '$durasi',
                tanggal_sewa = '$tanggal_sewa',
                tanggal_selesai = '$tanggal_selesai'
            WHERE id = '$id'";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: index.php?success=1");
        exit();
    } else {
        die("Error dalam query: " . mysqli_error($koneksi));
    }
} else {
    die("Harap isi semua data dengan benar!");
}
?>
