<?php
$contacts = [["nom"=>"Tartempion", "email"=> "tartempion@gmail.com", "telephone"=>"0670645687"],
["nom"=>"Tartempion2", "email"=> "tartempion2@gmail.com", "telephone"=>"0670645688"],
["nom"=>"Tartempion3", "email"=> "tartempion3@gmail.com", "telephone"=>"0670645689"]];

echo "<h2>Liste des contacts avant l'ajout :</h2>";

foreach ($contacts as $contact) {
    echo "Nom: " . $contact["nom"] . " - Email: " . $contact["email"] . " - Téléphone: " . $contact["telephone"] . "<br>";
}

echo "<Hr>";


$nouveauContact = [
    "nom" => "Tartempion4",
    "email" => "tartempion4@email.com",
    "telephone" => "0670645690"
];


$contacts[] = $nouveauContact;

echo "<h2>Liste des contacts après l'ajout :</h2>";
// 4. Afficher la liste des contacts mise à jour
foreach ($contacts as $contact) {
    echo "Nom: " . $contact["nom"] . " - Email: " . $contact["email"] . " - Téléphone: " . $contact["telephone"] . "<br>";
}