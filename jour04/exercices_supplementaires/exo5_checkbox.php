<!--Formulaire avec case “J’accepte les conditions”. Affiche message selon choix.-->
<h3> Cocher la case si vous acceptez les conditions.</h3>
<form action="exo5_checkbox.php" method="post">
  <label>Conditions :</label>
  <input type="checkbox" name="accepte" value="true"><br>
  <input type="submit" name="submit" value="Envoyer">
</form>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['accepte'])) {
        echo "✅ Conditions acceptées.";
    } else {
        echo "❌ Tu dois accepter les conditions.";
    }
}
