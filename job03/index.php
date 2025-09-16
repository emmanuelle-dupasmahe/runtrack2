<?php
$mon_booleen = true;
$mon_entier = 17;
$mon_nbvirgule = 1.7;
$ma_chainecarac = "Vive PHP !";

$variables = [
['type' => 'boolean', 'name' => '$mon_booleen', 'value' => $mon_booleen],
['type' => 'integer', 'name' => '$mon_entier', 'value' => $mon_entier],
['type' => 'float', 'name' => '$mon_nbvirgule', 'value' => $mon_nbvirgule],
['type' => 'string', 'name' => '$ma_chainecar', 'value' => $ma_chainecarac],
];
?>
<!DOCTYPE html>

<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Informations sur les variables</title>
<style>
table {
border-collapse: collapse;
width: 500px;
}
th, td {
border: 2px solid #541ae8ff;
padding: 8px;
text-align: left;
}
th {
background-color: #bae3eeff;
}
</style>
</head>
<body>

<h2>Tableau des variables primitives sur PHP</h2>

<table>
<thead>
<tr>
<th>Type</th>
<th>Nom</th>
<th>Valeur</th>
</tr>
</thead>
<tbody>
<?php foreach ($variables as $variable): ?> <!--utilsation de la condition for dans php-->
<tr>
<td><?php echo htmlspecialchars($variable['type']); ?></td>
<td><?php echo htmlspecialchars($variable['name']); ?></td>
<td><?php echo htmlspecialchars(print_r($variable['value'], true)); ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

</body>
</html>