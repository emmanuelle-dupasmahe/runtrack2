<?php
//Faire un algorithme qui affiche un triangle de 5 de hauteur. Cette dimension devra être
//stockée dans une variable $hauteur, modifiable facilement.
$hauteur = 5;
for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo "&nbsp;&nbsp;"; // Un espace insécable
    }
    for ($k = 1; $k <= (2 * $i) - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
?>