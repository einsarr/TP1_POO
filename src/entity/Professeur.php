<?php
require "Personne.php";
class Professeur extends Personne
{
    private $matiere;
    public function __construct($matiere,$nom,$prenom)
    {
        parent::__construct($nom,$prenom);
        $this->matiere = $matiere;
    }
    public function getMatiere()
    {
        return $this->matiere;
    }
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }
    public function affectation()
    {
        parent::saisie();
        $this->matiere = "PHP";
    }
    public function affichage()
    {
        parent::affiche();
        echo " - matière : ".$this->matiere;
    }
}
