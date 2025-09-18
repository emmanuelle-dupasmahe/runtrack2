<?php
$achat = [["nom"=>"Clavier","prix"=>29,"qte"=>2],
["nom"=>"Souris","prix"=>15,"qte"=>1],
["nom"=>"Ecran","prix"=>40,"qte"=>1],
["nom"=>"Tapis de souris ","prix"=>5,"qte"=>5]];
$total = 0;
echo "<b><u>Facture :</b></u>\n"."<br>"."<br>";

foreach ($achat as $produit) {
    $total_ligne = $produit['prix'] * $produit['qte'];
    echo "Produit : <b>" . $produit['nom'] . " </b>| Prix unitaire : <b>" . $produit['prix'] . " € </b>| Quantité :<b> " . $produit['qte'] . "</b> | Total : <b>" . $total_ligne. " € </b>\n"."<br>"."<br>";
    $total += $total_ligne; 
}

echo "_________________________________________________________";
echo "<br>"."<br>";
echo "<b>Total HT de la commande : ............................" . $total . " €</b>\n"."<br>";

