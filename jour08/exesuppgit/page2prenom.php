<?php

session_start();


if (isset($_POST['deconnexion'])) {
    
    $_SESSION = array();

    // Détruit le cookie de session.
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
    header("Location: page1prenom.php");
    exit();
}

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $_SESSION['prenom'] = htmlspecialchars($_POST['prenom']);
}


if (isset($_SESSION['prenom'])) {
    $prenom = $_SESSION['prenom'];
    $message = "<span style='font-size: 2em; color: blue;'>Bonjour, " . $prenom . " !</span>";
} else {
    
    header("Location: page1prenom.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bonjour, <?php echo $prenom; ?> !</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <p>Votre prénom est conservé grâce à la session.</p>

    <form action="page2prenom.php" method="post">
        <button type="submit" name="deconnexion">Déconnexion</button>
    </form>
</body>
</html>