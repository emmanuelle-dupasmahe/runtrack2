<?php
//affiche les nombres de 0 à 1337 SAUF 26, 37, 88, 1111 et 3233 (c'est malin ^^)
for ($i = 0; $i <= 1337; $i++) {
    if ($i != 26 && $i != 37 && $i != 88 and $i != 1111) {
        echo $i . "<br>";
    }
}