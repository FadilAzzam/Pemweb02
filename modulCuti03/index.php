<?php 
session_start();
if (isset($_SESSION['is_admin'])) {
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI Cuti Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="overflow-hidden">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">SI Cuti Pegawai</a>
        </div>
    </nav>

    <header class="bg-light py-5">
        <div class="container text-center">
            <h1 class="display-4">Selamat Datang di Sistem Cuti Pegawai</h1>
            <p class="lead">Kelola cuti karyawan dengan mudah, cepat, dan efisien.</p>
            <a href="auth/login.php" class="btn btn-primary btn-lg m-2">Login</a>
            <a href="https://wa.me/6288219412242?text=Halo%20Admin,%20saya%20ingin%20mendaftar%20akun%20pegawai." class="btn btn-outline-primary btn-lg m-2">Daftar</a>
        </div>
    </header>

    <section class="container py-5">
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Mudah Digunakan</h4>
                <p>Antarmuka sederhana dan ramah pengguna untuk semua kalangan.</p>
            </div>
            <div class="col-md-4">
                <h4>Efisien</h4>
                <p>Pengajuan dan persetujuan cuti hanya dalam beberapa klik.</p>
            </div>
            <div class="col-md-4">
                <h4>Terintegrasi</h4>
                <p>Terhubung dengan sistem HR dan notifikasi otomatis.</p>
            </div>
        </div>
    </section>

    <footer class="bg-primary text-white text-center py-3">
        &copy; <?= date('Y') ?> SI Cuti Pegawai. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
