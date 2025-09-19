<!-- affiche Bonjour prénom-->

<form action="exo2_prenom.php" method="post">
  <input type="text" name="prenom" placeholder="Ton prénom">
  <input type="submit" value="Envoyer">
</form>

<?php


if (isset($_POST['prenom']) && $_POST['prenom'] !== "") {
    echo "Bonjour " . ($_POST['prenom'])."<br>";
}
?>