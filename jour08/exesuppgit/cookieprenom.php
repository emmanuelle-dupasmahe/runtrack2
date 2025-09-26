<?php
//création d'un cookie prenom

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    
    //  cookie 'prenom' pour 3 secondes ppur vérifier que cela fonctionne il suffira de mettre 60*60
    setcookie('prenom', $prenom, time() + 3);
    
    // Cette nouvelle requête permettra au cookie d'être disponible.
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}


if (isset($_COOKIE['prenom'])) {
    
    echo "<span style='font-size: 2em; color: green;'>Re-bonjour, " . htmlspecialchars($_COOKIE['prenom']) . " !</span>";
} else {
    // Si le cookie n'existe pas, on affiche le formulaire
?>
    <h1><span style="color: green;">Bonjour !</span></h1>
    <p><span style="color: green;">Entrez votre prénom pour que nous puissions vous saluer la prochaine fois.</span></p>
    <form method="post">
        <label for="prenom">Votre prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit">Enregistrer</button>
    </form>
<?php
}
?>