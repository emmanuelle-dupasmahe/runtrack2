<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #c7d9e7ff;
        }
    </style>
</head>
<body>

<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "jour09";

// connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Requête SQL pour récupérer toutes les données de la table etudiants
$sql = "SELECT * FROM etudiants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table>";
    echo "<thead><tr>";

    // Récupération et affichage des noms des colonnes pour l'en-tête du tableau
    $fields = $result->fetch_fields();
    foreach ($fields as $field) {
        echo "<th>" . htmlspecialchars($field->name) . "</th>";
    }
    echo "</tr></thead>";

    echo "<tbody>";
    // Affichage des données de chaque ligne
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $data) {
            echo "<td>" . htmlspecialchars($data) . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "0 résultats trouvés dans la table 'etudiants'.";
}

// on ferme la connexion
$conn->close();
?>

</body>
</html>