<!-- affiche un titre entré avec get-->

<form action="exercice_5.php" method="get">
  <input type="text" name="titre" placeholder="Votre titre">
  <input type="submit" value="Envoyer">
</form>

<?php

if (isset($_GET['titre'])) {
    if ($_GET['titre'] !=="") {
        echo "Résultat pour <h1>: " . ($_GET['titre'])."</h1><br>";
    } else {
        echo "Merci d'entrer votre titre.";
    }
}

?>