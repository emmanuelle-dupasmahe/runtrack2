<?php
$str = "Apprendre PHP demande de la pratique";
$voyelles = "aeiouyAEIOUY";

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>