<?php

//Les objets repository permettent de récupérer des enregistrements en base de données, ils peuvent aussi hydrater nos objets avec les valeurs. Les repositories n'instancient pas les objets par contre, seul un controleur peut réaliser cette tâche.
//Toutes les requpetes select sont donc sensées s'y trouver.

class ContactRepository
{

	//Récupère la liste de tous les clients en base de données
	public function getAll($pdo) {

		//Effectuer la requête en bdd pour récupérer l'ensemble des clients enregistrés en bdd
		$resultats = $pdo->query('SELECT v.id, v.civilite, v.nom, v.prenom, v.dateNaissance, v.telephone1, v.telephone2, v.email, v.diplomeObtenu, v.etablissementOrigine, v.sourcesInfoImie, v.disponibilite, st.libelle, f.libelle, f.idBaseExterne, s.libelle, s.idBaseExterne FROM visiteur v INNER JOIN statut st ON v.idStatut = st.id INNER JOIN formation f ON v.idFormation = f.id INNER JOIN site s ON v.idSite = s.id');

		$resultats->setFetchMode(PDO::FETCH_OBJ);

		//Boucler sur tous les enregistrements récupérés grâce à votre requête SELECT
		//et pour chaque enregistrement :
		// 1 -  instancier un objet client
		// 2 -  hydrater ses attributs avec les valeurs récupérées en bdd
		// 3 - pour chaque objet client instanciés et hydratés, les ajouter dans un tableau
		// 4 - retourner ensuite ce tableau avec l'instruction return

		$listeContacts = array();

		while($obj = $resultats->fetch()){	

			$visiteur = new Visiteur ();
			$visiteur->setID($_POST["ID"]);
			$visiteur->setCivilite($_POST["civ"]);
			$visiteur->setNom($_POST["nom"]);
			$visiteur->setPrenom($_POST["prenom"]);
			$visiteur->setDateNaissance($_POST["dateNaissance"]);
			$visiteur->setTel1($_POST["tel1"]);
			$visiteur->setTel2($_POST["tel2"]);
			$visiteur->setmail($_POST["mail"]);
			$visiteur->setDernDiplome($_POST["dernDiplome"]);
			$visiteur->setEtabOrigine($_POST["etabOrig"]);
			$visiteur->setInfoIMIE($_POST["infoIMIE"]);
			$visiteur->setDispo($_POST["dispo"]);
			$visiteur->setStatut($_POST["statut"]);
			$visiteur->setFormation($_POST["formation"]);
			$visiteur->setSite($_POST["site"]);
			$visiteur->setFormation1($_POST["formation1"]);
			$visiteur->setFormation2($_POST["formation2"]);

			$listeContacts[] = $contact;

		}

		return $listeContacts;
	}

	//Récupère un contact en fonction de l'id renseigné
	public function getOneById($pdo, $id) {

		//Effectuer la requête en bdd pour récupérer le client correspondant à l'id renseigné
		$resultat = $pdo->query('SELECT v.id, v.civilite, v.nom, v.prenom, v.dateNaissance,, v.telephone1, v.telephone2, v.email, v.diplomeObtenu, v.etablissementOrigine, v.sourcesInfoImie, v.disponibilite, st.libelle, f.libelle, f.idBaseExterne, s.libelle, s.idBaseExterne FROM visiteur v INNER JOIN statut st ON v.idStatut = st.id INNER JOIN formation f ON v.idFormation = f.id INNER JOIN site s ON v.idSite = s.id WHERE v.id = ' . $id);

		$resultat->setFetchMode(PDO::FETCH_OBJ);

		$obj = $resultat->fetch();
		
		//Ensuite :
		// 1 -  instancier un objet client
		// 2 -  hydrater ses attributs avec les valeurs récupérées en bdd
		// 3 -  retourner ensuite cet objet

		$visiteur = new Visiteur ();
		$visiteur->setCivilite($_POST["civ"]);
		$visiteur->setNom($_POST["nom"]);
		$visiteur->setPrenom($_POST["prenom"]);
		$visiteur->setDateNaissance($_POST["dateNaissance"]);
		$visiteur->setTel1($_POST["tel1"]);
		$visiteur->setTel2($_POST["tel2"]);
		$visiteur->setmail($_POST["mail"]);
		$visiteur->setDernDiplome($_POST["dernDiplome"]);
		$visiteur->setEtabOrigine($_POST["etabOrig"]);
		$visiteur->setInfoIMIE($_POST["infoIMIE"]);
		$visiteur->setDispo($_POST["dispo"]);
		$visiteur->setStatut($_POST["statut"]);
		$visiteur->setFormation($_POST["formation"]);
		$visiteur->setSite($_POST["site"]);
		$visiteur->setFormation1($_POST["formation1"]);
		$visiteur->setFormation2($_POST["formation2"]);

		return $contact;
	}


}