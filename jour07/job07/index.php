<?php
//un formulaire où l'on entre un texte que l'on peut changer avec un choix de fonctions

//fonction qui met en gras les mots qui commencent par une majuscule

function gras($str) {
    $resultat = '';
    $mot_courant = '';
    $longueur_str = 0;
    
    for ($i = 0; isset($str[$i]); $i++) {
        $longueur_str++;
    }

    
    for ($i = 0; $i < $longueur_str; $i++) {
        $caractere = $str[$i];
        
        
        if ($caractere === ' ' or $caractere === "\n" or $caractere === "\r") {
            
            if ($mot_courant !== '') {
                
                if ($mot_courant[0] >= 'A' and $mot_courant[0] <= 'Z') {
                    $resultat .= "<b>" . $mot_courant . "</b>" . $caractere;
                } else {
                    $resultat .= $mot_courant . $caractere;
                }
                $mot_courant = '';
            } else {
                
                $resultat .= $caractere;
            }
        } else {
            
            $mot_courant .= $caractere;
        }
    }
    
    
    if ($mot_courant !== '') {
        if (isset($mot_courant[0]) and $mot_courant[0] >= 'A' and $mot_courant[0] <= 'Z') {
            $resultat .= "<b>" . $mot_courant . "</b>";
        } else {
            $resultat .= $mot_courant;
        }
    }

    return $resultat;
}

//fonction qui décale les lettre de l'alphabet si le décalage est de 2 a devient c

function cesar($str, $decalage = 2) {
    $resultat = '';
    $alphabet_minuscules = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $alphabet_majuscules = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    $longueur_str = 0;
    
    for ($i = 0; isset($str[$i]); $i++) {
        $longueur_str++;
    }

    
    for ($i = 0; $i < $longueur_str; $i++) {
        $char = $str[$i];
        
        
        if ($char >= 'a' && $char <= 'z') {
            
            $position = 0;
            for ($j = 0; $j < 26; $j++) {
                if ($alphabet_minuscules[$j] === $char) {
                    $position = $j;
                    break;
                }
            }
            
            $nouvelle_position = ($position + $decalage) % 26;
            $resultat .= $alphabet_minuscules[$nouvelle_position];
        } 
        
        elseif ($char >= 'A' && $char <= 'Z') {
            
            $position = 0;
            for ($j = 0; $j < 26; $j++) {
                if ($alphabet_majuscules[$j] === $char) {
                    $position = $j;
                    break;
                }
            }
            
            $nouvelle_position = ($position + $decalage) % 26;
            $resultat .= $alphabet_majuscules[$nouvelle_position];
        } 
        
        else {
            $resultat .= $char;
        }
    }
    return $resultat;
}

//fonction qui ajoute_ au mot qui se termine par me

function plateforme($str) {
    $resultat = '';
    $mot_courant = '';
    $longueur_str = 0;
    
    for ($i = 0; isset($str[$i]); $i++) {
        $longueur_str++;
    }

    
    for ($i = 0; $i < $longueur_str; $i++) {
        $caractere = $str[$i];
        
        
        if ($caractere === ' ' or $caractere === "\n" or $caractere === "\r") {
            if ($mot_courant !== '') {
                
                $longueur_mot = 0;
                for ($j = 0; isset($mot_courant[$j]); $j++) {
                    $longueur_mot++;
                }

                if ($longueur_mot >= 2 and $mot_courant[$longueur_mot - 2] === 'm' and $mot_courant[$longueur_mot - 1] === 'e') {
                    $resultat .= $mot_courant . '_' . $caractere;
                } else {
                    $resultat .= $mot_courant . $caractere;
                }
                $mot_courant = '';
            } else {
                $resultat .= $caractere;
            }
        } else {
            $mot_courant .= $caractere;
        }
    }

    if ($mot_courant !== '') {
        $longueur_mot = 0;
        for ($j = 0; isset($mot_courant[$j]); $j++) {
            $longueur_mot++;
        }
        if ($longueur_mot >= 2 and $mot_courant[$longueur_mot - 2] === 'm' and $mot_courant[$longueur_mot - 1] === 'e') {
            $resultat .= $mot_courant . '_';
        } else {
            $resultat .= $mot_courant;
        }
    }
    return $resultat; 
}


$output = '';

if (isset($_GET['str']) and isset($_GET['fonction'])) {
    $str_val = $_GET['str'];
    $fonction_val = $_GET['fonction'];

    switch ($fonction_val) {
        case 'gras':
            $output = gras($str_val);
            break;
        case 'cesar':
            $output = cesar($str_val);
            break;
        case 'plateforme':
            $output = plateforme($str_val);
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de transformation avec des fonctions</title>
</head>
<body>
    <h3> Entrer un texte à transformer grâce aux fonctions que vous allez choisir.<br></H3>
    <p> La fonction <span style="color: blue;">gras</span> <i>va transformer en <b>gras</b> les mots commençant par une majuscule.</i><br></p>
    <p> La fonction <span style="color: blue;">cesar</span>  <i>va décaler d'un certain décalage (2 par défaut) les lettres de votre texte (a devient c par exemple).</i><br></p>
    <p> La fonction <span style="color: blue;">plateforme</span>  <i>va ajouter _ aux mots se terminant par me.</i><br></p>
    <form method="get" action="">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" name="str" id="str" value="<?php echo isset($_GET['str']) ? htmlspecialchars($_GET['str']) : ''; ?>">
        <br><br>
        <label for="fonction">Fonction :</label>
        <select name="fonction" id="fonction">
            <option value="gras" <?php echo (isset($_GET['fonction']) and $_GET['fonction'] === 'gras') ? 'selected' : ''; ?>>Gras</option>
            <option value="cesar" <?php echo (isset($_GET['fonction']) and $_GET['fonction'] === 'cesar') ? 'selected' : ''; ?>>Cesar</option>
            <option value="plateforme" <?php echo (isset($_GET['fonction']) and $_GET['fonction'] === 'plateforme') ? 'selected' : ''; ?>>Plateforme</option>
        </select>
        <br><br>
        <button type="submit">Appliquer la fonction</button>
    </form>
    
    <?php if (isset($output) and $output !== '') { ?>
        <h3>Résultat :</h3>
        <p><?php echo ($output); ?></p>
    <?php } ?>
</body>
</html>