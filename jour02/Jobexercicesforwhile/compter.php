<?php
// Compter les caractères
$str = "Compter les caractères";
$compteur = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $compteur++;
}
echo "Nombre de caractères : " . $compteur;
?>