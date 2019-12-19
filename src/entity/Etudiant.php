<?php
require "Personne.php";
class Etudiant extends Personne
{
    private $matricule;
    public function __construct($matricule,$nom,$prenom)
    {
        parent::__construct($nom,$prenom);
        $this->matricule = $matricule;
    }
    public function getMatricule()
    {
        return $this->matricule;
    }
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }
    public function affectation()
    {
        parent::saisie();
        $this->matricule = "FHR6783Y";
    }
    public function affichage()
    {
        parent::affiche();
        echo " - matricule : ".$this->matricule;
    }
}
