<?php
class mahasiswa{
    public $nim;
    public $nama;
    public $prodi;
    public $tahun_angkatan;
    public $ipk;

    public function __construct($nim, $nama, $prodi, $tahun_angkatan, $ipk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->tahun_angkatan = $tahun_angkatan;
        $this->ipk = $ipk;
    }

    public function predikat_ipk(){
        if ($this->ipk <2.0) return "Cukup";
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) return "Baik";
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) return "Memuaskan";
        elseif ($this->ipk >= 3.75 && $this->ipk <= 4) return "Cumlaude";
    }
}
?> 