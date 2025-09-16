<?php
//Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
//à la ligne entre chaque nombre (“<br>”).
function estPremier($nombre) {
    if ($nombre <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Les nombres premiers jusqu'à 1000 sont :<br>";
for ($i = 0; $i <= 1000; $i++) {
    if (estPremier($i)) {
        echo $i . "<br>";
    }
}

?>

