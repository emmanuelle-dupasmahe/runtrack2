<!--Formulaire demandant un email. Affiche-le en minuscules.-->
<form method="post">
  <input type="text" name="email" placeholder="Entrer votre Email">
  <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_POST['email']) && ($_POST['email'])!=="") {

    $email_entree = $_POST['email'];

    $longueur_email = 0;
    while (isset($email_entree[$longueur_email])) {
        $longueur_email++;
    }

    $conversion_table = array(
        'A' => 'a', 'B' => 'b', 'C' => 'c', 'D' => 'd', 'E' => 'e', 'F' => 'f', 'G' => 'g',
        'H' => 'h', 'I' => 'i', 'J' => 'j', 'K' => 'k', 'L' => 'l', 'M' => 'm', 'N' => 'n',
        'O' => 'o', 'P' => 'p', 'Q' => 'q', 'R' => 'r', 'S' => 's', 'T' => 't', 'U' => 'u',
        'V' => 'v', 'W' => 'w', 'X' => 'x', 'Y' => 'y', 'Z' => 'z'
    );

    $email_minuscules = '';

    for ($i = 0; $i < $longueur_email; $i++) {
        $caractere = $email_entree[$i];

        //  si il y a une majuscule
        if (isset($conversion_table[$caractere])) {
            $email_minuscules .= $conversion_table[$caractere];
        } else {
            $email_minuscules .= $caractere;
        }
    }

    echo "L'email converti est : " . $email_minuscules;

} else {
    echo "Veuillez entrer un email.";
}
?>