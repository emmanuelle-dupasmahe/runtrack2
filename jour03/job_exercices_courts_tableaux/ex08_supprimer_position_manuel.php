<?php
//on supprime un elt d'un tableau et on refait le tableau

$prenoms = ["Jeremy", "Leaticia", "Alphonse", "Maya", "Octave", "Nina", "Octave", "Stéphane", "Céline", "Gustave"];

$prenom_a_supprimer = "Octave";
$nouveau_tableau = [];
$index_nouveau = 0; 

for ($i = 0; isset($prenoms[$i]); $i++) {
    if ($prenoms[$i] !== $prenom_a_supprimer) {
        $nouveau_tableau[$index_nouveau] = $prenoms[$i]; //on reconstruit le tableau sans le prenom en refaisant l'indexation
        $index_nouveau++;
    }
}
echo "<h3>Le tableau original:</h3>";
print_r($prenoms);
echo"<tr>";

$prenoms = $nouveau_tableau;

echo "<h3>Le tableau avec le prénom supprimé :</h3>";
print_r($prenoms);