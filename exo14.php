<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une
    classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété
    supplémentaire (autonomie).

    Instancier une voiture "classique" et une voiture "électrique" ayant les 
    caractéristiques suivantes:

    Peugeot 408: $v1 = new Voiture("Peugeot", "408");
    BMW i3 150: $ve1 = new VoitureElec("BMW", "I3", 100);

    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante:
    
    echo $v1->getInfos()<br/>
    echo $ve1->getInfos()<br/>


    <?php
//CREATION DE LA CLASSE PARENT
class Voiture{
    
    protected string $marque;//UTILISATION DE "PROTECTED" AU LIEU DE PRIVE POUR QUE CA S ETENDE 
    protected string $modèle;

    public function __construct(string $marque, string $modèle){
        $this->marque = $marque;
        $this->modèle = $modèle;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }
 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModèle(): string
    {
        return $this->modèle;
    }

    public function setModèle($modèle)
    {
        $this->modèle = $modèle;

        return $this;
    }


    public function getInfos()
    {
        return $this->marque." ". $this->modèle;

}
}
    //CREATION DE LA CLASSE ENFANT
class VoitureElec extends Voiture{

    private string $autonomie;

    //FORMULE A UTILISER POUR FAIRE LE LIEN AVEC LA CLASSE PARENT
    public function __construct(string $marque, string $modèle,int $autonomie){
        parent::__construct($marque, $modèle);
        $this->autonomie = $autonomie;
    }

    public function getautonomie(): string
    {
        return $this->autonomie;
    }
 
    public function setautonomie($autonomie)
    {
        $this->autonomie = $autonomie;

        return $this;
    }

    public function getInfos()
    {
        return parent::getInfos()." ". $this->autonomie;

}
}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3","100");

echo $v1->getInfos();
echo $ve1->getInfos();


    