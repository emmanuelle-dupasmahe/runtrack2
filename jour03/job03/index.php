<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = ["a" => 'v', "e" => 'v', "i" => 'v', "o" => 'v', "u" => 'v', "y" => 'v',
    "A" => 'v', "E" => 'v', "I" => 'v', "O" => 'v', "U" => 'v', "Y" => 'v'];
//Les voyelles sont maintenant les CLES du tableau.
$i = 0;
while (isset($str[$i])) {
    $caractere = $str[$i];
    if (isset($voyelles[$caractere])) {
        echo $caractere;
    }
    $i++;
}

