
<!--    Demande l'âge et affiche si la personne est mineur ou majeur-->
    <h3> Veuillez entrer votre âge </h3>
<form method="get">
  <input type="number" name="age"  min="1" max="120" placeholder="Ton âge">
  <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_GET['age']) && $_GET['age'] !== "") {
    $age = $_GET['age'];
    
    if ($age >= 18) {
        echo "Vous êtes majeur.";
    } else {
        echo "Vous êtes mineur.";
    }
}
?>