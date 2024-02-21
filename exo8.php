<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function calculerMedian($tableau) {
    // Assurer que le tableau n'est pas vide
    if (empty($tableau)) {
        return null;
    }

    // Trier le tableau
    sort($tableau);

    $taille = count($tableau);
    $milieu = floor($taille / 2);

    // Calculer la médiane en fonction de la parité du nombre d'éléments dans le tableau
    if ($taille % 2 == 0) {
        // Si le tableau a un nombre pair d'éléments, prendre la moyenne des deux éléments du milieu
        $median = ($tableau[$milieu - 1] + $tableau[$milieu]) / 2;
    } else {
        // Si le tableau a un nombre impair d'éléments, prendre l'élément du milieu
        $median = $tableau[$milieu];
    }

    return $median;
}

// Exemple d'utilisation
$tableauEntiers = array(4, 2, 7, 1, 5, 3);
$resultatMedian = calculerMedian($tableauEntiers);

echo "Tableau d'entiers : " . implode(', ', $tableauEntiers) . "\n";
echo "Médiane : $resultatMedian";

?>

</body>
</html>