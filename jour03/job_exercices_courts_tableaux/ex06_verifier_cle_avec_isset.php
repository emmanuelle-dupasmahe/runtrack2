<?php
$contacts = [["nom"=>"Tartempion", "email"=> "tartempion@gmail.com", "telephone"=>"0670645687"],
["nom"=>"Tartempion2", "email"=> "tartempion2@gmail.com", "telephone"=>"0670645688"],
["nom"=>"Tartempion3", "email"=> "tartempion3@gmail.com", "telephone"=>"0670645689"]];

$cle_a_tester = "email";
$index_a_tester = 1;

if (isset($contacts[$index_a_tester][$cle_a_tester])) {
    echo "La clé '" . $cle_a_tester . "' existe pour le contact d'index " . $index_a_tester . ".<br>";
    echo "Sa valeur est : " . $contacts[$index_a_tester][$cle_a_tester];
} else {
    echo "La clé '" . $cle_a_tester . "' n'existe pas pour ce contact.";
}
