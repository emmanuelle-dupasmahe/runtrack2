<!-- pour le formulaire qui demande le nom, l'email et le message post-->

<form action="exercice_2.php" method="post">
  <input type="text" name="nom" placeholder="Nom">
  <input type="text" name="email" placeholder="Email">
  <input type="text" name="message" placeholder="Message">
  <input type="submit" value="Envoyer">
</form>
<?php
if (isset($_POST['nom']) && $_POST['nom'] !== "") {
    echo "Votre nom est " . ($_POST['nom'])."<br>";
}

if (isset($_POST['email']) && $_POST['email'] !== "") {
    echo "Votre email est " . ($_POST['email']) . "<br>";
}

if (isset($_POST['message']) && $_POST['message'] !== "") {
    echo "Votre message est " . ($_POST['message']) . "<br>";
}
?>