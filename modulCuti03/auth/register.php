<?php
session_start();
if (!isset($_SESSION['is_admin']) == 1) {
    header('Location: auth/login.php');
    exit();
}

require_once "../dbkoneksi.php";

// ambil data dari table divisi
$sql = "SELECT * FROM divisi";
$st = $dbh->query($sql);
$divisi = $st->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      overflow: hidden;
    }
    .login-container {
      min-height: 100vh;
    }
    .image-section {
      position: relative;
      background: url('../assets/img/register.png') center/cover no-repeat;
      opacity: 0.5;
      height: 100%;
    }
    .image-wrapper {
      position: relative;
      height: 100%;
    }
  </style>
</head>
<body>
  <div class="container-fluid login-container d-flex flex-md-row flex-column p-0">
    <!-- Form Section -->
    <div class="col-md-8 p-5">
      <h2 class="fw-semibold mb-2">Register</h2>
      <p class="mb-4 text-muted">Yuk, daftarkan pegawai baru dengan mengisi formulir berikut. Pastikan semua data benar sebelum menyimpan.</p>
      <form action="../proses.php" method="post">
        <div class="row">
          <div class="mb-3">
            <input type="text" class="form-control" name="nip" placeholder="NIP Pegawai" minlength="5" required>
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-md-6">
            <input type="text" class="form-control" name="nama" placeholder="Nama Pegawai" required>
          </div>
          <div class="mb-3 col-md-6">
            <input type="text" class="form-control" name="telpon" placeholder="Nomor Handphone" required minlength="11">
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-md-6">
            <input type="text" class="form-control" name="tmp_lahir" placeholder="Tempat Lahir" required>
          </div>
          <div class="mb-3 col-md-6">
            <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" required>
          </div>
        </div>
        <div class="mb-2">
          <select name="divisi" id="divisi" class="form-select">
            <?php 
            foreach ($divisi as $row) : ?>
              <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="d-flex justify-content-around mb-2">
          <div class="form-check">
            <input name="gender" id="gender_0" type="radio" class="form-check-input" value="L">
            <label for="gender_0">Laki-Laki</label>
          </div>
          <div class="form-check">
            <input name="gender" id="gender_1" type="radio" class="form-check-input" value="P">
            <label for="gender_1">Perempuan</label>
          </div>
        </div>
        <div class="mb-3">
          <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat" required></textarea>
        </div>
        <button type="submit" name="register" class="btn btn-primary w-100">Daftar</button>
      </form>
    </div>

    <!-- Image + Text Section -->
    <div class="col-md-4 d-none d-md-block p-0">
      <div class="image-wrapper">
        <div class="image-section"></div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
