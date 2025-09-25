<?php

if(isset($_COOKIE['jour'])) {
    
    echo "<span style='font-size: 2em; color: blue;'>Dernière visite : " . htmlspecialchars($_COOKIE['jour'])."</span>";
} else {
    
    $date_du_jour = date('d-m-Y');
    
    $duree_validite = time() + (2 * 60 * 60);
    setcookie('jour', $date_du_jour, $duree_validite);

    echo "<span style='font-size: 2em; color: blue;'>Dernière visite : " . $date_du_jour."</span>";
}
?>