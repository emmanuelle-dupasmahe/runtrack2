<?php
//un formulaire de connexion qui demande le prénom, s'il est validé on ajoute le prénom dans un cookie

if (isset($_COOKIE['user_prenom'])) {
    echo "Bonjour " . htmlspecialchars($_COOKIE['user_prenom']) ." ! <br><br>";
    echo '<form method="post"><button type="submit" name="deco">Déconnexion</button></form>';
    
    // Si le bouton de déconnexion est cliqué, on supprime le cookie.
    
    if (isset($_POST['deco'])) {
        setcookie('user_prenom', '', time() - 20);
        exit;
    }
} else {

    // Si le cookie n'existe pas, l'utilisateur ne s'est pas "connecté".
    // Affichage du formulaire de connexion.

    echo '<h3><span style="color:blue;"><b>Entrez votre prénom</span></b></h3>';
    echo '<form method="post">';
    echo '<label for="prenom"><span style="color:blue;">Prénom : </label>';
    echo '<input type="text" name="prenom" id="prenom">';
    echo '<button type="submit" name="connexion">Connexion</button>';
    echo '</form>';
    
    // est-ce que le formulaire a été rempli ?

    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {

        // Si oui, création du cookie 'user_prenom' avec le prénom de l'utilisateur.
        // Le cookie est valide pendant 20 secondes.
        
        setcookie('user_prenom', $_POST['prenom'], time() + 20);
       
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>