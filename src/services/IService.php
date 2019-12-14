<?php
interface IService
{
    public function ajouterEtudiant($matricule,$nom,$prenom);
    public function ajouterProfesseur($matiere,$nom,$prenom);
    public function majEtudiant($idE,$matricule,$nom,$prenom);
    public function majProfesseur($idP,$matiere,$nom,$prenom);
}