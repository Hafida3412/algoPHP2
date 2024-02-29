<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher.
    On pourra préciser dans le tableau associatif si la case est cochée ou non.

    Exemple:
    genererCheckbox($elements);
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.

    
<?php

$elements = [
    "Choix 1"=>"",
    "Choix 2"=>"checked",
    "Choix 3"=>""
];

function genererCheckbox($elements){
    echo "<form>";
    foreach ($elements as $choix=> $value){
        echo  "<input type ='checkbox' name='".$choix."' value='".$choix."' ". $value.">",
        '<label for="'.$choix.'">'.$choix.'</label>';
        
        
    }
    echo "</form>";
    
}
genererCheckbox($elements);
