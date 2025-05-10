<?php 
// variable untuk koneksi database
$host = "localhost";
$dbname = "dbcuti";
$username = "root";
$password = "";
$charset = "utf8mb4";

// buat dns dan opsi akses database
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// buat objek koneksi ke database 
try {
    $dbh = new PDO($dsn, $username, $password, $options);
    // echo "Koneksi berhasil";
} catch (\Throwable $e) {
    echo "Database error: " . $e;
}