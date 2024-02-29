<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec
    un tableau de valeurs en paramètre ("Monsieur", "Madame", "Mademoiselle").

    Exemple: afficherRadio($nomsRadio);
    


<?php

$nomsRadio = [
    "Masculin" => "",
    "Féminin" => "",
    "Autre" => "checked"
];
afficherRadio($nomsRadio);
Function afficherRadio($nomsRadio){
    echo "<form>";
    foreach($nomsRadio as $nom => $value){
       echo "<input type='radio' name='". $nom. "' value='".$nom."' ". $value."/>",
       '<label for="'.$nom.'">'.$nom.'</label>';
    }
    echo "</form>";
}
