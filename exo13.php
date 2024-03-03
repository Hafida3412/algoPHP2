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

    Bonus: ajouter uen méthode ralentir(vitesse) dans la classe Voiture.

<?php

class Voiture{
    private string $marque;
    private string $modèle;
    private string $nbPortes;
    private string $vitesseActuelle;

public function __construct (string $marque, string $modèle, string $nbPortes){
    $this->marque = $marque;
    $this->modèle = $modèle;
    $this->nbPortes = $nbPortes;
    $this->vitesseActuelle = 0;
}

    public function getMarque()
    {
        return $this->marque;
    }
 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModèle()
    {
        return $this->modèle;
    }

    public function setModèle($modèle)
    {
        $this->modèle = $modèle;

        return $this;
    }

    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }

    public function demarrer(){
    return $this->marque. $this->modèle. $this->vitesseActuelle;
    }

    public function accelerer($vitesse){
    return $this->marque. $this->modèle. "accélère de ".($this->vitesseActuelle > 0). "km/h.";
    }
    
    public function stopper(){
    return $this->marque. $this->modèle. ($this->vitesseActuelle = 0). "est stoppé";
    }

    public function ralentir($vitesse){
    return $this->marque. $this->modèle."ralentit de ". ($this->vitesseActuelle < 0)."km/h";
    } 
    public function afficherInfos() {
        $result = "<h1>Infos véhicule v1</h1>";       
}

    public function __toString(){

    }
}