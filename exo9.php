<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function calculerFrequencesCaracteres($chaine) {
    // Initialiser un tableau pour stocker les fréquences
    $frequences = array();

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($chaine); $i++) {
        $caractere = $chaine[$i];

        // Incrémenter la fréquence du caractère dans le tableau
        if (isset($frequences[$caractere])) {
            $frequences[$caractere]++;
        } else {
            $frequences[$caractere] = 1;
        }
    }

    return $frequences;
}

// Exemple d'utilisation
$chaine = "programming";
$resultatFrequences = calculerFrequencesCaracteres($chaine);

echo "Chaîne de caractères : $chaine\n";
echo "Fréquences des caractères :\n";

foreach ($resultatFrequences as $caractere => $frequence) {
    echo "$caractere : $frequence\n";
}

?>

</body>
</html>