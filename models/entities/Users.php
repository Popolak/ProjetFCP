<?php

class Users
{

    private $nom;

    private $prenom;

    private $login;

    private $mdp;

    private $id;



    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}
