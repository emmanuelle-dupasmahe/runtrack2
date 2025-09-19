<!-- programme pour calculer le carré d'un nombre est pair methode get-->

 <h2> Veuiller entrer un nombre : </h2>
<form action="exo3_carre.php" method="get">
  <label>Nombre :</label>
  <input type="text" name="number"><br>
  <input type="submit" value="Envoyer">
</form>

<?php
$carre = 0;
if (isset($_GET['number'])) {
    $nombre = $_GET['number'];
    $carre = $nombre * $nombre;
        echo "Le carré est  : " .$carre;
    } 
?>