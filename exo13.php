<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivanes: marque, modèle, 
    nb de portes et vitesseActuelle ainsi que les méthodes demarrer(), accelerer(),
    et stopper() en plus des ascesseurs(get) et mutateurs (set) traditionnels.
    La vitesse initiale de chaque véhicule distancié est de 0.
    Une méthode personnalisée pourra afficher toutes les informations d'un véhicule.

    v1->"Peugeot", "408",5
    v2->"Citroen", "C4",3

    Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en 
    réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture.
    Vous devez afficher les tests et les éléments suivants:

    Bonus: ajouter une méthode ralentir(vitesse) dans la classe Voiture.
    <br>

<?php



class Voiture{
    private string $marque;
    private string $modèle;
    private string $nbPortes;
    private int $vitesseActuelle;
    private bool $estDemarrer = false;
    private bool $stopper = false;


public function __construct (string $marque, string $modèle, string $nbPortes){
    $this->marque = $marque;
    $this->modèle = $modèle;
    $this->nbPortes = $nbPortes;
    $this->vitesseActuelle = 0;
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

    public function getNbPortes(): string
    {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    public function getVitesseActuelle(): int
    {
        return $this->vitesseActuelle;
    }
    
    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;
        
        return $this;
    }
    
    public function getEstDemarrer()
    {
        return $this->estDemarrer;
    }
    
    public function setEstDemarrer($estDemarrer)
    {
        $this->estDemarrer = $estDemarrer;
        
        return $this;
    }

    
    public function getstopper()
    {
        return $this->stopper;
    }
    
    public function setstopper($stopper)
    {
        $this->stopper = $stopper;
        
        return $this;
    }
    public function demarrer(){
        $this->estDemarrer = true;
    return $this->marque. $this->modèle. " démarre.<br>";
    }

    public function accelerer($vitesse){
         $this->vitesseActuelle += $vitesse;
        //  $this->vitesseActuelle = $this->vitesseActuelle + $vitesse;
    return $this->marque. $this->modèle. " accélère de:" .$this->vitesseActuelle. "km/h <br>";
    }
    
    public function stopper(){
        $this->stopper = true;
        $this->vitesseActuelle = 0; 
        return $this->marque. $this->modèle. " est stoppé.<br>";
    }

    public function ralentir($vitesse){
        $this->vitesseActuelle -= $vitesse;
    return $this->marque. $this->modèle." ralentit.<br>";
    } 
    
    public function afficherInfos(){
    return "Nom et modèle du véhicule:" .$this->marque. $this->modèle.".<br> Nombre de portes:".$this->nbPortes.".<br> Le véhicule".$this->marque. "est".$this->estDemarrer.".<br> Sa vitesse actuelle est de:". $this->vitesseActuelle. "km/h<br>";    
}  
    }



$V1 = new voiture("Peugeot", "408", "5");
$V2 = new voiture("Citroen", "C4", "3");

echo $V1->demarrer();
echo "<br>";echo "<br>";
//var_dump($V1->getEstDemarrer());
echo $V1->accelerer(70);
echo $V1->ralentir(30);
echo "<br>";echo "<br>";
echo $V1->afficherInfos();
echo "<br>";echo "<br>";
echo $V2->afficherInfos();



    