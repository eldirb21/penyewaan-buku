<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Sewa Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#">Tambah Sewa Buku</a>
            <div class="d-flex align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/219/219969.png" alt="Profile" class="rounded-circle" width="40" height="40">
                <span class="text-white ms-2 fw-bold">Mogican</span>
            </div>
        </div>
    </nav>

    <!-- Form Penyewaan Buku -->
    <div class="container mt-5">
 
        <!-- Menampilkan notifikasi sukses/gagal -->
        <?php if (isset($_GET['status'])): ?>
            <div class="alert <?php echo $_GET['status'] == 'success' ? 'alert-success' : 'alert-danger'; ?>">
                <?php 
                    echo $_GET['status'] == 'success' ? 'Buku berhasil disewa!' : 'Gagal menyewa buku!';
                ?>
            </div>
        <?php endif; ?>

        <form action="prosesSewa.php" method="post">
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul buku" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Penyewa</label>
                <input type="text" name="penyewa" class="form-control" placeholder="Masukkan nama penyewa" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Durasi Sewa (hari)</label>
                <input type="number" name="durasi" class="form-control" min="1" placeholder="Masukkan durasi sewa" required>
            </div>
            <button type="submit" name="sewa" class="btn btn-primary w-100">Sewa Buku</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
