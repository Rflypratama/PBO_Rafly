<?php
class Perulangan {
    public function loop() {
        for ($i = 15; $i > 0; $i--) {
            echo $i;
            echo "<br/>";
        }
    }
}

$objekperulangan = new Perulangan();
echo "Jenis Perulangan Lainnya" . "<br />";
$objekperulangan->loop();
?>
