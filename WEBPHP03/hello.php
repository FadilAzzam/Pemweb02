<?php
function salam($nama = "Nurul Fikri"){
    echo "Assalamualaikum Apa Kabar Teman !" . $nama;
}
?>
<h1>Selamat Datang Di STT NF</h1>
<P>
<?php
    salam("Dewi Silva");
    echo "<br>";
    salam();
?>