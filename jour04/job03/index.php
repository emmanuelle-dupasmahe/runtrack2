
<form action="index.php" method="post">
  <input type="text" name="prenom" placeholder="Ton prénom">
  <input type="text" name="nom" placeholder="Ton nom">
  <input type="submit" value="Envoyer">
</form>

<?php
$compteur_arguments = 0;

if (isset($_POST['prenom']) && $_POST['prenom'] !== "") {
    echo "Ton prénom est " . ($_POST['prenom'])."<br>";
    $compteur_arguments++;
}

if (isset($_POST['nom']) && $_POST['nom'] !== "") {
    echo "Ton nom est " . ($_POST['nom']) . "<br>";
    $compteur_arguments++;
}

if ($compteur_arguments > 0) {
    echo "Le nombre d'arguments GET est : " . $compteur_arguments."<br>";
} else {
    echo "Veuillez entrer votre prénom et nom dans le formulaire.";
}
?>