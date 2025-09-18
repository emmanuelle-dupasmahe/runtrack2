<?php
$nombres =[1,2,6,89,90,100,127,1967,54,68];
$nombre_max = $nombres[0];

foreach ($nombres as $nombre) {
    if ($nombre > $nombre_max) {
        $nombre_max = $nombre;
    }
}

echo "Le nombre maximum est : " . $nombre_max;
