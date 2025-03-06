<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    echo "<p>Nama : $nama</p>";
    echo "<p>Mata Kuliah : $matkul</p>";
    echo "<p>Nilai UTS : $nilai_uts</p>";
    echo "<p>Nilai UAS : $nilai_uas</p>";
    echo "<p>Nilai Tugas : $nilai_tugas</p>";

    // Hitung Nilai Akhir
    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    // Cek Kelulusan
    if ($nilai_total > 55) {
        echo "<h1>$nama Dinyatakan Lulus</h1>";
    } else {
        echo "<h1>$nama Tidak Lulus</h1>";
    }

    // Menentukan Grade sesuai tabel
    if ($nilai_total >= 85 && $nilai_total <= 100) {
        $grade = "A";
    } elseif ($nilai_total >= 70 && $nilai_total < 85) {
        $grade = "B";
    } elseif ($nilai_total >= 56 && $nilai_total < 70) {
        $grade = "C";
    } elseif ($nilai_total >= 36 && $nilai_total < 55) {
        $grade = "D";
    } elseif ($nilai_total >= 0 && $nilai_total < 35) {
        $grade = "E";
    } else {
        $grade = "I"; // Invalid nilai
    }

    // Menentukan Predikat menggunakan SWITCH
    switch ($grade) {
        case "A":
            $predikat = "Sangat Memuaskan";
            break;
        case "B":
            $predikat = "Memuaskan";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "E":
            $predikat = "Sangat Kurang";
            break;
        default:
            $predikat = "Tidak Ada";
            break;
    }

    // Tampilkan hasil nilai siswa dalam tabel
    echo "<h3>Hasil Perhitungan Nilai</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <th>Nilai Akhir</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
            <tr>
                <td>$nilai_total</td>
                <td>$grade</td>
                <td>$predikat</td>
            </tr>
          </table>";

    // Tampilkan Tabel Grade
    echo "<h3>Tabel Grade Nilai</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <th>No</th>
                <th>Range Nilai</th>
                <th>Grade</th>
            </tr>
            <tr><td>1</td><td>0 s/d 35</td><td>E</td></tr>
            <tr><td>2</td><td>36 s/d 55</td><td>D</td></tr>
            <tr><td>3</td><td>56 s/d 69</td><td>C</td></tr>
            <tr><td>4</td><td>70 s/d 84</td><td>B</td></tr>
            <tr><td>5</td><td>85 s/d 100</td><td>A</td></tr>
            <tr><td>6</td><td>Kurang dari 0, atau lebih dari 100</td><td>I</td></tr>
          </table>";

    // Tampilkan Tabel Predikat
    echo "<h3>Tabel Predikat Nilai</h3>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <th>No</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
            <tr><td>1</td><td>E</td><td>Sangat Kurang</td></tr>
            <tr><td>2</td><td>D</td><td>Kurang</td></tr>
            <tr><td>3</td><td>C</td><td>Cukup</td></tr>
            <tr><td>4</td><td>B</td><td>Memuaskan</td></tr>
            <tr><td>5</td><td>A</td><td>Sangat Memuaskan</td></tr>
            <tr><td>6</td><td>I</td><td>Tidak Ada</td></tr>
          </table>";
}
?>