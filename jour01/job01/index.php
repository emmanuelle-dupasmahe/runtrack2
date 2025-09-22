<?php
$str = "La plateforme";
$str2 = "Vive";
$str3 = "!";
//afficher: "Vive laPlateforme !"
$result = $str2." ".$str." ".$str3;
echo $result."<br>";
echo "<p>$str2 $str $str3</p><br>";
?>
<?= "<p>$str2 $str $str3</p>"; ?>

<?php
//ajouter 4 à une variable
$val = 6;
echo $val. "\n";
$val = $val + 4; //§val+=4;
echo $val. "\n"."<br>";

//changer la variable booleeene en false
$myBool = true;
echo $myBool. "\n";
$myBool = false;
echo $myBool. "\n";

?>
