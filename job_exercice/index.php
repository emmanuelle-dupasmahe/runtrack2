<?php
$prix = 19.99;
echo $prix. " €";
echo "<h1>Bienvenue</h1>";
echo "<p>Formation DWWM – TOULON</p>";
echo "© ".date("D")." ".date("M")." ".date("Y")." Formation DWWM – TOULON";

//fiche d'information
$inscription= true;
$age = 61;
$moyenne = 12.5;
$prenom = "Emmanuelle";


// Affichage de la fiche
echo "<h2>Fiche d'information</h2>";
echo "<ul>";
echo "<li><strong>Prénom :</strong> " . $prenom . "</li>"."<br>";
echo "<li><strong>Âge :</strong> " . $age . " ans</li>"."<br>";
echo "<li><strong>Moyenne :</strong> " . $moyenne . " / 20</li>"."<br>";
echo "<li><strong>Inscription validée :</strong> " . ($inscription ? 'Oui' : 'Non') . "</li>"."<br>";
echo "</ul>"."<br>"."<br>"."<br>";

//calcul d'une moyenne
$entier_un = 16;
$entier_deux = 18;
$entier_trois = 20;
$moyenne = ($entier_un + $entier_deux + $entier_trois) / 3;
echo "La moyenne des notes ". $entier_un." ". $entier_deux." ".$entier_trois." est égale à : ".$moyenne."<br>"."<br>"."<br>";

//concaténation de chaines de caractères
$nom = "Dupas-Mahé";
$prénom = "Emmanuelle";
echo $prenom." ".$nom."<br>"."<br>"."<br>";

//multiplication de 2 nombres
$a = 7; $b = 5;
$c = $a * $b;
echo "La mutliplication des 2 nombres ".$a." par ".$b. " est égale à ".$c."<br>"."<br>"."<br>";

//le taux de réussite 
$taux = 95.5;
echo "Le taux de réussite est de : ". $taux." %"."<br>"."<br>"."<br>";

//première utilsation de if
$ouvert = false;
if ($ouvert == true) {
    echo "L'inscription est possible";
}
else {
    echo "Pas d'inscription possible";
}

?>
