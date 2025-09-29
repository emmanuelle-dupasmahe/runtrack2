<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>le nom des salles et de leurs étages</title>
    <style>
        table {
            width: 300px;
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

//la connexion PDO
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// requete SQL
    $sql = "SELECT salles.nom AS 'nom des salles' , etage.nom AS 'étage' FROM salles INNER JOIN etage ON salles.id_etage = etage.id;";
    $stmt = $pdo->query($sql);
if ($stmt->rowCount() > 0) {
        echo "<table>";
        echo "<thead><tr>";

        
        $firstRow = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($firstRow) {
            foreach ($firstRow as $key => $value) {
                echo "<th>" . htmlspecialchars($key) . "</th>";
            }
            
            $stmt->execute();
        }

        echo "</tr></thead>";
        echo "<tbody>";

        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $data) {
                echo "<td>" . htmlspecialchars($data) . "</td>";
            }
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "0 résultats trouvés dans la table 'salles'.";
    }

} catch(PDOException $e) {
    
    die("La connexion a échoué : " . $e->getMessage());
}

// La connexion PDO est automatiquement fermée 
?>