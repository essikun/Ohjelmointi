<?php

$numerot = array(1,2,3,4,5);

foreach ($numerot as $numero) {
    echo $numero . "<br/>";
    $numerot[] = $numero;
}
print_r($numerot);
?>