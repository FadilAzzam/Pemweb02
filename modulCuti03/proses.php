<?php 
require_once "dbkoneksi.php";

if(isset($_POST['register'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $telpon = $_POST['telpon'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $divisi = $_POST['divisi'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $query_pegawai = $dbh->prepare("INSERT INTO pegawai (nip, nama, gender, tmp_lahir, tgl_lahir, telpon, alamat, divisi_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $query_pegawai->execute([$nip, $nama, $gender, $tmp_lahir, $tgl_lahir, $telpon, $alamat, $divisi]);
    
    $query_user = $dbh->prepare("INSERT INTO user (username, password, is_admin) VALUES (?, ?, ?)");
    $query_user->execute([$nip, $nip, 0]);
    
    $query_cuti = $dbh->prepare("INSERT INTO jatah_cuti (tahun, jumlah, pegawai_nip) VALUES (?, ?, ?)");
    $query_cuti->execute([date('Y'), 30, $nip]);

    header("Location: list_pegawai.php");
}

if(isset($_POST['register-admin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $is_admin = 1;

    $query = $dbh->prepare("INSERT INTO user (username, password, is_admin) VALUES (?, ?, ?)");
    $query->execute([$username, $password, $is_admin]);

    header("Location: auth/login.php"); 
}

if(isset($_POST['login'])) {
    $username = $_POST['nip'];
    $password = $_POST['password'];

    $query = $dbh->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $query->execute([$username, $password]);
    $user = $query->fetch();

    if($user) {
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_admin'] = $user['is_admin'];
        header("Location: dashboard.php");
    }
     else {
        header("Location: auth/login.php");
    }
}

if(isset($_POST['ajukan_cuti'])) {
    session_start();
    $tanggal_awal = $_POST['tanggal_awal'];
    $tanggal_akhir = $_POST['tanggal_akhir'];
    $ket = $_POST['ket'];
    $nip = $_SESSION['username'];
    $status = 'Pending';
    $ta = new DateTime($tanggal_awal);
    $tb = new DateTime($tanggal_akhir);
    $jumlah_cuti = $ta->diff($tb)->days;

    $query = $dbh->prepare("INSERT INTO pengajuan_cuti (pegawai_nip, tanggal_awal, tanggal_akhir, ket, status, jumlah) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$nip, $tanggal_awal, $tanggal_akhir, $ket, $status, $jumlah_cuti]);
    header("Location: history_cuti.php");
}

if(isset($_POST['terima'])) {
    $id = $_POST['id'];
    $query_cuti = $dbh->prepare("UPDATE pengajuan_cuti SET status = 'A' WHERE id = ?");
    $query_jumlah = $dbh->prepare("UPDATE jatah_cuti SET jumlah = jumlah - (SELECT jumlah FROM pengajuan_cuti WHERE id = ?) WHERE pegawai_nip = (SELECT pegawai_nip FROM pengajuan_cuti WHERE id = ?)");
    $query_cuti->execute([$id]);
    $query_jumlah->execute([$id, $id]);
    header("Location: verifikasi_cuti.php");
}

if(isset($_POST['tolak'])) {
    $id = $_POST['id'];
    $query_cuti = $dbh->prepare("UPDATE pengajuan_cuti SET status = 'D' WHERE id = ?");
    $query_cuti->execute([$id]);
    header("Location: verifikasi_cuti.php");
}