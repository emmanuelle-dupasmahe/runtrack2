<!--Formulaire qui permet de choisir un style.css à appliquer à mon formulaire-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changement de Style</title>
    
    <?php
    if (isset($_GET['choix_style'])) {
        $choix_style = $_GET['choix_style'];
        $style_a_appliquer = 'default.css'; // Style par défaut

        switch ($choix_style) {
            case 'style1':
                $style_a_appliquer = 'style1.css';
                break;
            case 'style2':
                $style_a_appliquer = 'style2.css';
                break;
            case 'style3':
                $style_a_appliquer = 'style3.css';
                break;
        }
        echo '<link rel="stylesheet" href="' . $style_a_appliquer . '">';
    }
    ?>
</head>
<body>

    <h3>Choisissez un style.</h3>
    <form method="get">
        <label for="choix_style">Choisissez un style:</label>
        <select name="choix_style" id="choix_style">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
            <option value="style3">style3</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Envoyer">
    </form>
    
    </body>
</html>