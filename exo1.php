<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function determinerCovid19($symptomes) {
    // Vérifier la présence de symptômes associés à la COVID-19
    $symptomesCovid = array("fièvre", "toux", "difficultés respiratoires", "perte de goût ou d'odorat");

    foreach ($symptomesCovid as $symptome) {
        if (in_array($symptome, $symptomes)) {
            return "Le patient pourrait être atteint de la COVID-19. Consultez un professionnel de la santé.";
        }
    }

    return "Le patient ne présente pas de symptômes typiques de la COVID-19. Cependant, consultez un professionnel de la santé pour une évaluation plus approfondie si nécessaire.";
}

// Exemple d'utilisation
$symptomesPatient = array("fièvre", "toux");

$resultat = determinerCovid19($symptomesPatient);

echo "Symptômes du patient : " . implode(', ', $symptomesPatient) . "\n";
echo "Résultat de l'évaluation : $resultat";

?>

</body>
</html>