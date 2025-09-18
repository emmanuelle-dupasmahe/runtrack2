<?php
$nombres =[1,2,6,89,90,100,127,1967,54,68];
$contacts = [["nom"=>"Tartempion", "email"=> "tartempion@gmail.com", "telephone"=>"0670645687"],
["nom"=>"Tartempion2", "email"=> "tartempion2@gmail.com", "telephone"=>"0670645688"],
["nom"=>"Tartempion3", "email"=> "tartempion3@gmail.com", "telephone"=>"0670645689"]];
//fusionner 2 tableaux

$nombres_contacts = $nombres; //on met le premier tableau dans notre fusion

foreach ($contacts as $contact) {
    $nombres_contacts[] = $contact; 
}

echo "<h3>Tableaux d'origine :</h3>";
echo "<h4>Nombres :</h4>";
print_r($nombres);
echo "<h4>Contacts :</h4>";
print_r($contacts);

echo "<h3>Tableaux fusionnés :</h3>";
print_r($nombres_contacts);