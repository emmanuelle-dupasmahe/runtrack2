<?php

$host = 'localhost'; 
$dbname = 'librairie';
$username = 'root'; 
$password = '';   

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Définir le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL 
    $sql= "SELECT livres.titre, auteurs.nom AS auteur, categories.nom AS catégorie FROM livres
    INNER JOIN
    auteurs ON livres.auteur_id = auteurs.id
    INNER JOIN
    categories ON livres.categorie_id = categories.id";
    
    $stmt = $pdo->query($sql);

    // Récupérer toutes les lignes du résultat
    $livres = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérifier si des données ont été trouvées
    if ($livres) {
        // Affichage du tableau HTML
        echo '<!DOCTYPE html>
              <html lang="fr">
              <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Les livres de la librairie</title>
                  <style>
                      table { width: 100%; border-collapse: collapse; }
                      th, td { border: 2px solid #ccc; padding: 8px; text-align: center; }
                      th { background-color: #7cc8dfff; }
                  </style>
              </head>
              <body>
                  <h1>Les livres de la librairie</h1>
                  <table>';

        // Affichage de l'en-tête du tableau (<thead>)
        echo '<thead><tr>';
        
        $column_names = array_keys($livres[0]);
        foreach ($column_names as $col_name) {
            echo '<th>' . htmlspecialchars($col_name) . '</th>';
        }
        echo '</tr></thead>';

        // Affichage du corps du tableau (<tbody>)
        echo '<tbody>';
        foreach ($livres as $livres) {
            echo '<tr>';
            foreach ($livres as $value) {
                echo '<td>' . htmlspecialchars($value) . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';

        echo '</table>
              </body>
              </html>';
    } else {
        echo "Aucun livre n'a été trouvé.";
    }

} catch (PDOException $e) {
    // Gestion des erreurs de connexion
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
?>
<h3>Ajouter un nouveau livre</h3>
<form action="" method="post">
    <label for="titre">Titre :</label><br>
    <input type="text" id="titre" name="titre" required><br><br>
    <label for="auteur_nom">Nom de l'Auteur :</label><br>
    <input type="text" id="auteur_nom" name="auteur_nom" required><br><br>
    <label for="date_publication">Date de publication :</label><br>
    <input type="date" id="date_publication" name="date_publication" required><br><br>
    <label for="categorie_nom">Nom de la Catégorie :</label><br>
    <input type="text" id="categorie_nom" name="categorie_nom"><br><br>
    <input type="submit" name="submit_form" value="Ajouter le livre">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_form'])) {
    
    // Récupérer et sécuriser les données du formulaire
    $titre = $_POST['titre'];
    $auteur_nom = $_POST['auteur_nom']; // Nom de l'auteur
    $date_publication = $_POST['date_publication'];
    $categorie_nom = $_POST['categorie_nom']; // Nom de la catégorie

    try {
        // 1. Gérer l'Auteur: obtenir l'ID de l'auteur
        $auteur_id = getOrCreateId($pdo, 'auteurs', 'nom', $auteur_nom);

        // 2. Gérer la Catégorie: obtenir l'ID de la catégorie
        // Note: Assurez-vous que la colonne dans 'categories' est bien 'nom'
        $categorie_id = getOrCreateId($pdo, 'categories', 'nom', $categorie_nom);

        // 3. Insertion du Livre dans la table 'livres' avec les ID
        $sql_insert = "INSERT INTO livres (titre, auteur_id, date_publication, categorie_id) 
                       VALUES (:titre, :auteur_id, :date_publication, :categorie_id)";
        $stmt_insert = $pdo->prepare($sql_insert);

        // Exécuter la requête avec les paramètres (maintenant les IDs)
        $stmt_insert->execute([
            'titre' => $titre,
            'auteur_id' => $auteur_id,
            'date_publication' => $date_publication,
            'categorie_id' => $categorie_id,
        ]);

        echo "<p style='color: green;'>Le livre (et son auteur/catégorie si nouveau) a été ajouté avec succès !</p>";
        // Optionnel : recharger la page pour voir le nouveau livre dans le tableau
        // header("Location: " . $_SERVER['PHP_SELF']);
        // exit;

    } catch (PDOException $e) {
        echo "<p style='color: red;'>Erreur lors de l'ajout du livre : " . $e->getMessage() . "</p>";
    }
}
?>