<?php

function trouverElementsCommuns($tableau1, $tableau2) {
    // Utilisation de la fonction array_intersect pour trouver les éléments communs
    $elementsCommuns = array_intersect($tableau1, $tableau2);

    return $elementsCommuns;
}

// Exemple d'utilisation avec deux tableaux d'entiers
$tableau1 = [1,5,8,6,7];
$tableau2 = [1,7,10,11,2];

$elementsCommuns = trouverElementsCommuns($tableau1, $tableau2);

echo "Tableau 1 : " . implode(', ', $tableau1) . "\n";
echo "Tableau 2 : " . implode(', ', $tableau2) . "\n";
echo "Éléments communs : " . implode(', ', $elementsCommuns);

?>
