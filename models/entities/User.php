<?php

class User
{

    private $nomAdmin;

    private $prenomAdmin;

    private $login;

    private $motPasse;

    private $id;



    public function setNomAdmin($nomAdmin)
    {
        $this->nomAdmin = $nomAdmin;

        return $this;
    }

    public function getNomAdmin()
    {
        return $this->nomAdmin;
    }

    public function setPrenomAdmin($prenomAdmin)
    {
        $this->prenomAdmin = $prenomAdmin;

        return $this;
    }

    public function getPrenomAdmin()
    {
        return $this->prenomAdmin;
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

    public function setMotPasse($motPasse)
    {
        $this->motPasse = $motPasse;

        return $this;
    }

    public function getMotPasse()
    {
        return $this->motPasse;
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

    public function save($pdo){
        try{

            $stmt = $pdo->prepare('INSERT INTO user (nomAdmin, prenomAdmin, login, motPasse) VALUES (:nomAdmin, :prenomAdmin, :login, :motPasse)');

            $stmt->bindParam(':nomAdmin', $this->nomAdmin, PDO::PARAM_STR);
            $stmt->bindParam(':prenomAdmin', $this->prenomAdmin, PDO::PARAM_STR);
            $stmt->bindParam(':login', $this->login, PDO::PARAM_STR);
            $stmt->bindParam(':motPasse', $this->motPasse, PDO::PARAM_STR);

            $stmt->execute();

 

            //Permet de binder les paramètres à la requète de manière sécurisée


            return "Votre nouveau formulaire à été enregistré avec succès.";
        }
        catch(PDOException $e){
            return "Votre enregistrement a échoué, en voici la raison : " . $e->getMessage();
        }
    }
}
