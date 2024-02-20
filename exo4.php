<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function compterVoyellesDansChaine($chaine) {
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
    $nombreVoyelles = 0;

    for ($i = 0; $i < strlen($chaine); $i++) {
        if (in_array($chaine[$i], $voyelles)) {
            $nombreVoyelles++;
        }
    }

    return $nombreVoyelles;
}

// Exemple d'utilisation avec un tableau de chaînes
$tableauChaines = array("Hello World", "Bonjour", "Programming");
foreach ($tableauChaines as $chaine) {
    $resultat = compterVoyellesDansChaine($chaine);
    echo "Nombre de voyelles dans '$chaine' : $resultat\n";
}

?>

</body>
</html>