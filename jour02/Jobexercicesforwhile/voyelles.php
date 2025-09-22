<?php
$str = "Apprendre PHP demande de la pratique";
$voyelles = "aeiouyAEIOUY";


for ($i = 0; isset($str[$i]); $i++) {
    
    for ($j = 0; isset($voyelles[$j]); $j++) {
        // Si le caractère de la chaîne correspond à une voyelle
        if ($str[$i] === $voyelles[$j]) {
            echo $str[$i];
            break; // On sort de la boucle interne
        }
    }
}
?>