<?php

$nama_depan = "Azzam";
$nama_belakang = "Fadil";
$nama_paling_belakang = "Muhamad";
$umur = "20";
$tb = 200;
$bb = 70;

echo $nama_depan ." ". $nama_paling_belakang;
echo "<br>Nama Saya adalah $nama_belakang dan Saya Berumur $umur tahun";

echo "<br/><br/>";

// Variable System
echo 'Dokumen Root' . $_SERVER
['DOCUMENT_ROOT'];

echo "<br/><br/>";

// Variable Constant
define('PHI' , 3.14);

$r = 8;
$luas = PHI * $r * $r;

echo "Lingkaran dengan jari-jari {$r} cm memiliki luas {$luas} cm^2";
