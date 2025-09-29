<?php

$host = 'localhost'; 
$dbname = 'jour09';
$username = 'root'; 
$password = '';   

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Définir le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL 
    $sql = "SELECT AVG(capacite) AS `La capacité moyenne des salles` FROM salles;";
    $stmt = $pdo->query($sql);

    // Récupérer toutes les lignes du résultat
    $salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérifier si des données ont été trouvées
    if ($salles) {
        // Affichage du tableau HTML
        echo '<!DOCTYPE html>
              <html lang="fr">
              <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>La capacités moyenne des salles</title>
                  <style>
                      table { width: 250px; border-collapse: collapse; }
                      th, td { border: 2px solid #ccc; padding: 8px; text-align: center; }
                      th { background-color: #7cc8dfff; }
                  </style>
              </head>
              <body>
                  <h1>La capacités moyenne des salles</h1>
                  <table>';

        // Affichage de l'en-tête du tableau (<thead>)
        echo '<thead><tr>';
        
        $column_names = array_keys($salles[0]);
        foreach ($column_names as $col_name) {
            echo '<th>' . htmlspecialchars($col_name) . '</th>';
        }
        echo '</tr></thead>';

        // Affichage du corps du tableau (<tbody>)
        echo '<tbody>';
        foreach ($salles as $salles) {
            echo '<tr>';
            foreach ($salles as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';

        echo '</table>
              </body>
              </html>';
    } else {
        echo "Aucune salle n'a été trouvée.";
    }

} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
?>