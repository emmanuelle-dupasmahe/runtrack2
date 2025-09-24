<?php
function convertirEuroDollar($montant, $taux){
    
    $dollars = $montant * $taux;
    return $dollars;
}

$montant_en_euros = 200;
$taux_de_change = 1.18;

$montant_en_dollars = convertirEuroDollar($montant_en_euros, $taux_de_change);

echo "$montant_en_euros euros équivalent à $montant_en_dollars dollars.";
?>