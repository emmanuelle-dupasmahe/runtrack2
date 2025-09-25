<?php
//une session qui permet de faire une liste des prénoms des visiteurs
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_GET['prenom']) && !empty($_GET['prenom'])) {
    
    $_SESSION['prenoms'][] = htmlspecialchars($_GET['prenom']);
}
//vérification du cliquage du bouton reset
if (isset($_GET['reset'])) {
    // le tableau de session 'prenoms'est remis à zéro.
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste de prénoms</title>
</head>
<body>

    <h3><span style="color: green;"><b>Entrez votre prénom</span></b></h3>

    <form method="get">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <button type="submit">Valider</button>
    </form>

    <hr>

    <h3><span style="color: green;"><b>Liste des prénoms</span></b></h3>

    <?php if (empty($_SESSION['prenoms'])): ?>
        <p><b>Aucun prénom n'a été ajouté pour le moment.</b></p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
                <li><?php echo $prenom; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    
    <hr>

    <form method="get">
        <button type="submit" name="reset">Réinitialiser la liste</button>
    </form>

</body>
</html>
