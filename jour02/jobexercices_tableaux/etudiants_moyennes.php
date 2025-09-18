<?php
$etudiants = [["nom"=>"Lina","notes"=>[14,16,12]],
["nom"=>"Jeremy","notes"=>[13,11,16]],
["nom"=>"Alphonse","notes"=>[9,10,17]],
["nom"=>"Margotte","notes"=>[12,19,17]]];

foreach ($etudiants as $etudiant) {
    $somme_notes = 0;
    $compteur_notes = 0;

    foreach ($etudiant["notes"] as $note) {
        $somme_notes += $note;
        $compteur_notes++;
    }

    $moyenne = $somme_notes / $compteur_notes;
    $etudiant["moyenne"] = $moyenne;
    
    echo "Nom : " . $etudiant["nom"] . " - Moyenne : " . $etudiant["moyenne"] . "<br>";
}