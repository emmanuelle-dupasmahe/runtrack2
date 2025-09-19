<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des arguments GET</title>
    <style>
        table, th, td {
            border: 2px solid blue;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

<h1>Entrer votre prénom et votre nom</h1>
<form action="index.php" method="get">
    <input type="text" name="prenom" placeholder="Prénom"><br>
    <input type="text" name="nom" placeholder="Nom"><br>
    <input type="submit" name="submit" value="Envoyer">
</form>

<?php

if (isset($_GET['submit'])) {
    echo "<h1>Tableau des arguments GET</h1>";
    echo "<table>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";

    if (isset($_GET['prenom']) && $_GET['prenom'] !== "") {
        echo "<tr><td>prénom</td><td>" . ($_GET['prenom']) . "</td></tr>";
    }

    if (isset($_GET['nom']) && $_GET['nom'] !== "") {
        echo "<tr><td>nom</td><td>" . ($_GET['nom']) . "</td></tr>";
    }


    echo "</tbody>";
    echo "</table>";
}
?>

</body>
</html>