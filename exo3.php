<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function rotationDroiteTableau($tableau, $positions) {
    $taille = count($tableau);

    // Assurer que le nombre de positions est positif
    $positions = $positions % $taille;

    // Effectuer la rotation à droite en utilisant array_slice et array_merge
    $tableauRotationDroite = array_merge(array_slice($tableau, -$positions), array_slice($tableau, 0, -$positions));

    return $tableauRotationDroite;
}

// Exemple d'utilisation
$tableauInitial = array(1, 2, 3, 4, 5);
$nombrePositions = 2;
$tableauApresRotation = rotationDroiteTableau($tableauInitial, $nombrePositions);

echo "Tableau initial : " . implode(', ', $tableauInitial) . "\n";
echo "Tableau après rotation à droite de $nombrePositions position(s) : " . implode(', ', $tableauApresRotation);

?>

</body>
</html>