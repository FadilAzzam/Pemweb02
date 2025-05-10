<?php
session_start();
if (!isset($_SESSION['is_admin'])) {
    header('Location: auth/login.php');
    exit();
}

require_once "dbkoneksi.php";

if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    // Query untuk menghapus pegawai berdasarkan NIP
    $sql = "DELETE FROM pegawai WHERE nip = ?";
    $st = $dbh->prepare($sql);
    $st->execute([$nip]);

    // Redirect kembali ke halaman daftar pegawai
    header('Location: list_pegawai.php');
    exit();
}
?>