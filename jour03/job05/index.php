<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
$voyelles = [
    'a' => true, 'e' => true, 'i' => true, 'o' => true, 'u' => true, 'y' => true,
    'A' => true, 'E' => true, 'I' => true, 'O' => true, 'U' => true, 'Y' => true,
];

$consonnes = [
    'b' => true, 'c' => true, 'd' => true, 'f' => true, 'g' => true, 'h' => true,
    'j' => true, 'k' => true, 'l' => true, 'm' => true, 'n' => true, 'p' => true,
    'q' => true, 'r' => true, 's' => true, 't' => true, 'v' => true, 'w' => true,
    'x' => true, 'z' => true,
    'B' => true, 'C' => true, 'D' => true, 'F' => true, 'G' => true, 'H' => true,
    'J' => true, 'K' => true, 'L' => true, 'M' => true, 'N' => true, 'P' => true,
    'Q' => true, 'R' => true, 'S' => true, 'T' => true, 'V' => true, 'W' => true,
    'X' => true, 'Z' => true,
];

$dic = [
    'voyelles' => 0,
    'consonnes' => 0
];

$i = 0;
while (isset($str[$i])) {
    if (isset($voyelles[$str[$i]])) {
        $dic['voyelles']++;
    } else if (isset($consonnes[$str[$i]])) {
        $dic['consonnes']++;
    }
    $i++;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Comptage de voyelles et consonnes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }
        th, td {
            border: 2px solid blue;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #31edbeff;
        }
    </style>
</head>
<body>

    <h2>Résultats du comptage</h2>

    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic['voyelles']; ?></td>
                <td><?php echo $dic['consonnes']; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>