<!-- affiche get avec print-r-->
<h1>Entrer votre prénom et votre nom</h1>
<form action="exo1_get.php" method="get">
  <input type="text" name="prenom" placeholder="Ton prénom">
  <input type="number" name="age"  min="1" max="120" placeholder="Ton âge">
  <input type="submit" name ="submit" value="Envoyer">
</form>

<?php
if (isset($_GET['submit'])) {
if ($_GET['prenom']!=="" && $_GET['age']!=="") {
    echo "<h1>Données soumises via le formulaire:</h1>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
} else {
    echo "Merci d'entrer ton prénom et ton âge.";
}
}