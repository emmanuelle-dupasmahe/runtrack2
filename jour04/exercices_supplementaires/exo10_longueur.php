<!--Formulaire demandant un mot. Affiche le nombre de lettres-->
<form method="post">
  <input type="text" name="mot" placeholder="Entrer un mot">
  <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_POST['mot']) && ($_POST['mot'])!=="") {

    $mot_entree = $_POST['mot'];

    $longueur_mot = 0;
    while (isset($mot_entree[$longueur_mot])) {
        $longueur_mot++;
    }
    echo ("Votre mot comporte ".$longueur_mot." lettres");
}