<?php
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga=350000000;
    var $merek;
    var $status;

    function statusHarga()
    {
        if (this->harga > 50000000) {
        $status = "Mahal"; }
        else {$status = "Murah";}
        return $status;
    }
    
}
$objekKendaraan = new kendaraan;
$objekKendaraan1 = new kendaraan;
$objekKendaraan1 ->harga=1000000;
$objekKendaraan1 ->tahunPembuatan = 1999;
echo "Status Harga :".$objekKendaraan ->statusHarga();

$objekKendaraan2= new Kendaraan;
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;
echo "<br>";
echo "Status BBM: ".$objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: ".$objekKendaraan2->hargaSecondKendaraan();
?>

