<?php
$i = 0;
while ($i < 101) 
{
    echo $i . "<br>";
    $i = $i + 10;
}
 
$a = 1;
while ($a <= 10) {
    if ($a == 7) {
        $a++; 
        continue;
    }
    echo $a . "<br>";
    $a++;
}
?>