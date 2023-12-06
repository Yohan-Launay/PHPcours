<?php

//Créer une classe nommée VilleAvecRegion héritant de la classe Ville affichant « la ville X est dans le département Y de la région Z ».

require_once 'Ville.php';

class VilleAvecRegion extends Ville
{
    private $region;

    public function __construct(string $nom, string $departement, string $region)
    {
        parent::setNom($nom);
        parent::setDepartement($departement);
        $this->region = $region;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): void
    {
        $this->region = $region;
    }

    public function affiche()
    {
        echo "La ville de ".$this->getNom()." est dans le département ".$this->getDepartement()." de la région $this->region";
    }
}