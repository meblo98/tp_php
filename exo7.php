<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function concatenationChaines($tableau) {
    $nouvelleChaine = '';

    foreach ($tableau as $chaine) {
        $nouvelleChaine .= $chaine;
    }

    return $nouvelleChaine;
}

// Exemple d'utilisation
$tableauChaines = array("Bonjour", " meblo ", "barham", "!");
$resultatConcatenation = concatenationChaines($tableauChaines);

echo "Tableau de chaînes : " . implode(' - ', $tableauChaines) . "\n";
echo "Nouvelle chaîne : $resultatConcatenation";

?>

</body>
</html>