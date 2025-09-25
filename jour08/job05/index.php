<?php
//un jeu de Morpion

session_start();

// Initialisation ou réinitialisation du jeu
if (!isset($_SESSION['g']) || isset($_POST['reset'])) {
    $_SESSION['g'] =  array_fill(0, 9, '-');
    $_SESSION['tour'] = 'X';
    $_SESSION['message'] = 'C\'est au tour de X';
}

// Fonction pour vérifier si un joueur a gagné
function aGagne($grille, $joueur) {
    // Combinaisons gagnantes pour un morpion 3x3
    $combos = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Lignes
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Colonnes
        [0, 4, 8], [2, 4, 6]            // Diagonales
    ];
    
    foreach ($combos as $combo) {
        if ($grille[$combo[0]] == $joueur && 
            $grille[$combo[1]] == $joueur && 
            $grille[$combo[2]] == $joueur) {
            return true;
        }
    }
    return false;
}

// Logique du jeu lors d'un clic sur une case
if (isset($_POST['case'])) {
    $index = (int)$_POST['case'];
    
    // Vérifie si la case est vide et si le jeu n'est pas terminé
    if ($_SESSION['g'][$index] == '-' && !strpos($_SESSION['message'], 'gagné') && !strpos($_SESSION['message'], 'Match nul')) {
        $_SESSION['g'][$index] = $_SESSION['tour'];
        
        // Vérification de la victoire
        if (aGagne($_SESSION['g'], $_SESSION['tour'])) {
            $_SESSION['message'] = 'Le joueur ' . $_SESSION['tour'] . ' a gagné ! 💪😃';
        } else {
            // Changement de tour
            $_SESSION['tour'] = ($_SESSION['tour'] == 'X') ? 'O' : 'X';
            $_SESSION['message'] = 'C\'est au tour de ' . $_SESSION['tour'];
            
            // Vérification du match nul
            if (!in_array('-', $_SESSION['g'])) {
                $_SESSION['message'] = 'Match nul ! 🤝';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <link rel="stylesheet" href="morpion.css">
</head>
<body>
    <h1>Jeu du Morpion</h1>

    <form method="POST" class="grid">
        <?php foreach ($_SESSION['g'] as $index => $valeur): ?>
            <button type="submit" name="case" value="<?= $index ?>" class="cell" <?= ($valeur != '-') ? 'disabled' : '' ?>>
                <?= htmlspecialchars($valeur) ?>
            </button>
        <?php endforeach; ?>
    </form>
    <div class="message"><?= $_SESSION['message'] ?></div>

    <?php if (strpos($_SESSION['message'], 'gagné') || strpos($_SESSION['message'], 'Match nul')): ?>
        <form method="POST">
            <button type="submit" name="reset" class="reset-button">Recommencer</button>
        </form>
    <?php endif; ?>

</body>
</html>