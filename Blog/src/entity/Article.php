<?php

namespace src\entity;

class Article
{
    private $id;
    private $titre;
    private $contenu;
    private $date;
    private $id_utilisateur;

    public function __construct($id, $titre, $contenu, $date, $id_utilisateur)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date = $date;
        $this->id_utilisateur = $id_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    // /**
    //  * @param mixed $id
    //  */
    // public function setId($id): void
    // {
    //     $this->id = $id;
    // }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    // /**
    //  * @param mixed $titre
    //  */
    // public function setTitre($titre): void
    // {
    //     $this->titre = $titre;
    // }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    // /**
    //  * @param mixed $contenu
    //  */
    // public function setContenu($contenu): void
    // {
    //     $this->contenu = $contenu;
    // }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    // /**
    //  * @param mixed $date
    //  */
    // public function setDate($date): void
    // {
    //     $this->date = $date;
    // }

    /**
     * @return mixed
     */
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    // /**
    //  * @param mixed $id_utilisateur
    //  */
    // public function setId_utilisateur($id_utilisateur): void
    // {
    //     $this->id_utilisateur = $id_utilisateur;
    // }
}