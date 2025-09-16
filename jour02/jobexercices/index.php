<?php
//Déclare $temperature = 30;. Affiche "Il fait chaud à Toulon" si la température est ≥ 28, sinon "Température agréable".
$temperature = 30;
if ($temperature >= 28) {
    echo "Il fait chaud à Toulon"."<br>"."<br>";
}
else {
    echo "Température agréable"."<br>"."<br>";
}

//Avec $destination 
//parmi "Les Sablettes", "La Seyne", "St Mandrier", affiche le quai correspondant (1, 2, 3). Utilise switch.

$destination = "La Seyne";
switch ($destination) {
    case "Les Sablettes":
        echo "C'est le quai n°1";
        break;

    case "La Seyne":
        echo "C'est le quai n°2"."<br>"."<br>";
        break;

    case "Saint Mandrier":
        echo "C'est le quai n°3";
        break;

    default:
        echo "Destination incconnue";
}

//notes

$note = 18;

$message = match (true) {
    $note >=16 => "Excellent travail à Toulon !"."<br>"."<br>",
    $note >=10 => "Assez bien continue.",
    default => "A améliorer",
};

echo $message;

//Jours d’ouverture Mayol (switch)
//Lundi–Vendredi → "Ouvert 10h - 19h" ; Samedi → "Ouvert 10h - 20h" ; Dimanche → "Fermé"

$jour="mardi";

switch ($jour) {
    case "lundi":
    case "mardi":
    case "mercredi":
    case "jeudi":
    case"vendredi":
        echo "Ouvert 10h - 19h"."<br>"."<br>";
        break;

    case "samedi":
        echo "Ouvert 10h - 20h"."<br>"."<br>";
        break;

    case "dimanche":
        echo "Fermé"."<br>"."<br>";
        break;

    default:
        echo "Jour invalide"."<br>"."<br>";
}

//$transport ∈ {"Bus", "Bateau"} → message différent pour bus/bateau du réseau Mistral. Cas par défaut si autre valeur.

$transport = "bateau";

switch ($transport) {
    case "bateau":
        echo "Pour prendre le bateau, vous devez vous rendre sur le port de Toulon."."<br>"."<br>";
        break;
    
    case "bus":
        echo "Pour prendre le bus, déplacer-vous près de l'arrêt le plus proche de chez vous."."<br>"."<br>";
        break;
    
    default:
        echo "Ce mode de transport n'est pas gérer par le réseau Mistral."."<br>"."<br>";
}