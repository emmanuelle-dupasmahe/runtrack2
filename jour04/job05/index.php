
<!-- formulaire pour avoir le nom et le mot de passe associé post -->

<form action="index.php" method="post">
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

    if ($user === "John" && $pass === "Rambo") {
        echo "<b>Ce n'est pas ma guerre $user ! 💣️ </b>";
    } else {
        echo "<b>Votre pire cauchemar. 🦂</b>";
    }
} 
?>