<?php
session_start();

session_destroy();
?>

    <h3><span style="color: green;"><b>Entrez votre prénom</span></b></h3>

<form action="page2prenom.php" method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit">Valider</button>
    </form>
    