<?php

namespace src\entity;

use Doctrine\ORM\Mapping as ORM;

class Utilisateur
{
    #[ORM\Id]
    private $id;
    #[ORM\Column(type: 'string', length: 255)]
    private $nom;
    #[ORM\Column(type: 'string', length: 255)]
    private $prenom;
    #[ORM\Column(type: 'string', length: 255)]
    private $pseudo;
    #[ORM\Column(type: 'string', length: 255)]
    private $email;
    #[ORM\Column(type: 'string', length: 255)]
    private $password;

    /**
     * @param $nom
     * @param $prenom
     * @param $pseudo
     * @param $email
     * @param $password
     */
    public function __construct($nom, $prenom, $pseudo, $email, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

}