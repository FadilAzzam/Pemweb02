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
    // ambil data cuti dari database selain pegawai yang login
    $sql = "SELECT * FROM pengajuan_cuti WHERE status = 'P' AND pegawai_nip != $_SESSION[username]";
    $st = $dbh->query($sql);
    $data_cuti = $st->fetchAll();
}
$sql = "SELECT * FROM pengajuan_cuti WHERE status = 'P'";
$st = $dbh->query($sql);
$data_cuti = $st->fetchAll();

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1 class="mb-4">Verifikasi Cuti Karyawan</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Divisi</th>
                                <th>Tgl Awal</th>
                                <th>Tgl Akhir</th>
                                <th>Alasan</th>
                                <th>Aksi</th>
                            </tr>
                            <?php if (empty($data_cuti)) { ?>
                                <tr>
                                    <td class="text-center" colspan="8">Tidak ada data</td>
                                </tr>
                                <?php }else { ?>
                                    <?php $no = 1;
                                    foreach ($data_cuti as $cuti): 
                                        ?>
                                    <tr class="text-center">
                                        <td><?= $no++ ?></td>
                                        <td><?= $cuti['pegawai_nip'] ?></td>
                                        <td>
                                            <?php 
                                            // cek dari pegawai_nip di tabel pegawai, ambil divisinya
                                            $sql = "SELECT * FROM pegawai WHERE nip = ?";
                                            $st = $dbh->prepare($sql);
                                            $st->execute([$cuti['pegawai_nip']]);
                                            $pegawai = $st->fetch();
                                            $cuti['divisi_id'] = $pegawai['divisi_id'];
                                            
                                            if ($cuti['divisi_id'] == 1) {
                                                echo "HRD";
                                            } elseif ($cuti['divisi_id'] == 2) {
                                                echo "IT";
                                            } elseif ($cuti['divisi_id'] == 3) {
                                                echo "Finance";
                                            } elseif ($cuti['divisi_id'] == 4) {
                                                echo "Marketing";
                                            }
                                            ?>
                                        </td>
                                        <td><?= $cuti['tanggal_awal'] ?></td>
                                        <td><?= $cuti['tanggal_akhir'] ?></td>
                                        <td><?= $cuti['ket'] ?></td>
                                        <td>
                                            <!-- Form untuk menerima cuti -->
                                            <form method="post" action="proses.php" style="display:inline;">
                                                <input type="hidden" name="id" value="<?= $cuti['id'] ?>">
                                                <input type="hidden" name="aksi" value="A">
                                                <button class="btn btn-sm btn-success" type="submit" name="terima">
                                                    <i class="fa fa-check"></i> Terima
                                                </button>
                                            </form>

                                            <!-- Form untuk menolak cuti -->
                                            <form method="post" action="proses.php" style="display:inline;">
                                                <input type="hidden" name="id" value="<?= $cuti['id'] ?>">
                                                <input type="hidden" name="aksi" value="D">
                                                <button class="btn btn-sm btn-danger" type="submit" name="tolak">
                                                    <i class="fa fa-times"></i> Tolak
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include_once "template/bottom.php";
?>
