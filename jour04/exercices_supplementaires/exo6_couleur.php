<!--Formulaire demandant une couleur (input type="color"). Affiche un texte avec cette couleur.-->
<h3> Choisissez une couleur pour afficher votre texte dans cette couleur</h3>
<form method="get"> <!--Nina vient de me dire qu'on pouvait enlever action que par défaut il va ds le document-->
  <label>couleur</label>
  <input type="color" name="color" value="#000000">
  <input type="text" name="texte" value="">
  <input type="submit" name="submit" value="Envoyer">
</form>
<?php
if (isset($_GET['texte']) && $_GET['texte'] !== "") {
    $color = $_GET['color'];
    $texte = $_GET['texte'];
    echo '<span style="color: ' . ($color) . ';">' . ($texte) . '</span>';
}
