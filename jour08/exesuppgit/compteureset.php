<?php
//page qui a un compteur de session et un reset sur la meme page
session_start();

if (!isset($_SESSION['compteur'])) {
    
    $_SESSION['compteur'] = 0;
}


if (isset($_POST['reset'])) {
    
    $_SESSION['compteur'] = 0;
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}


$_SESSION['compteur']++;


echo "<span style='font-size: 2em; color: blue;'>Nombre de visites sur cette page : " . $_SESSION['compteur']."</span><br><br>";
?>

<form method="post">
    <button type="submit" name="reset">Réinitialiser le compteur</button>
</form>