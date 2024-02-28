<h1>Exercice 5</h1>

</p>Créer une fonction personnalisée permettant de créer un formulaire de champs
de texte en précisant le nom des champs associés. 

Exemple:
$nomsInput = array("Nom","Prénom", "Ville");
afficherInput($nomsInput);

<?php
$nomsInput = ["Nom", "Prénom", "Ville"];
afficherInput($nomsInput);
function afficherInput($nomsInput)
{
    echo "<form>";

    foreach ($nomsInput as $nom){
        echo "$nom <input type='text";
        echo "<input type=$nom'><br>";
    }
    echo "</form>";
}


