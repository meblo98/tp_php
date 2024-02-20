<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function elementsSansDoublons($tableau) {
    // Utilisation de la fonction array_count_values pour compter les occurrences de chaque élément
    $occurrences = array_count_values($tableau);

    // Filtrer les éléments qui n'ont qu'une occurrence
    $elementsSansDoublons = array_filter($occurrences, function ($occurrence) {
        return $occurrence === 1;
    });

    // Récupérer les clés (éléments) du tableau résultant
    $elementsSansDoublons = array_keys($elementsSansDoublons);

    return $elementsSansDoublons;
}

// Exemple d'utilisation
$tableau = array(1, 2, 3, 2, 4, 5, 6, 6, 7);
$resultat = elementsSansDoublons($tableau);

echo "Tableau original : " . implode(', ', $tableau) . "\n";
echo "Éléments sans doublons : " . implode(', ', $resultat);

?>

</body>
</html>