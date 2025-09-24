<?php
function maximum($a, $b){
    $max = 0 ;
    if ($a > $b) {
        $max = $a;
    }else{
        $max = $b;
    }
    return $max;
}
echo maximum(11,12);