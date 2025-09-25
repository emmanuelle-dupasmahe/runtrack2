<?php
session_start();

if (isset($_SESSION['prenom']) and !empty($_SESSION['prenom'])) {
    echo "<span style='font-size: 2em; color: blue;'>Bonjour, " . htmlspecialchars($_SESSION['prenom']) . " !</span>";
}

if (isset($_POST['prenom'])) {
    $_SESSION['prenom'] = $_POST['prenom'];
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['effacer'])) {
    unset($_SESSION['prenom']);
    header('Location: ' . $_SERVER['PHP_SELF']);
exit;
}
?>

    <h3><span style="color: green;"><b>Entrez votre prénom</span></b></h3>

    <form method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <button type="submit">Valider</button>
    </form>
    <form method="post">
        <button type="submit" name="effacer">Effacer le prénom</button>
    </form>