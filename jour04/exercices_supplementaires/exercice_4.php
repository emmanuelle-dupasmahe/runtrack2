<!--formulaire pour faire un calcul-->
<h3> Calcul de la somme de 2 nombres. Veuiller entrer vos nombres </h3>
<form action="exercice_4.php" method="get">
  <input type="number" name="number_1" placeholder="Premier nombre">
  <input type="number" name="number_2"  placeholder="Deuxième nombre">
  <input type="submit" value="Envoyer">
</form>

<?php
$somme = 0;

if (isset($_GET['number_1']) && $_GET['number_1'] !== "" && (isset($_GET['number_2']) && $_GET['number_2'] !== "")){
   
    $number_1 = $_GET['number_1'];
    $number_2 = $_GET['number_2'];
    $somme = $number_1 + $number_2;
    echo " <b>La somme est = ". $somme."</b><br>";
}
//echo " <b>La somme est = ". $somme."</b><br>";
?>