<!--Formulaire demandant deux nombres. Affiche le plus grand.-->
<h3> Veuiller entrer vos nombres pour savoir quel est le plus grand. </h3>
<form action="exo4_max.php" method="get">
  <input type="number" name="number_1" placeholder="Premier nombre">
  <input type="number" name="number_2"  placeholder="Deuxième nombre">
  <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_GET['number_1']) && $_GET['number_1'] !== "" && (isset($_GET['number_2']) && $_GET['number_2'] !== "")){
   
    $number_1 = $_GET['number_1'];
    $number_2 = $_GET['number_2'];
    if ($number_1 > $number_2){
        echo $number_1." est plus grand que ". $number_2."<br>";
    }
    elseif($number_2> $number_1){
        echo $number_2." est plus grand que ". $number_1."<br>";
    }
    else{
    echo $number_1. " est égal à ". $number_2."<br>"; 
    }
}
?>