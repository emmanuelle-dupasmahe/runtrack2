<?php
//affiche les nombres de 0 à 1337 SAUF 26, 37, 88, 1111 et 3233 (c'est malin ^^)
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 26 or $i == 37 or $i == 88 or $i == 1111 or $i == 3233) {
        ;
    } else {
        echo $i . "<br>";
    }
}