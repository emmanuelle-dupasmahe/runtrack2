
<!-- compte les arguments methode get-->

<form action="index.php" method="get">
  <input type="text" name="prenom" placeholder="Ton prénom">
  <input type="text" name="nom" placeholder="Ton nom">
  <input type="submit" value="Envoyer">
</form>

<?php
$compteur_arguments = 0;

if (isset($_GET['prenom']) && $_GET['prenom'] !== "") {
    echo "Ton prénom est " . ($_GET['prenom'])."<br>";
    $compteur_arguments++;
}

if (isset($_GET['nom']) && $_GET['nom'] !== "") {
    echo "Ton nom est " . ($_GET['nom']) . "<br>";
    $compteur_arguments++;
}

if ($compteur_arguments > 0) {
    echo "Le nombre d'arguments GET est : " . $compteur_arguments."<br>";
} else {
    echo "Veuillez entrer votre prénom et votre nom dans le formulaire.";
}
?>
