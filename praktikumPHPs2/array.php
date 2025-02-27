<?php
$list_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

/* index dimulai dari 0 */

echo $list_buah[2];
echo "<br>list berisi " , count($list_buah), " buah";

// mencetak seluruh nilai di dalam array
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// menambahkan nilai array baru
array_push($list_buah, "Durian");
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// menghapus nilai array berdasarkan index
unset($list_buah[1]);
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// mengubah nilai array berdasarkan index
$list_buah[0] = "Nanas";
echo "<ol>";
foreach ($list_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// mencetak seluruh nilai array beserta indexnya
echo "<ul>";
foreach ($list_buah as $index => $buah) {
    echo "<li>Buah dengan Index $index adalah $buah</li>";
}
echo "</ul>";

