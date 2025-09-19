<!--présente les arguments et les valeurs associées dans un tableau methode post-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des arguments POST</title>
    <style>
        table, th, td {
            border: 2px solid green;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

<h1>Entrer votre prénom et votre nom</h1>
<form action="index.php" method="post">
    <input type="text" name="prenom" placeholder="Prénom"><br>
    <input type="text" name="nom" placeholder="Nom"><br>
    <input type="submit" name="submit" value="Envoyer">
</form>

<?php

if (isset($_POST['submit'])) {
    echo "<h1>Tableau des arguments POST</h1>";
    echo "<table>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";

    if (isset($_POST['prenom']) && $_POST['prenom'] !== "") {
        echo "<tr><td>prénom</td><td>" . ($_POST['prenom']) . "</td></tr>";
    }

    if (isset($_POST['nom']) && $_POST['nom'] !== "") {
        echo "<tr><td>nom</td><td>" . ($_POST['nom']) . "</td></tr>";
    }


    echo "</tbody>";
    echo "</table>";
}
?>

</body>
</html>