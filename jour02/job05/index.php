<?php
//Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
//à la ligne entre chaque nombre (“<br>”).
echo "Les nombres premiers jusqu'à 1000 sont :<br>";

for ($nombre = 2; $nombre <= 1000; $nombre++) {
    $estPremier = true;
    for ($i = 2; $i < $nombre; $i++) {
        if ($nombre % $i == 0) {
            $estPremier = false;
            break;
        }
    }
    if ($estPremier) {
        echo $nombre . "<br>";
    }
}
?>


