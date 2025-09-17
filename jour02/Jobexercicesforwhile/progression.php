<?php

/*Consigne : Crée un fichier progression.php qui simule un plan de progression sur 14 jours.

Jours impairs : affiche Jour X : exercice de boucles.
Jours pairs : affiche Jour X : révision et quiz.*/ 

for ($jour = 1; $jour <= 14; $jour++) {
    if ($jour % 2 !== 0) {
        echo "Jour " . $jour . " : exercice de boucles.\n"."<br>"."<br>";
    } else {
        echo "Jour " . $jour . " : révision et quiz.\n"."<br>"."<br>";
    }
}
?>
