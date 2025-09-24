<!-- fonction qui retourne un numero de chance compris entre 1 et 100 avec un formulaire qui demande le prenom-->
<h3> Entrer votre prénom <br></h3>
<form method="post">
<label>prenom :</label>
<input type="text" name="prenom"><br>
<input type="submit" value="valider">
</form>

<?php
function numeroChance($prenom){
    $valeur_prenom = 0;
    $i = 0;
    $table_ascii = array(
    'a' => 97, 'b' => 98, 'c' => 99, 'd' => 100, 'e' => 101,
    'f' => 102, 'g' => 103, 'h' => 104, 'i' => 105, 'j' => 106,
    'k' => 107, 'l' => 108, 'm' => 109, 'n' => 110, 'o' => 111,
    'p' => 112, 'q' => 113, 'r' => 114, 's' => 115, 't' => 116,
    'u' => 117, 'v' => 118, 'w' => 119, 'x' => 120, 'y' => 121,
    'z' => 122,
    'A' => 65, 'B' => 66, 'C' => 67, 'D' => 68, 'E' => 69, 
    'F' => 70, 'G' => 71,'H'=> 72,'I' => 73, 'J' => 74, 
    'K' => 75, 'L' => 76,'M' => 77, 'N' => 78, 'O' => 79, 
    'P' => 80, 'Q' => 81, 'R' => 82, 'S' => 83,
    'T'=> 84,'U' => 85, 'V' => 86, 'W' => 87, 
    'X' => 88,'Y' => 89, 'Z' => 90);
    
    while (isset($prenom[$i])) {

        if (isset($table_ascii[$prenom[$i]])) {
            $valeur_prenom += $table_ascii[$prenom[$i]];
        }
        $i++;
    
    }
    $val = $valeur_prenom + 12345;
    $nombre_resultat = ($val * 9301 + 49297) % 233280;
    $numero_chance = $nombre_resultat % 101;

    return $numero_chance;
}

    if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    $numero_chance = numeroChance($prenom); 
    echo "Bonjour " . ($prenom) . ", votre numéro de chance pour aujourd'hui est : " . $numero_chance . "🍀"; 
} else {
    echo "Veuillez entrer votre prénom.";
}
?>