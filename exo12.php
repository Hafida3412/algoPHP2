<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d'afficher les informations d'une
    variable.

    Soit le tableau suivant:
    $tableauValeurs=array (true, "texte", 10, 25. 369,array("valeur1", "valeur2"));

    A l'aide d'une boucle, afficher les informations des variables contenues dans le 
    tabeau.

<?php
"<br>";
$tableauValeur=[
    "bool"=>"true",
    "string(5)"=> "texte",
    "int" => 10,
    "float"=>(25.369),
    "array2" => ["valeur 1","valeur2"]

];

foreach($tableauValeur as $key => $Value){
    /*echo" '.$key. $Value.'";*/
    var_dump($tableauValeur);
}

