<!--Formulaire demandant une année. Vérifie si elle est bissextile.-->
<h3>Choisissez une année pour savoir si elle est bissextile.</h3>
<form method="get">
    <label>Année:</label>
    <input type="number" name="annee" min="0" placeholder="Entrez une année">
    <input type="submit" name="submit" value="Envoyer">
</form>

<?php
if (isset($_GET['annee'])) {
    $annee = (int)$_GET['annee']; 
    if (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0)) {
        echo "L'année " . htmlspecialchars($annee) . " est une année bissextile. ✅";
    } else {
        echo "L'année " . htmlspecialchars($annee) . " n'est pas une année bissextile. ❌";
    }
}