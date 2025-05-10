<?php 
session_start();
if (!isset($_SESSION['is_admin'])) {
    header('Location: auth/login.php');
    exit();
}

include_once "template/top.php";
include_once "template/navbar.php";
include_once "template/sidebar.php";
?>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Form Pengajuan Cuti Pegawai</h4>
        </div>
        <div class="card-body">
            <form action="proses.php" method="post">
                <div class="mb-3">
                    <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
                    <input type="date" class="form-control" name="tanggal_awal" id="tanggal_awal" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                    <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir" required>
                </div>
                <div class="mb-3">
                    <label for="ket" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" name="ket" id="ket" placeholder="Contoh: Cuti tahunan" required>
                </div>
                <div class="d-grid">
                    <button type="submit" name="ajukan_cuti" class="btn btn-success">Ajukan Cuti</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once "template/bottom.php";
?>