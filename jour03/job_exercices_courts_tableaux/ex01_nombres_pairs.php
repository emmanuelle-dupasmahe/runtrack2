<?php
$nombres =[1,2,6,89,90,100,127,1967,54,68];
foreach ($nombres as $nombre) {
    if ($nombre % 2 == 0) {
        echo "Nombre pair : " . $nombre . "<br>";
    }
}