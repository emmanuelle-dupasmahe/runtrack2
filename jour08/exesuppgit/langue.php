<?php

if (isset($_POST['langue'])) {
    $langue_choisie = $_POST['langue'];
    setcookie('langue', $langue_choisie, time() + 86400);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

//supprime le cookie
if (isset($_POST['supprimer_cookie'])) {
    setcookie('langue', '', time() - 3600);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

$langue_actuelle = "Non définie";
if (isset($_COOKIE['langue'])) {
    $langue_actuelle = htmlspecialchars($_COOKIE['langue']);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sélection de Langue</title>
</head>
<body>

    <h1><span style='color: blue;'>Sélection de Langue</span></h1>

    <p><span style='font-size: 2em; color: green;'>Langue actuelle : <strong><?php echo $langue_actuelle; ?></strong></span></p>

    <form method="post" action="">
        <label for="langue-select">Choisir une langue :</label>
        <select name="langue" id="langue-select">
            <option value="fr">Français</option>
            <option value="en">English</option>
            <option value="es">Español</option>
        </select>
        <button type="submit">Enregistrer</button>
    </form>

    <br>

    <form method="post" action="">
        <button type="submit" name="supprimer_cookie">Supprimer le cookie</button>
    </form>

</body>
</html>