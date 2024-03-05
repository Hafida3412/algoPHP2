<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php,
    vérifier si une adresse e-mail a le bon format.<br>

    Affichage:<br>
    L'adresse elan@elan-formation.fr est une adresse e-mail valide.<br>

    L'adresse contact@elan est une adresse e-mail invalide.
    <br>
    <br>

    <?php

    //$email = "elan@elan-formation.fr";//TEST ADRESSE EMAIL VALIDE
    $email = "contact@elan";//TEST ADRESSE EMAIL INVALIDE
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "L'adresse ".$email. " est une adresse e-mail valide.";
    }else{
        echo "L'adresse ".$email. " est une adresse e-mail invalide.";
    }


