<?php
function bonjour($jour){
    if ($jour === true) {
        echo ("Bonjour"); // return "Bonjour";
    } else {
        echo ("Bonsoir"); // return "Bonsoir"
    }
    return($jour);
}
?>
<?php
bonjour(true); 
echo "<br>";
bonjour(false);