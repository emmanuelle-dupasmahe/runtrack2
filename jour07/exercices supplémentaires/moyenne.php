<?php
function moyenne_trois(float $nombre1, float $nombre2, float $nombre3){
    $somme = $nombre1 + $nombre2 + $nombre3;
    $resultat = $somme / 3;
    return $resultat;
}
$moyenne = moyenne_trois(20,10,11);
echo $moyenne;