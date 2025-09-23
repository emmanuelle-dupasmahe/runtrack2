<?php
//fonction qui génère un mot de passe aléatoire 
//qui doit être d'au moins 12 caractères avec une majuscule, 
//1 chiffre et 1 caractère spécial (norme de l'ANSSI)

function genererMotDePasse($longueur){
    
    $minuscule = "abcdefghijklmnopqrstuvwxyz";
    $majuscule = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $chiffre = "0123456789";
    $caractere_special = "!@#$%^&*()_+-=[]{}|;:,.<>?";

    $mot_de_passe = "";
    $taille_chaine = 0;

    for ($i = 0; isset($minuscule[$i]); $i++) {
        $taille_chaine++;
    }
    for ($i = 0; isset($majuscule[$i]); $i++) {
        $taille_chaine++;
    }
    for ($i = 0; isset($chiffre[$i]); $i++) {
        $taille_chaine++;
    }
    for ($i = 0; isset($caractere_special[$i]); $i++) {
        $taille_chaine++;
    }
    for ($i = 0; $i < $longueur; $i++) {
        $index = $i % $taille_chaine;
        $mot_de_passe .= $minuscule.$majuscule.$chiffre.$caractere_special;
    }
    
    return $mot_de_passe;
}

$motDePasseCree = genererMotDePasse(14);
echo "Le mot de passe généré est : " . $motDePasseCree;
?>