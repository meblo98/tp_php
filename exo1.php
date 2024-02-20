<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function calculerProduitTableau($tableau) {
    $produit = 1;

    foreach ($tableau as $element) {
        $produit *= $element;
    }

    return $produit;
}

// Exemple d'utilisation
$tableauEntiers = array(2, 4, 6, 8, 10);
$resultat = calculerProduitTableau($tableauEntiers);

echo "Le produit des éléments du tableau est : $resultat";

?>

</body>
</html>