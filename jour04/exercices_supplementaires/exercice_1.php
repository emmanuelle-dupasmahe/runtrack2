<!-- pour le formulaire-->

<form action="exercice_1.php" method="get">
  <input type="text" name="prenom" placeholder="Ton prénom">
  <input type="number" name="age"  min="1" max="120" placeholder="Ton âge">
  <input type="submit" value="Envoyer">
</form>

<?php


if (isset($_GET['prenom']) && $_GET['prenom'] !== "") {
    echo "Ton prénom est " . ($_GET['prenom'])."<br>";
}

if (isset($_GET['age']) && $_GET['age'] !== "") {
    echo "Ton âge est " . ($_GET['age']) . "<br>";
}
?>