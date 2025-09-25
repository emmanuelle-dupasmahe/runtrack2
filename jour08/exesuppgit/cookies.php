<?php
// Créer/mettre à jour un cookie 'theme' pour 1 heure
if (isset($_POST['theme'])) {
    setcookie('theme', $_POST['theme'], time() + 3600); // 3600 secondes = 1h
    // Après setcookie, un refresh peut être utile pour voir la valeur dans $_COOKIE
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

$theme = $_COOKIE['theme'] ?? 'non défini';
echo "Thème actuel : " . htmlspecialchars($theme);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Choix du thème</title>

    <?php 
    // --- Application du CSS en fonction du thème ---
    // --- Crée deux fichiers CSS (clair.css et sombre.css) et utilise des classes sur des balises HTML
    //     pour observer visuellement le changement de style ---
    // On inclut le fichier clair.css ou sombre.css dynamiquement
    if ($theme === 'sombre'): ?>
        <link rel="stylesheet" href="sombre.css">
    <?php else: ?>
        <link rel="stylesheet" href="clair.css">
    <?php endif; ?>
</head>
<body>
    <!-- Affichage du thème actuel -->
    <h2>Thème actuel : <?= htmlspecialchars($theme) ?></h2>
    <form method="post">
        <label>Choisis un thème :</label>
        <select name="theme">
            <option value="clair">Clair</option>
            <option value="sombre">Sombre</option>
        </select>
        <button type="submit">Enregistrer</button>
    </form>

    <form method="post" action="?clear=1">
        <button type="submit">Supprimer le cookie</button>
    </form>
</body>
</html>

<?php
// Suppression : recréer le cookie expiré
if (isset($_GET['clear'])) {
    setcookie('theme', '', time() - 3600);
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}
?>