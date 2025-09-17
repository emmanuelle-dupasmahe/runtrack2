<?php
/*Filtre de type : parcours une chaîne 
et affiche uniquement les lettres (ignore espaces et ponctuation).*/

$str = "J'ai faim ! Puis-je manger ? Oui, on dirait.";
$car_a_ignorer = " .,?/;!";

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($car_a_ignorer, $str[$i]) === false) {
        echo $str[$i];
    }
}
?>