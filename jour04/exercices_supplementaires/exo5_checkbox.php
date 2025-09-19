<!--Formulaire avec case “J’accepte les conditions”. Affiche message selon choix.-->
<h3> Acceptez-vous les conditions oui ou non ?</h3>
<form action="exo5_checkbox.php" method="post">
  <label>Conditions :</label>
  <input type="text" name="accepte"><br>
  <input type="submit" value="Se connecter">
</form>

<?php

if (isset($_POST['accepte'])) {
    $accepte = $_POST['accepte'];

    if ($accepte === "oui") {
        echo "✅ Conditions acceptées.";
    } else {
        echo "❌ Tu dois accepter";
    }
}
?>