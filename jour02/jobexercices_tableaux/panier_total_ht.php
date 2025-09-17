<?php
$panier = [["nom"=>"Clavier","prix"=>29,"qte"=>2],
["nom"=>"Souris","prix"=>15,"qte"=>1],
["nom"=>"Ecran","prix"=>40,"qte"=>1],
["nom"=>"Tapis de souris ","prix"=>5,"qte"=>5]];
$total = 0;
echo "<b><u>Détail de la commande :</b></u>\n"."<br>";

foreach ($panier as $produit) {
    $total_ligne = $produit['prix'] * $produit['qte'];
    echo "Produit : " . $produit['nom'] . " | Prix unitaire : " . $produit['prix'] . " € | Quantité : " . $produit['qte'] . " | Total ligne : " . $total_ligne . " €\n"."<br>";
    $total += $total_ligne; 

echo "<b>Total HT du panier : " . $total . " €</b>\n"."<br>";
}
