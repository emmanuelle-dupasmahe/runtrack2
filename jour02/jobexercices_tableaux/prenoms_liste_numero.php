<?php
$prenoms = ["Jean","Nicolas","Néo","Maya","Zoé"];
if (empty($prenoms)) {
    echo "Aucun prénom";
} else {
    $i = 1;

    foreach ($prenoms as $prenom) {
        echo $i . " - " . $prenom . "\n";
        $i++; 
    }
}
