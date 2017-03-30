<?php

class Statut
{

    private $libelle;

    private $idBaseExterne;

    private $id;



    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setIdBaseExterne($idBaseExterne)
    {
        $this->idBaseExterne = $idBaseExterne;

        return $this;
    }

    public function getIdBaseExterne()
    {
        return $this->idBaseExterne;
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
