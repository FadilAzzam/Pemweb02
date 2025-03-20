<?php
require_once 'class_nilaimahasiswa.php';

$mhs1 = new Nilaimahasiswa();
$mhs1->nama = "Budi Santoso";
$mhs1->mata_kuliah = "Pemrograman Web";
$mhs1->nilai_tugas = 80;
$mhs1->nilai_uts = 75;
$mhs1->nilai_uas = 85;

$mhs2 = new Nilaimahasiswa();
$mhs2->nama = "Fauziah Nuraini";
$mhs2->mata_kuliah = "Dasar- dasar Pemrograman";
$mhs2->nilai_tugas = 90;
$mhs2->nilai_uts = 60;
$mhs2->nilai_uas = 88;

$mhs3 = new Nilaimahasiswa();
$mhs3->nama = "Bedu Bahlil";
$mhs3->mata_kuliah = "Tugas Akhir";
$mhs3->nilai_tugas = 60;
$mhs3->nilai_uts = 50;
$mhs3->nilai_uas = 55;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];
?>

<h2 style>Daftar Nilai Mahasiswa</h2>
<table border="1" cellpadding="2" cellspacing="2" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Nilai Tugas</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1; 
        foreach ($ar_mahasiswa as $obj){
        ?>
        <tr>
            <td><?=$no?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>