<?php
function bonjour($jour){
    if ($jour === true) {
        echo ("Bonjour"); // return "Bonjour";
    } else {
        echo ("Bonsoir"); // return "Bonsoir"
    }
    return($jour);
}
bonjour(true); 
echo "<br>";
bonjour(false);