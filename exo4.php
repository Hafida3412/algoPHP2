<h1>Exercice 4</h1>

<p>A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML 
    qui contiendra le lien hypertexte de la page Wikipedia de la capitale (le lien 
    hypertexte devra s'ouvrir dans un nouvel onglet et le tableau sera trié par 
    ordre alphabétique de la capitale).

    On admet que l'URL de la page Wikipédia de la capitale adopte la forme:
        https://fr.wikipedia.org/wiki/

    Le tableau passé en argument sera le suivant:
    $capitales = array ("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>Washington,
    "Italie"=>"Rome", "Espagne"=>"Madrid");
<br>
<?php


"<br>";

$Noms= [
    "ALLEMAGNE"=> "Berlin",
    "FRANCE"=> "Paris" ,
    "ITALIE"=> "Rome" ,
    "USA"=>"Washington" ,
    "ESPAGNE"=>"Madrid"
];

ksort($Noms);

function afficherTableHTML($Noms) {
    echo '<br>';
    echo "<table> 
    <thead>
    <tr>
        <th>Pays</th>
        <th>Capitales</th>
        <th>Lien</th>
    </tr>
</thead>";

foreach($Noms as $Pays => $capitales){
    echo "
<tr>
<td>".mb_strtoupper($Pays)."</td>
<td>".ucfirst($capitales)."<td>
<td>"."https://fr.wikipedia.org/wiki/"."</td>
</tr>";
}

echo "</table>";
}

afficherTableHTML($Noms);

