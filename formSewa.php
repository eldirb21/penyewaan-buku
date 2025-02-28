<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Sewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Penyewaan Buku</a>
            <div class="d-flex align-items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/219/219969.png" alt="Profile" class="rounded-circle" width="40" height="40">
                <span class="text-white ms-2">Mogican</span>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="mb-4">Form Sewa Buku</h2>
        <form action="prosesSewa.php" method="post">
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Penyewa</label>
                <input type="text" name="penyewa" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Durasi Sewa (hari)</label>
                <input type="number" name="durasi" class="form-control" required>
            </div>
            <button type="submit" name="sewa" class="btn btn-primary">Sewa Buku</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>