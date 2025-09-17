<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$length = 0;

while (isset($str[$length])) {
    $length++;
}
$lastChar = $str[$length - 1]; 

for ($i = $length - 1; $i > 0; $i--) {
    $str[$i] = $str[$i - 1];
}

$str[0] = $lastChar;

echo $str;
?>