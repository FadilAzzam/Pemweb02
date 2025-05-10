<?php 
session_start();
if (!isset($_SESSION['is_admin'])) {
    header('Location: auth/login.php');
    exit();
}

include_once "template/top.php";
include_once "template/navbar.php";
include_once "template/sidebar.php";

require_once "dbkoneksi.php";
if($_SESSION['is_admin'] == 0) {
    // Ambil data pegawai dari database
    $sql_pegawai = "SELECT * FROM pegawai WHERE nip = $_SESSION[username]";
    $pg = $dbh->query($sql_pegawai);
    $pegawai = $pg->fetchAll();

    $sql_cuti = "SELECT * FROM jatah_cuti WHERE pegawai_nip = $_SESSION[username]";
    $ct = $dbh->query($sql_cuti);
    $cuti = $ct->fetch();
}
else {
    $sql_cuti = "SELECT * FROM jatah_cuti";
    $ct = $dbh->query($sql_cuti);
    $cuti = $ct->fetchAll();
    // jumlahkan semua data di kolom jumlah
    $total_cuti = array_sum(array_column($cuti, 'jumlah'));
    $sql_pakai = "SELECT * FROM pengajuan_cuti WHERE status = 'A'";
    $pk = $dbh->query($sql_pakai);
    $pakai = $pk->fetchAll();
    $total_pakai = array_sum(array_column($pakai, 'jumlah'));
}

?>

<!-- Tampilan dashboard -->
<div class="container mt-5">
    <div class="row text-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body d-flex">
                    <div class="d-flex justify-content-center col-6">
                        <img src="assets/img/team.png" width="100px" alt="">
                    </div>
                    <div class="d-flex flex-column">
                        <?php if($_SESSION['is_admin'] == 0) : ?>
                            <h3 class="card-title fw-bold">Total Cuti Tahun Ini</h3>
                            <p class="card-text display-6">30</p>
                        <?php else : ?>
                            <h3 class="card-title fw-bold">Sisa Cuti Tahun Ini</h3>
                            <p class="card-text display-6">
                                <?php echo $total_cuti; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
            <div class="card-body d-flex">
                    <div class="d-flex justify-content-center col-6">
                        <img src="assets/img/team.png" width="100px" alt="">
                    </div>
                    <div class="d-flex flex-column">
                        <?php if($_SESSION['is_admin'] == 0) : ?>
                            <h3 class="card-title fw-bold">Sisa Cuti Tahun Ini</h3>
                        <?php else : ?>
                            <h3 class="card-title fw-bold">Cuti Terpakai Tahun Ini</h3>
                        <?php endif; ?>
                        <p class="card-text display-6">
                            <?php if($_SESSION['is_admin'] == 0) echo $cuti['jumlah']; ?>
                            <?php if($_SESSION['is_admin'] == 1) echo $total_pakai; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include_once "template/bottom.php";
?>
