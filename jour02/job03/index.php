<?php
//affiche les nombres de 0 à 100 et met à la place de 42 Laplateforme_ met en italique les nombres de 0 à 20 et souligne les nombres de 25 à 50
for ($i = 0; $i <= 100; $i++) {
    if  ($i <= 20) {
        echo "<i>" . $i . "</i><br>";
    } 
    else if ($i == 42) {
        echo "LaPlateforme_"."<br>";
    } 
    else if ($i >= 25 and $i <= 50) {
        echo "<u>" . $i . "</u><br>";
    }
    else {
         echo $i . "<br>";
    }
       
}
