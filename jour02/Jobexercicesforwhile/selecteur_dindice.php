<?php

//Sélecteur d’indices : affiche les indices pairs d’une chaîne donnée.
$str = "Je commence à avoir faim !";
$resultat = "";
for ($i = 0; isset($str[$i]); $i++) {
    if ($i % 2 == 0) {
        $resultat .= $str[$i];
    }
}
echo $resultat;

?>
