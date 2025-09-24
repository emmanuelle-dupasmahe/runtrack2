<!-- fonction qui salut prénom avec un formulaire pour entrer son prenom -->
<h3> Entrer votre prénom <br></h3>

<form method="get">

<label>prenom :</label>
<input type="text" name="prenom"><br>
<input type="submit" value="valider">

</form>
<?php
function saluer($prenom) {
    return "Salut " . ($prenom) . " !";
}

if (isset($_GET['prenom'])) {
    $prenom = $_GET['prenom'];
    echo saluer($prenom);
} else {
    echo "Veuillez entrer votre prénom.";
}
?>