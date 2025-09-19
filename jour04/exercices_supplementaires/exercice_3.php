<!-- programme qui demande un mot de passe-->
<form action="exercice_3.php" method="post">
  <label>Utilisateur :</label>
  <input type="text" name="username"><br>
  
  <label>Mot de passe :</label>
  <input type="password" name="password"><br>
  
  <input type="submit" value="Se connecter">
</form>

<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($pass === "dwwm2025") {
        echo "✅ Succès, bienvenue $user !";
    } else {
        echo "❌ Identifiants incorrects.";
    }
} else {
    echo "Merci de remplir le formulaire.";
}

?>