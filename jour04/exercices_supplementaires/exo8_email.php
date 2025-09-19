<!--Formulaire demandant un email. Affiche-le en minuscules.-->
<form method="post">
  <input type="text" name="email" placeholder="Entrer votre Email">
  <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_POST['submit']) && isset($_POST['email'])) {
    $email = $_POST['email'];
    

    if ($email !== '') {

        $majuscules = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $minuscules = 'abcdefghijklmnopqrstuvwxyz';
        
        
        echo "Votre e-mail en minuscules est : " . ($email_minuscules);
    } else {
        echo "Veuillez entrer une adresse e-mail.";
    }
}
?>
