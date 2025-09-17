<?php
/*Multiples ciblés : affiche les multiples de 3 entre 3 et 30.*/
$multiples = "";
for ($multiples = 3; $multiples <= 30; $multiples++) {
    if ($multiples % 3 == 0) {
        echo $multiples . "\n"."<br>";
    }
}