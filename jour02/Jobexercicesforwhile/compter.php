<?php
//Compter les caractères
$str = "Compter les caractères";
$compteur = 0;
for ($i = 0; $i < strlen($str); $i++) {
    $compteur++;
}
echo $compteur." ".strlen($str);