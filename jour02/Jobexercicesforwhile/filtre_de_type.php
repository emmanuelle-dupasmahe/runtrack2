<?php
/*Filtre de type : parcours une chaîne
et affiche uniquement les lettres (ignore espaces et ponctuation).*/

$str = "J'ai faim ! Puis-je manger ? Oui, on dirait.";
$car_a_ignorer = " .,?/;!";


for ($i = 0; isset($str[$i]); $i++) {
    $est_a_ignorer = false;
    // Boucle pour vérifier chaque caractère à ignorer
    for ($j = 0; isset($car_a_ignorer[$j]); $j++) {
        if ($str[$i] === $car_a_ignorer[$j]) {
            $est_a_ignorer = true;
            break; 
        }
    }
    // Si le caractère n'est pas dans la liste des caractères à ignorer, on l'affiche
    if (!$est_a_ignorer) {
        echo $str[$i];
    }
}
?>