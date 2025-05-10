<?php 
session_start();
if (!isset($_SESSION['is_admin'])) {
    header('Location: auth/login.php');
    exit();
}
require_once "dbkoneksi.php";

if($_SESSION['is_admin'] == 0) {
    // USER BIASA
    $nip = $_SESSION['username'];
    $sql_history = "SELECT pengajuan_cuti.*, pegawai.nama FROM pengajuan_cuti 
                    JOIN pegawai ON pengajuan_cuti.pegawai_nip = pegawai.nip 
                    WHERE pengajuan_cuti.pegawai_nip = '$nip'";
    $hc = $dbh->query($sql_history);
    $history_cuti = $hc->fetchAll();
}

if($_SESSION['is_admin'] == 1) {
    // ADMIN
    $sql_history = "SELECT pengajuan_cuti.*, pegawai.nama FROM pengajuan_cuti 
                    JOIN pegawai ON pengajuan_cuti.pegawai_nip = pegawai.nip";
    $hc = $dbh->query($sql_history);
    $history_cuti = $hc->fetchAll();
}

include_once "template/top.php";
include_once "template/navbar.php";
include_once "template/sidebar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>History Cuti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2 class="mb-4">History Pengajuan Cuti Karyawan</h2>
    <table class="table table-bordered table-striped mt-3">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>Nama Pegawai</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Jumlah Cuti</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($history_cuti)) { ?>
                <tr>
                    <td class="text-center" colspan="6">Tidak ada data</td>
                </tr>
            <?php } else { ?>
                <?php foreach ($history_cuti as $row): ?>
                    <tr class="text-center">
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['tanggal_awal']) ?></td>
                        <td><?= htmlspecialchars($row['tanggal_akhir']) ?></td>
                        <td><?= htmlspecialchars($row['jumlah']) ?> Hari</td>
                        <td><?= htmlspecialchars($row['ket']) ?></td>
                        <td>
                            <span class="badge 
                            <?php if ($row['status'] == 'D') {
                                echo 'badge-danger';
                            } elseif ($row['status'] == 'A') {
                                echo 'badge-success';
                            } else {
                                echo 'badge-warning';
                            }
                            ?>">
                                <?php if ($row['status'] == 'D') {
                                    echo 'Declined';
                                } elseif ($row['status'] == 'A') {
                                    echo 'Approved';
                                } else {
                                    echo 'Pending';
                                }
                                ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

<?php
include_once "template/bottom.php";
?>
