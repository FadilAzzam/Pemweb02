<?php
session_start();
require_once "dbkoneksi.php";

// Pastikan session tersedia
if (!isset($_SESSION['is_admin']) || !isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit;
}

// Jika bukan admin
if ($_SESSION['is_admin'] == 0) {
    $sql = "SELECT * FROM pegawai WHERE nip = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_SESSION['username']]);
    $pegawai = $st->fetch();
} else {
    $sql = "SELECT * FROM user WHERE username = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$_SESSION['username']]);
    $user = $st->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f3f6;
        }
        .profile-card {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="profile-card">
        <h3 class="text-center mb-4">Profil Saya</h3>
        <div class="text-center mb-4">
            <!-- Placeholder foto profil -->
            <img src="<?php if($_SESSION['is_admin'] == 0) 
                if ($pegawai['foto']) echo $pegawai['foto'];
                else echo 'assets/img/user.png';
            else echo 'assets/img/user.png'; ?>" 
            alt="Foto Profil" class="rounded-circle img-thumbnail" width="100">
        </div>
        <ul class="list-group list-group-flush">
            <?php if($_SESSION['is_admin'] == 0) : ?>
                <li class="list-group-item"><strong>NIP:</strong> <?= htmlspecialchars($pegawai['nip']) ?></li>
            <?php endif; ?>
            <li class="list-group-item"><strong>Nama:</strong> <?= htmlspecialchars( ($_SESSION['is_admin'] == 0) ? $pegawai['nama'] : $user['username']) ?></li>
            <?php if($_SESSION['is_admin'] == 1) : ?>
                <li class="list-group-item"><strong>Password:</strong> <?= htmlspecialchars($user['password']) ?></li>
                <li class="list-group-item"><strong>Role:</strong> Admin</li>
            <?php endif; ?>
             <?php if($_SESSION['is_admin'] == 0) : ?>
                <li class="list-group-item"><strong>Divisi: </strong><?php if ($pegawai['divisi_id'] == 1) echo 'HR';
                    elseif ($pegawai['divisi_id'] == 2) echo 'IT'; elseif ($pegawai['divisi_id'] == 3) echo 'Finance'; elseif ($pegawai['divisi_id'] == 4) echo 'Marketing'; ?></li>
                <li class="list-group-item"><strong>Alamat:</strong> <?= htmlspecialchars($pegawai['alamat']) ?></li>
                <li class="list-group-item"><strong>No Telepon:</strong> <?= htmlspecialchars($pegawai['telpon']) ?></li>
            <?php endif; ?>
        </ul>
        <div class="mt-4 text-center">
            <a href="index.php" class="btn btn-primary">Kembali ke Dashboard</a>
            <a href="auth/logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>