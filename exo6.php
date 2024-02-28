<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à 
    partir d'un tableau de valeurs.

Exemple:
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);

<br>


<?php


$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements){
    echo "<select>";
    foreach($elements as $element){
        echo "<option>$element</option>";
    }
    echo "</select>";
}