<?php 

namespace Model\Entity;

class Employes extends BaseEntity {
    private string $prenom;
    private string $nom;
    private string $sexe;
    private string $service;
    private string $date_embauche;
    private string $salaire;

    


    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getService()
    {
        return $this->service;
    }

    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
 
    public function getDate_embauche()
    {
        return $this->date_embauche;
    }

    public function setDate_embauche($date_embauche)
    {
        $this->date_embauche = $date_embauche;

        return $this;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}