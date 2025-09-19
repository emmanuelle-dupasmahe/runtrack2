<!-- index.php -->
 <h3> Afin de construire votre maison veuiller entrer une largeur et une hauteur en nombre </h3>
<form action="index.php" method="get">
  <label>largeur :</label>
  <input type="text" name="largeur"><br>
  
  <label>hauteur :</label>
  <input type="text" name="hauteur"><br>
  
  <input type="submit" value="Se connecter">
</form>

<?php
    if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];
    echo "<h3>voilà votre belle maison 🏠️</h3>";
    for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo "&nbsp;&nbsp;"; // Un espace insécable
    }
    for ($k = 1; $k <= (2 * $i) - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
    for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $largeur; $j++) {
        echo "*";
    }
    echo "<br>";
}
    }