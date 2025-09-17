<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = ["a" => true, "e" => true, "i" => true, "o" => true, "u" => true, "y" => true, "A" => true, "E" => true, "I" => true, "O" => true, "U" => true, "Y" => true];

$i = 0;
while (isset($str[$i])) {
    $caractere = $str[$i];
    if (isset($voyelles[$caractere])) {
        echo $caractere;
    }
    $i++;
}


