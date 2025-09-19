<!-- index.php -->
 <h2> Veuiller entrer un nombre : </h2>
<form action="index.php" method="get">
  <label>Nombre :</label>
  <input type="text" name="number"><br>
  <input type="submit" value="Envoyer">
</form>

<?php

if (isset($_GET['number'])) {
    $nombre = $_GET['number'];
    if ($nombre % 2 == 0) {
        echo "Nombre pair : " . $nombre;
    } else {
        echo "Nombre impair : " .$nombre;
    }
} 
?>
