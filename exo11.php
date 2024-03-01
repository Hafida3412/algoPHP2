<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français
    (en toutes lettres) à partir d'une chaîne de caractère représentant une date.

    Exemple:
    formaterDateFr("2018-02-23");
<br>

<?php

"<br>";

$fmt = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

echo $fmt->format(new DateTime('2018-02-23'));

