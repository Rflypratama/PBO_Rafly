<?php

class Guru {
    public $nama_nama = array("de", "ce", "ve", "re");
    public $nama_guru;
    public $NIK;
    public $jabatan;
    public $alamat;
}

class Murid {
    public $nama_siswa;
    public $NIS;
    public $kelas;
    public $alamat;
}

class Kurikulum {
    public $tahun_akademik;
    public $sks_matkul;
}

class Mobil {
    public $jumlahRoda = 4;
    public $warna = "Merah";
    public $bahanbakar = "Pertamax";
    public $harga = 120000000;
    public $merk = 'A';

    public function statusHarga() {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }
}

$objekBMW = new Mobil(); 
$objekTesla = new Mobil();
$objekAudi = new Mobil();

?>
