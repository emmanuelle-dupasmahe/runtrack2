<?php
$nombres =[1,2,6,89,90,100,127,1967,54,68];
$inv_nombres =[];
$taille = 0;
while (isset($nombres[$taille])) {
    $taille++;
}
for ($i = $taille - 1; $i >= 0; $i--) {
    $inv_nombres[] = $nombres[$i];
}

echo "Tableau original : ";
print_r($nombres);

echo "<br><br>Tableau inversé : ";
print_r($inv_nombres);