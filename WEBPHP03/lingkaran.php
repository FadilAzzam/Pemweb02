<?php
class Lingkaran{
    public $jari;
    public const PHI = 3.14;

    public function __construct($jari){
        $this->jari = $jari;
    }

    public function getluas(){
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
    }

    public function getkeliling(){
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    } 

    public function cetak(){
        echo "Lingkaran dengan jari-jari:" . $this->jari;
        echo "<br>Luas lingkaran= " . $this->getluas();
        echo "<br>Keliling lingkaran= " . $this->getkeliling();
    }
}
?>