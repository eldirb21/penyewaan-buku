<?php
include_once('koneksi.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM sewa WHERE id='$id'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Sewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Sewa Buku</h2>
        <form action="prosesEditSewa.php?id=<?= htmlspecialchars($id); ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($row['judul']); ?>"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Penyewa</label>
                <input type="text" name="penyewa" class="form-control" value="<?= htmlspecialchars($row['penyewa']); ?>"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Durasi Sewa (hari)</label>
                <input type="number" name="durasi" class="form-control" value="<?= htmlspecialchars($row['durasi']); ?>"
                    required>
            </div>
            <button type="submit" name="sewa" class="btn btn-primary">Update Sewa</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>