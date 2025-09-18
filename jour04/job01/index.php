
<!-- fichier pour le formulaire-->

<form action="index.php" method="get">
  <input type="text" name="prenom" placeholder="Ton prénom">
  <input type="text" name="nom" placeholder="Ton nom">
  <input type="submit" value="Envoyer">
</form>

<?php
$compteur_arguments=0;

if (isset($_GET['prenom'])) {
echo "Ton prénom est " . $_GET['prenom']."<br>";
$compteur_arguments++;
}

if (isset($_GET['nom'])) {
    // Si on veut afficher le nom
    echo "Ton nom est " . htmlspecialchars($_GET['nom']) . "<br>";
    $compteur_arguments++;
}
if (isset($_GET['submit'])) {
    $compteur_arguments++;
}
if (isset($_GET['Envoyer'])) {
    $compteur_arguments++;
}
if ($compteur_arguments > 0) {
    echo "Le nombre d'arguments GET est : " . $compteur_arguments."<br>";
} else {
    echo "Veuillez entrer votre prénom et nom dans le formulaire.";
}
?>
