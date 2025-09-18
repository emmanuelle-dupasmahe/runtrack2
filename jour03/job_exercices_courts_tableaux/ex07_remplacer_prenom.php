<?php
$prenoms = ["Jeremy", "Leaticia", "Alphonse", "Maya", "Octave", "Nina", "Octave", "Stéphane", "Céline", "Gustave"];

$new_prenom = "JM";
$prenom_a_remplacer = "Octave";

for ($i = 0; isset($prenoms[$i]); $i++) {
    if ($prenoms[$i] == $prenom_a_remplacer) {
        $prenoms[$i] = $new_prenom;
        //si je veux qu'il remplace le premier "Octave" rencontré il faut mettre un break;
    }
}
echo "<h3>Le tableau avec le prénom remplacé :</h3>";
print_r($prenoms);