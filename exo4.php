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
$tableauChaines = ["Hello World", "meblo barham", "Programming"];
foreach ($tableauChaines as $chaine) {
    $resultat = compterVoyellesDansChaine($chaine);
    echo "Nombre de voyelles dans '$chaine' : $resultat<br>";
}

?>