<?php
class data_nilai {
    private $nama;
    private $kelas;
    private $matakuliah;
    private $nilai;
    public function setnama($nama) {
        $this->nama = $nama;
    }
 
    public function setkelas($kelas) {
        $this->kelas = $kelas;
    }
 
    public function setmatakuliah($matakuliah) {
        $this->matakuliah = $matakuliah;
    }
 
    public function setnilai($nilai) {
        $this->nilai = $nilai;
    }
 
    public function getnama() {
        return $this->nama;
    }

    public function getkelas() {
        return $this->kelas;
    }

    public function getmatakuliah() {
        return $this->matakuliah;
    }

    public function getnilai() {
        return $this->nilai;
    }

    public function luluskuis() {
        return $this->nilai >= 60 ? "Lulus kuis" : "Tidak lulus kuis";
    }
}
$Data1 = array('Aditya', 'SI 2 ', 'PEMOGRAMAN BERBASIS OBJEK', '89');
$Data2 = array('Shinta', 'SI 2', 'PEMOGRAMAN BERBASIS OBJEK', '75');
$Data3 = array('Ineu', 'SI 2', 'PEMOGRAMAN BERBASIS OBJEK', '55');
 
for($i = 1; $i <= 3; $i++) {
    ${"mahasiswa$i"} = new Data_nilai();
    ${"mahasiswa$i"}->setNama(${"Data$i"}[0]);
    ${"mahasiswa$i"}->setKelas(${"Data$i"}[1]);
    ${"mahasiswa$i"}->setMatakuliah(${"Data$i"}[2]);
    ${"mahasiswa$i"}->setNilai(${"Data$i"}[3]);
}
 
for($i = 1; $i <= 3; $i++) {
    echo "Nama : " . ${"mahasiswa$i"}->getNama() . "<br>";
    echo "Kelas : " . ${"mahasiswa$i"}->getKelas() . "<br>";
    echo "Mata Kuliah : " . ${"mahasiswa$i"}->getMataKuliah() . "<br>";
    echo "Nilai : " . ${"mahasiswa$i"}->getNilai() . "<br>";
    echo ${"mahasiswa$i"}->lulusKuis() . "<br><br>";
}
?>