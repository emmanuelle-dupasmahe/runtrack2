
<?php
//fonction qui compte le nombre de fois 
//où un caractère apparait dans une chaine de caracteres

function occurrences(string $str, string $char){
    $nb_occur=0;
    for ($i = 0; isset($str[$i]); $i++) {
    if ($str[$i] === $char) {
      $nb_occur++;
    }
    }
    return $nb_occur;
}

$str = "les chaussettes de l'Archiduchesse sont-elles sèches";
$char = "s";
$nb_occur = occurrences($str, $char);

echo "Le nombre d'occurrences du caractère '" . $char . "' dans la chaîne '" . $str . "' est : " . $nb_occur; 
