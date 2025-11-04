<?php
function bonjour($jour){
    if ($jour === true) {
        echo ("Bonjour"); 
    } else {
        echo ("Bonsoir"); 
    }
    return($jour);
}
bonjour(true); 
echo "<br>";
bonjour(false);