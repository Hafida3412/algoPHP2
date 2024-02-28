<h1>Exercice 2</h1>

<p>Soit le tableau suivant:
    $capitales = array
    ("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington","Italie"=>"Rome");

Réaliser un algorithme permettant d'afficher le tableau HTML suivant
(notez que le nom du pays s'affichera en majuscule et que le tableau est trié par 
ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
Vous devrez appeler la fonction comme suit: 
    /*afficherTableHTML($capitales);*/

<table>
    <thead>
    <tr>
        <th>Pays</th>
        <th>Capitales</th>
    </tr>
</thead>
    <tr>
        <td>ALLEMAGNE</td>
        <td>Berlin</td>
    </tr>
    <tr>
        <td>FRANCE</td>
        <td>Paris</td>
    </tr>
    <tr>
        <td>ITALIE</td>
        <td>Rome</td>
    </tr>
    <tr>
        <td>USA</td>
        <td>Washington</td>
    </tr>

</table>


<?php


$Noms= [
    "ALLEMAGNE"=> "Berlin",
    "FRANCE"=> "Paris",
    "ITALIE"=> "Rome",
    "USA"=>"Washington"
];


ksort($Noms);

function afficherTableHTML($Noms) {
    echo '<br>';
    echo "<table> 
    <thead>
    <tr>
        <th>Pays</th>
        <th>Capitales</th>
    </tr>
</thead>";
    foreach($Noms as $Pays => $capitales){
        echo "
    <tr>
    <td>".mb_strtoupper($Pays)."</td>
    <td>".ucfirst($capitales)."<td>
    </tr>";
    }

    echo "</table>";
}
    

afficherTableHTML($Noms);

