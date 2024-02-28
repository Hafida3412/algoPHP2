<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée "convertirMajRouge()" permettant de 
    transformer une chaîne de de caractère passée en argument en majuscules 
    et en rouge.
    Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);

<br>

<?php

$texte="Mon texte en paramètre";

function convertirMajRouge($text){
   echo "<span style='color: red';> " . mb_strtoupper("$text", "UTF8") . "</span><br>";

}

convertirMajRouge($texte);

