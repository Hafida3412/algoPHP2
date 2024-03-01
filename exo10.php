<h1>Exercice 10</h1>

<p>En utilisant l'ensemble des fonctions personnalisées créées précédemment, 
    créer un formulaire complet qui contient les informations suivantes:
    champs de texte avec nom, prénom, adresse email, ville, sexe et une liste 
    de choix parmi lesquels on pourra sélectionner un intitulé de formation:
        "Développeur Logiciel", "Designer web", "Intégrateur" ou "Chef de projet"
    Le formulaire devra également comporter un bouton permettant de le soumettre à 
    un traitement de validation (submit).
 

    <?php

$nomsInput = ["Nom", "Prénom", "Ville", "Sexe"];
afficherInput($nomsInput);
function afficherInput($nomsInput){
    echo "<form>";

    foreach ($nomsInput as $nom){
        echo "$nom <input type='text";
        echo "<input type=$nom'><br>";
    }
    echo "</form>";
}

"<br>";
$nomsRadio = [
    "Développeur Logiciel"=> "",
    "Designer Web" => "",
    "Intégrateur"=> "checked",
    "Chef de projet"=>""
];
afficherRadio($nomsRadio);
Function afficherRadio($nomsRadio){
    echo "<form>";

    foreach($nomsRadio as $nom => $value){
       echo "<input type='radio' name='". $nom. "' value='".$nom."' ". $value."/>",
       '<label for="'.$nom.'">'.$nom.'</label>';
        
    }
  
    echo"</form>";

    };

   /*"<input type ='submit' value= 'Valider'>;*/

    echo '<input type ="Submit" value="Valider"/>';
   

    

  
    
    
    
      
    

