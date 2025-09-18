<?php
$prenoms = ["Jeremy", "Leaticia", "Alphonse", "Maya", "Octave", "Nina", "Stéphane", "Céline", "Gustave"];
$cible ="Maya";
$trouve = false;

if (empty($cible)) {
    echo "La cible de recherche est vide. Veuillez entrer un prénom à rechercher.";
} else {
    foreach ($prenoms as $prenom) {
        if ($prenom == $cible) {
            $trouve = true;
            break;
        }
    }

    if ($trouve) {
        echo "Trouvé : " . $cible . " se trouve dans la liste.";
    } else {
        echo "Non trouvé : " . $cible . " ne se trouve pas dans la liste.";
    }
}