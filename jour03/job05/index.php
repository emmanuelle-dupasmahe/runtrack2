<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
$voyelles = [
    "a" => 'v', "e" => 'v', "i" => 'v', "o" => 'v', "u" => 'v', "y" => 'v',
    "A" => 'v', "E" => 'v', "I" => 'v', "O" => 'v', "U" => 'v', "Y" => 'v'
];

$consonnes = [
    'b' => 'v', 'c' => 'v', 'd' => 'v', 'f' => 'v', 'g' => 'v', 'h' => 'v',
    'j' => 'v', 'k' => 'v', 'l' => 'v', 'm' => 'v', 'n' => 'v', 'p' => 'v',
    'q' => 'v', 'r' => 'v', 's' => 'v', 't' => 'v', 'v' => 'v', 'w' => 'v',
    'x' => 'v', 'z' => 'v',
    'B' => 'v', 'C' => 'v', 'D' => 'v', 'F' => 'v', 'G' => 'v', 'H' => 'v',
    'J' => 'v', 'K' => 'v', 'L' => 'v', 'M' => 'v', 'N' => 'v', 'P' => 'v',
    'Q' => 'v', 'R' => 'v', 'S' => 'v', 'T' => 'v', 'V' => 'v', 'W' => 'v',
    'X' => 'v', 'Z' => 'v'
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