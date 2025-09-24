<?php

// Fonction qui génère un mot de passe aleatoire

function genererMotDePasse($longueur) {

    $chaine_caractere = "abcXYZ123mnu!@#";
    $mot_de_passe = "";
    
    $taille_chaine = 0;
    
    $i = 0;
    while(isset($chaine_caractere[$i])) {
        $taille_chaine++;
        $i++;
    }

    $i = 0;
    while ($i < $longueur) {
        
        $index_aleatoire = ($i * 7 + 13) % $taille_chaine;
        $mot_de_passe .= $chaine_caractere[$index_aleatoire];
        $i++;
    }
    
    return $mot_de_passe;
}

$longueur_desiree = 12;
$motDePasseCree = genererMotDePasse($longueur_desiree);
echo "Le mot de passe généré est : " . $motDePasseCree;

?>