<h1>Exercice 8</h1>

<p>Soit l'URL suivante: http://my.mobirise.com/data/userpic/764.jpg
    Créer une fonction personnalisée permettant d'afficher l'image N fois
    à l'écran.
    Exemple:
    repeterImage($url,4);


<?php
$Url = "http://my.mobirise.com/data/userpic/764.jpg";
echo repeterImage($Url, 0);

function repeterImage($url, $nbRepetitions) {
    for ($i = 0; $i < $nbRepetitions; $i++) {
        echo "<img src='$url' $i'><br>";
    }
}

repeterImage('http://my.mobirise.com/data/userpic/764.jpg', 4);
    