<?php

class Visiteur{

    private $civilite;

    private $nom;

    private $prenom;

    private $dateNaissance;

    private $telephone1;

    private $telephone2;

    private $email;

    private $diplomeObtenu;

    private $etablissementOrigine;

    private $sourcesInfoImie;

    private $disponibilite;

    private $id;

    private $idFormation;

    private $idFormation1;

    private $idFormation2;

    private $idSite;

    private $idStatut;



    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getCivilite()
    {
        return $this->civilite;
    }

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

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setTelephone1($telephone1)
    {
        $this->telephone1 = $telephone1;

        return $this;
    }

    public function getTelephone1()
    {
        return $this->telephone1;
    }

    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    public function getTelephone2()
    {
        return $this->telephone2;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setDiplomeObtenu($diplomeObtenu)
    {
        $this->diplomeObtenu = $diplomeObtenu;

        return $this;
    }

    public function getDiplomeObtenu()
    {
        return $this->diplomeObtenu;
    }

    public function setEtablissementOrigine($etablissementOrigine)
    {
        $this->etablissementOrigine = $etablissementOrigine;

        return $this;
    }

    public function getEtablissementOrigine()
    {
        return $this->etablissementOrigine;
    }

    public function setSourcesInfoImie($sourcesInfoImie)
    {
        $this->sourcesInfoImie = $sourcesInfoImie;

        return $this;
    }

    public function getSourcesInfoImie()
    {
        return $this->sourcesInfoImie;
    }

    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getDisponibilite()
    {
        return $this->disponibilite;
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

    public function setIdFormation(\ContactBundle\Entity\Formation $idFormation = null)
    {
        $this->idFormation = $idFormation;

        return $this;
    }

    public function getIdFormation()
    {
        return $this->idFormation;
    }

    public function setIdFormation1(\ContactBundle\Entity\Formation $idFormation1 = null)
    {
        $this->idFormation1 = $idFormation1;

        return $this;
    }

    public function getIdFormation1()
    {
        return $this->idFormation1;
    }

    public function setIdFormation2(\ContactBundle\Entity\Formation $idFormation2 = null)
    {
        $this->idFormation2 = $idFormation2;

        return $this;
    }

    public function getIdFormation2()
    {
        return $this->idFormation2;
    }

    public function setIdSite(\ContactBundle\Entity\Site $idSite = null)
    {
        $this->idSite = $idSite;

        return $this;
    }

    public function getIdSite()
    {
        return $this->idSite;
    }

    public function setIdStatut(\ContactBundle\Entity\Statut $idStatut = null)
    {
        $this->idStatut = $idStatut;

        return $this;
    }

    public function getIdStatut()
    {
        return $this->idStatut;
    }


	public function save($pdo){
		try{

			$stmt = $pdo->prepare('INSERT INTO visiteurs (Civilite, Nom, Prenom, Date_naissance, Telephone_1, Telephone_2, Email, Diplome_obtenu, Etablissement_origine, Sources_Info_IMIE, Disponibilite, ID_Statut, ID_Formation, ID_Site, ID_Formation_1, ID_Formation_2) VALUES (:civ, :nom, :prenom, :dateNaissance, :tel1, :tel2, :mail, :dernDiplome, :etabOrig, :infoIMIE, :dispo, :statut, :formation, :site, :formation1, :formation2)');

			$stmt->bindParam(':civ', $this->civilite, PDO::PARAM_STR);
			$stmt->bindParam(':nom', $this->nom, PDO::PARAM_STR);
			$stmt->bindParam(':prenom', $this->prenom, PDO::PARAM_STR);
			$stmt->bindParam(':dateNaissance', $this->dateNaissance, PDO::PARAM_STR);
			$stmt->bindParam(':tel1', $this->tel1, PDO::PARAM_STR);
			$stmt->bindParam(':tel2', $this->tel2, PDO::PARAM_STR);
			$stmt->bindParam(':mail', $this->mail, PDO::PARAM_STR);
			$stmt->bindParam(':dernDiplome', $this->dernDiplome, PDO::PARAM_STR);
			$stmt->bindParam(':etabOrig', $this->etabOrig, PDO::PARAM_STR);
			$stmt->bindParam(':infoIMIE', $this->infoIMIE, PDO::PARAM_STR);
			$stmt->bindParam(':dispo', $this->dispo, PDO::PARAM_STR);
			$stmt->bindParam(':statut', $this->statut, PDO::PARAM_STR);
			$stmt->bindParam(':formation', $this->formation, PDO::PARAM_STR);
			$stmt->bindParam(':site', $this->site, PDO::PARAM_STR);
			$stmt->bindParam(':formation1', $this->formation1, PDO::PARAM_STR);
			$stmt->bindParam(':formation2', $this->formation2, PDO::PARAM_STR);

			$stmt->execute();

			$stmt->prepare('SELECT MAX(id) FROM visiteurs');

			$stmt->execute();

			$obj = $stmt->fetch(PDO::FETCH_OBJ);

		

			//Permet de binder les paramètres à la requète de manière sécurisée


			return "Votre nouveau formulaire à été enregistré avec succès.";
		}
		catch(PDOException $e){
			return "Votre enregistrement a échoué, en voici la raison : " . $e->getMessage();
		}
	}
}