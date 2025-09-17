<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$i = 0;
while (isset($str[$i])) {
    $i++;
}
$dernier_indice = $i - 1;
for ($j = $dernier_indice; $j >= 0; $j--) {
    echo $str[$j];
}