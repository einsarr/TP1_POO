<?php
class Personne{

    protected $nom;
    protected $prenom;

    public function __construct($nom,$prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function saisie()
    {
        $this->nom = "SARR";
        $this->prenom = "Moussa";
    }
    public function affiche()
    {
        echo "Prenom : ".$this->prenom." - Nom : ".$this->nom;
    }

}

