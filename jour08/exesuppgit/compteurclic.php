<?php
//session qui récupère le nombre de clics

session_start();

if (!isset($_SESSION['clics'])) {
    $_SESSION['clics'] = 0;
}
if (isset($_POST['increment'])) {
    $_SESSION['clics']++;
}

if (isset($_POST['reset'])) {
    $_SESSION['clics'] = 0;
}


echo "Le nombre de clics est de : " . $_SESSION['clics'];
?>

<form method="post">
    <button type="submit" name="increment">+1</button>
    <button type="submit" name="reset">Reset</button>
</form>
