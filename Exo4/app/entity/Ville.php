<?php

//Écrire une classe représentant une ville. Elle doit avoir les méthodes setNom() et setDépartement()
// et une méthode affichant « la ville X est dans le département Y ». Cette classe n'a pas de constructeur.
//Créer des instances de Ville, affecter leurs propriétés et utiliser la méthode d’affichage.

class Ville
{
    private $nom;
    private $departement;
    private static $villeLongue;

    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
        if (strlen($nom) > strlen(self::$villeLongue)) {
            self::$villeLongue = $nom;
        }
    }

    public static function getVilleLongue()
    {
        return self::$villeLongue;
    }

    public function affiche()
    {
        echo "La ville de $this->nom est dans le département $this->departement";
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDepartement()
    {
        return $this->departement;
    }
}

