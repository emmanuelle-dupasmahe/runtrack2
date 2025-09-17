<?php
/* " Affiche les 10 premiers nombres pairs.*/ 
for ($i = 1; $i <= 10; $i++) {
    $pair = $i * 2;
    echo "Nombre pair : $pair <br>"."<br>"."<br>";
}

/*Crée un fichier entrainement.php. Écris un script qui affiche :

Séance n°1 terminée  
Séance n°2 terminée  
... jusqu’à Séance n°12 terminée*/ 

for ($i = 1; $i <= 12; $i++) {
    echo "Séance n°" . $i . " terminée\n";
}
