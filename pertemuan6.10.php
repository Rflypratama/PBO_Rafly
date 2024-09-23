<?php
class SegitigaBintang {
    private $t; 
    private $arraySegitiga = []; 
    public function setTinggi($t) {
        $this->t = $t;
    }
 
    public function getTinggi() {
        return $this->t;
    }
    public function cetakSegitigaSamaKaki() {
        $this->arraySegitiga = []; 
        for ($i = 1; $i <= $this->t; $i++) {
            $baris = ""; 
            for ($j = $this->t; $j > $i; $j--) {
                $baris .= "&nbsp;&nbsp;"; 
            }
            for ($k = 1; $k <= $i * 2 - 1; $k++) {
                $baris .= "*"; 
            }
            $this->arraySegitiga[] = $baris; 
        }
        return $this->arraySegitiga;
    }
 
    public function cetakSegitigaKanan() {
        $this->arraySegitiga = []; 
       
        for ($i = 1; $i <= $this->t; $i++) {
            $baris = ""; 
            for ($j = 1; $j <= $i; $j++) {
                $baris .= "*"; 
            }
            $this->arraySegitiga[] = $baris;
        }
 
        for ($i = $this->t - 1; $i >= 1; $i--) {
            $baris = ""; 
            for ($j = 1; $j <= $i; $j++) {
                $baris .= "*"; 
            }
            $this->arraySegitiga[] = $baris; 
        }
 
        return $this->arraySegitiga;
    }
    public function cetakSegitigaKiri() {
        $this->arraySegitiga = []; 
        for ($i = 1; $i <= $this->t; $i++) {
            $baris = ""; 
            for ($j = $this->t; $j > $i; $j--) {
                $baris .= "&nbsp;&nbsp;"; 
            }
            for ($k = 1; $k <= $i; $k++) {
                $baris .= "*"; 
            }
            $this->arraySegitiga[] = $baris; 
        }
 
        for ($i = $this->t - 1; $i >= 1; $i--) {
            $baris = ""; 
            for ($j = $this->t; $j > $i; $j--) {
                $baris .= "&nbsp;&nbsp;"; 
            }
            for ($k = 1; $k <= $i; $k++) {
                $baris .= "*"; 
            }
            $this->arraySegitiga[] = $baris; 
        }
 
        return $this->arraySegitiga;
    }
 
    public function displayArraySegitiga($arraySegitiga) {
        foreach ($arraySegitiga as $baris) {
            echo $baris . "<br>"; 
        }
    }
}
 
$segitiga = new SegitigaBintang();
$segitiga->setTinggi(5); 
 
echo "<br>Segitiga Sama Kaki:<br>";
$segitigaArray = $segitiga->cetakSegitigaSamaKaki();
$segitiga->displayArraySegitiga($segitigaArray);
 
echo "<br>Segitiga Kanan:<br>";
$segitigaArray = $segitiga->cetakSegitigaKanan();
$segitiga->displayArraySegitiga($segitigaArray);
 
echo "<br>Segitiga Kiri:<br>";
$segitigaArray = $segitiga->cetakSegitigaKiri();
$segitiga->displayArraySegitiga($segitigaArray);
?>