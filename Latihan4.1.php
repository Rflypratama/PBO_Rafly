<?php
class kendaraan
{
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merek;

    function statusHarga()
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }

    function setmerek($x)
    {
        $this->merek = $x;
    }

    function setHarga ($x)
    {
        $this->harga = $x;
    }
} 

$kendaraan1 = new kendaraan();
$kendaraan1->setmerek ('Yamaha Mio');
$kendraaan1->setharga('10000000');
echo $kendaraan1->statusharga();
?>