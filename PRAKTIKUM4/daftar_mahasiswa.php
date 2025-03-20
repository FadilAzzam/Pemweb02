<?php
require_once 'class_mahasiswa.php';

$mahasiswa_list = [
    new mahasiswa("011", "Astrid Annasya", "Sistem Informasi", 2023, 3.8),
    new mahasiswa("012", "Ahmad Bagus", "Teknik Informatika", 2024, 2.8),
    new mahasiswa("013", "Rizky Adi", "Sistem Informasi", 2021, 3.5),
    new mahasiswa("014", "Dela Amanda", "Teknik Informatika", 2022, 4.0),
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($mahasiswa_list as $i => $mhs){
                    echo "<tr>
                    <td> {$no} </td>
                    <td> {$mhs->$nim} </td>
                    <td> {$mhs->$nama} </td>
                    <td> {$mhs->$prodi} </td>
                    <td> {$mhs->$tahun_angkatan} </td>
                    <td> {$mhs->$ipk} </td>
                    <td> {$mhs->$predikat($mhs->ipk)} </td>
                    ";
                }
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>