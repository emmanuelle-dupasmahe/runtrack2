<?php
function calcule(float $a, string $operation, float $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : Division par zéro !"; //attention à la division par zéro
            }
            return $a / $b;
        case '%':
            if ($b == 0) {
                return "Erreur : Modulo par zéro !"; //modulo par zéro
            }
            return $a % $b;
        default:
            return "Erreur : Opération non valide !";
    }
}

echo calcule(5, '+', 5);
echo "<br>";
echo calcule(5, '-', 5);
echo "<br>";
echo calcule(5, '%', 5);
echo "<br>";
echo calcule(5, '*', 5);
echo "<br>";
echo calcule(5, '/', 5);
echo "<br>";

