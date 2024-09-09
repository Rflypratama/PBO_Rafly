<?php
class Pembeli {
    var $nama;
    var $kartu;
    var $belanja;
    var $diskon;
    var $biaya;
 
 
    function hitungDiskon($kartu, $belanja) {
        $diskon = 0;
        if ($kartu == "Memiliki") {
            if ($belanja > 500000) {
                $diskon = 50000;
            } elseif ($belanja > 100000) {
                $diskon = 15000;
            }
        } elseif ($kartu == "Tidak Memiliki" && $belanja > 100000) {
            $diskon = 5000;
        }
 
        return $diskon;
    }
 
 
    function tampilkanHasil($data) {
        foreach ($data as $p) {
            $diskon = $this->hitungDiskon($p["kartu"], $p["belanja"]);
            $biaya = $p["belanja"] - $diskon;
            echo "Pembeli: " . $p["nama"] . ", kartu: " . $p["kartu"] . ", Diskon: " . $diskon . ", Biaya: " . $biaya . "<br>";
        }
    }
}
 
$pembeli = array(
    array("nama" => "Pembeli 1", "kartu" => "Memiliki", "belanja" => 200000),
    array("nama" => "Pembeli 2", "kartu" => "Memiliki", "belanja" => 570000),
    array("nama" => "Pembeli 3", "kartu" => "Tidak Memiliki", "belanja" => 120000),
    array("nama" => "Pembeli 4", "kartu" => "Tidak Memiliki", "belanja" => 90000),
);
 
 
$latihan = new Pembeli();
$latihan->tampilkanHasil($pembeli);
 
?>