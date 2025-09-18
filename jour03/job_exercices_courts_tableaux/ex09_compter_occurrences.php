<?php
$prenoms = ["Jeremy", "Leaticia", "Alphonse", "Maya", "Octave", "Nina", "Octave", "Stéphane", "Céline","Octave", "Gustave"];

$occurence = "Octave";
$compte_occurence =0;

for ($i = 0; isset($prenoms[$i]); $i++) {
    if ($prenoms[$i] == $occurence) {
        $compte_occurence++;
    }
}
echo $compte_occurence;