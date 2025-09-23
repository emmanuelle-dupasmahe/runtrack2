<?php
//fonction qui change les lettres en chiffres

function leetSpeak($str) {
  $search = array('a', 'A', 'b', 'B', 'e', 'E', 'g', 'G', 'l', 'L', 's', 'S', 't', 'T');
  $replace = array('4', '4', '8', '8', '3', '3', '6', '6', '1', '1', '5', '5', '7', '7');
  
  return str_replace($search, $replace, $str);
}


$texte = "La programmation en PHP est simple et amusante.";
$texte_leet = leetSpeak($texte);

echo $texte_leet; 

?>
