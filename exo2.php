<?php

function supprimerDoublons($tableau) {
    // Utilisation de la fonction array_unique pour supprimer les doublons
    $tableauSansDoublons = array_unique($tableau);

    // Réindexation du tableau pour réorganiser les clés
    $tableauSansDoublons = array_values($tableauSansDoublons);

    return $tableauSansDoublons;
}

// Exemple d'utilisation
$tableauAvecDoublons = [1, 2, 3, 4, 2, 5, 6, 3];
$tableauSansDoublons = supprimerDoublons($tableauAvecDoublons);

echo "Tableau avec doublons : " . implode(', ', $tableauAvecDoublons) . "<br>";
echo "Tableau sans doublons : " . implode(', ', $tableauSansDoublons);

?>