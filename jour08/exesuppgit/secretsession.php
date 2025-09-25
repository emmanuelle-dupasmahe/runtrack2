<?php
session_start();

$_SESSION['secret']="abracadabra";
if (isset($_POST['secret'])) {
    echo "<span style='font-size: 2em; color: blue;'>Voici le secret : " . htmlspecialchars($_SESSION['secret']) . " !</span><br><br>";
}

?>
<form method="post">
        <button type="submit" name='secret'>Voir le secret</button>
    </form>