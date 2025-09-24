<?php
function estPair($n){
    $est_pair = true;
    if ($n % 2 == 0) {
        $est_pair = true;
    }else {
        $est_pair = false;
    }
    return $est_pair;
}
echo estPair(7);