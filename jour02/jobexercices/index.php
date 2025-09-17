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
    case "vendredi":
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

//Résultat RCT (match)
//$resultat ∈ {"Victoire", "Défaite", "Nul"} → message adapté.résultat RCT (match)

$résultat = "Victoire";

$message = match ($résultat) {
    "Victoire" => "Toulon vainqueur !" ."<br>"."<br>",
    "Défaite" => "Toulon a perdu !"."<br>"."<br>",
    "Nul" => "Match nul !"."<br>"."<br>",
    default => " ? "."<br>"."<br>",
};

echo $message;

//Quai + heure (switch + echo)
//Selon $destination (3 cases), affiche aussi un horaire indicatif (ex. "Départ toutes les 20 min").
$destination = "Six-Fours";
switch ($destination) {
    case "Six-Fours":
        echo "C'est le quai n°2 à 13H07. Départ toutes les heures."."<br>"."<br>";
        break;
    
    case "Toulon":
        echo "C'est le quai n°3 à 13H23. Départ toutes les 20 minutes."."<br>"."<br>";
        break;
    
    case "Paris":
        echo "C'est le quai n°1 voie E à 11h04. Départ imminent."."<br>"."<br>";
        break;

    default:
        echo "Cette destination n'est pas desservie."."<br>"."<br>";
}

/*Réduction à Mayol (match)
$carte ∈ {"Étudiant", "Senior"} → 10% / 15% ; défaut 0%.*/

$carte = "Senior";

$message = match ($carte) {
    "Etudiant" => "Vous avez une réduction de 10%." ."<br>"."<br>",
    "Senior" => "Vous avez une réduction de 15%."."<br>"."<br>",
    default => " Plein Tarif "."<br>"."<br>",
};
echo $message;

/*Météo Toulon (switch)
$meteo ∈ {"Soleil", "Pluie", "Vent"} → message adapté (plage du Mourillon, coder au centre, attention au Mistral).*/

$meteo = "Vent";

switch ($meteo) {
    case "Vent":
        echo "plage du Mourillon, attention au Mistral "."<br>"."<br>";
        break;
    
    case "Soleil":
        echo "journée ensoleillée."."<br>"."<br>";
        break;
    
    case "Pluie":
        echo "pluie prenez vos parapluie."."<br>"."<br>";
        break;

    default:
        echo "belle journée."."<br>"."<br>";
}
/*Billet RCT (match)
$categorie ∈ {"Enfant", "Adulte", "VIP"} → prix 10 / 20 / 50 ; affiche "Prix du billet : X €".*/

$categorie = "Adulte";
$message = match ($categorie) {
    "Enfant" => "Prix du billet : 10 €."."<br>"."<br>",
    "Adulte" => "Prix du billet : 20 €."."<br>"."<br>",
    "VIP" => "Prix du billet : 50 €."."<br>"."<br>",
    default =>"Prix du billet : 20 €."."<br>"."<br>", 
};
echo $message;

/*Jours de formation DWWM (switch)
Lundi–Vendredi → "Cours DWWM" ; Samedi/Dimanche → "Repos".*/

$jour = "lundi";
switch ($jour) {
    case "lundi":
    case "mardi":
    case "mercredi":
    case "jeudi":
    case "vendredi":
        echo "Cours DWWM."."<br>"."<br>";
        break;
    case "samedi":
    case "dimanche":
        echo "Repos."."<br>"."<br>";
        break;
    default:
        echo "Jour invalide"."<br>"."<br>";
}

/*Itinéraire rapide (switch)
$ligne ∈ {"Bus 23", "Bus 40", "Bateau"} → affiche la destination (Cap Brun, Mourillon, La Seyne).*/ 

$ligne = "Bateau";
switch ($ligne) {
    case "Bus 23":
        echo "Destination le Cap Brun."."<br>"."<br>";
        break;
    case "Bus 40":
        echo "Destination le Mourillon."."<br>"."<br>";
        break;
    case  "Bateau":
        echo "Destination La Seyne."."<br>"."<br>";
        break;
    default :
    echo "cette ligne de bus n'est pas répertoriée.";

}