<?php
/*"Coder tous les jours, un petit pas à la fois"*/

$str = "Coder tous les jours, un petit pas à la fois";
$resultat = "";

for ($i = 0; $i < strlen($str); $i += 2) {
    $resultat .= $str[$i];
}

echo $resultat;
?>
