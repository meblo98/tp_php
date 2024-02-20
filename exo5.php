<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function trouverElementsCommuns($tableau1, $tableau2) {
    // Utilisation de la fonction array_intersect pour trouver les éléments communs
    $elementsCommuns = array_intersect($tableau1, $tableau2);

    return $elementsCommuns;
}

// Exemple d'utilisation avec deux tableaux d'entiers
$tableau1 = array(1, 2, 3, 4, 5);
$tableau2 = array(3, 4, 5, 6, 7);

$elementsCommuns = trouverElementsCommuns($tableau1, $tableau2);

echo "Tableau 1 : " . implode(', ', $tableau1) . "\n";
echo "Tableau 2 : " . implode(', ', $tableau2) . "\n";
echo "Éléments communs : " . implode(', ', $elementsCommuns);

?>

</body>
</html>