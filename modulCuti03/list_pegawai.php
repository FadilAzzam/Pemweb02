<?php 
session_start();
if (!isset($_SESSION['is_admin'])) {
    header('Location: auth/login.php');
    exit();
}

include_once "template/top.php";
include_once "template/navbar.php";
include_once "template/sidebar.php";

// Ambil data pegawai dari database
require_once "dbkoneksi.php";
$sql = "SELECT * FROM pegawai";
$st = $dbh->query($sql);
$pegawai = $st->fetchAll();

?>

<div class="content-wrapper">
    <section class="content-header">
        <h1 class="mb-4">Daftar Pegawai</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-body table-responsive">
                        <table class="table table-hover text-center" id="pegawaiTable">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Gender</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Telepon</th>
                                    <th>Divisi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($pegawai as $row) : ?>
                                <tr>
                                    <td><?= $row['nip'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?php if ($row['gender'] == 'L') { echo "Laki-laki"; } else { echo "Perempuan"; } ?></td>
                                    <td><?= $row['tmp_lahir'] ?></td>
                                    <td><?= $row['tgl_lahir'] ?></td>
                                    <td><?= $row['telpon'] ?></td>
                                    <!-- jika divisi id = 1 maka hrd, 2 it, 3 finance, 4 marketing -->
                                    <td>
                                        <?php 
                                        if ($row['divisi_id'] == 1) {
                                            echo "HRD";
                                        } elseif ($row['divisi_id'] == 2) {
                                            echo "IT";
                                        } elseif ($row['divisi_id'] == 3) {
                                            echo "Finance";
                                        } elseif ($row['divisi_id'] == 4) {
                                            echo "Marketing";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="delete_pegawai.php?nip=<?= $row['nip'] ?>" 
                                        onclick="return confirm('Yakin ingin menghapus pegawai ini?')" 
                                        class="btn btn-danger btn-sm">
                                        Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
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