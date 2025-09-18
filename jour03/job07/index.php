<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$length = 0;

while (isset($str[$length])) {
    $length++;
}
$firstChar = $str[0];

for ($i = 0; $i < $length - 1; $i++) {
    $str[$i] = $str[$i + 1];
}

$str[$length - 1] = $firstChar;

echo $str;
?>
