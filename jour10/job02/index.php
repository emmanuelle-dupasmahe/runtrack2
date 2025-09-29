<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nom et capacité de chacune des salles</title>
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
// Requête SQL 
$sql = "SELECT nom, capacite FROM salles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<caption>Capacité des Salles</caption>";
    
    
    echo "<thead><tr>";
    
    $fields = $result->fetch_fields();
    foreach ($fields as $field) {
        echo "<th>" . htmlspecialchars($field->name) . "</th>";
    }
    echo "</tr></thead>";
    
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $data) {
            echo "<td>" . htmlspecialchars($data) . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "No results found in the 'salles' table.";
}

// on ferme la connexion
$conn->close();
?>

</body>
</html>