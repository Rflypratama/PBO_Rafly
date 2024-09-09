<?php
class Kendaraan {
    var $statusHarga;
    var $statusBBM;
    var $hargaBekas;
    var $jumlahPajak;
    var $hariOperasi;
    var $tahunPembuatan = 2004;
    var $bahanBakar = "Premium";
    var $harga = 45000000;
    var $platNomor = 12345;
 
    function statusHarga() {
        if ($this->harga > 50000000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }
 
    function statusBBM() {
        if ($this->bahanBakar == "Premium" && $this->tahunPembuatan < 2005) {
            return "Mendapatkan Subsidi";
        } else {
            return "Tidak ada subsidi";
        }
    }
 
    function hargaBekas() {
        if ($this->tahunPembuatan > 2005) {
            return $this->harga * 0.20;
        } elseif ($this->tahunPembuatan >= 2000 && $this->tahunPembuatan <= 2005) {
            return $this->harga * 0.30;
        } else {
            return $this->harga * 0.40;
        }
    }
 
    function hitungPajak() {
        if ($this->tahunPembuatan < 2017) {
            return $this->harga * 0.025;
        }
        return 0;
    }
 
    function hariOperasi() {
        if ($this->platNomor % 2 === 0) {
            return implode(", ", ["Selasa", "Kamis", "Sabtu"]);
        } else {
            return implode(", ", ["Senin", "Rabu", "Jumat", "Minggu"]);
        }
    }
}
 
$kendaraan = new Kendaraan();
 
echo "Status Harga: " . $kendaraan->statusHarga() ;
echo "<br/>";
echo "Status BBM: " . $kendaraan->statusBBM() ;
echo "<br/>";
echo "Harga Bekas: " . $kendaraan->hargaBekas() ;
echo "<br/>";
echo "Jumlah Pajak: " . $kendaraan->hitungPajak() ;
echo "<br/>";
echo "Hari Operasi: " . $kendaraan->hariOperasi();
?>