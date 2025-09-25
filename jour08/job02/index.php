<?php

if (isset($_COOKIE['nbvisites'])) {
    
    $count = $_COOKIE['nbvisites'] + 1;
} else {
    
    $count = 1;
}

// validité du cookie
setcookie('nbvisites', $count, time() + (86400 * 365));

// Vérification du cliquage du bouton reset
if (isset($_POST['reset'])) {
    // on réinitialise le compteur à 0.
    $count = 0;
    // Réinitialisation du cookie.
    setcookie('nbvisites', $count, time() + (86400 * 365));
    // Pour éviter le rechargement du formulaire.
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>
    <h1><span style="color: blue;">Compteur de visites</span></h1>
    <p>Nombre de visites : <?php echo $count; ?></p>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>