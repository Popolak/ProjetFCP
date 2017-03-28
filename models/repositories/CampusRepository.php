<?php

class CampusRepository
{

	//Récupère la liste de tous les clients en base de données
	public function getAll($pdo) {

		//Effectuer la requête en bdd pour récupérer l'ensemble des clients enregistrés en bdd
		$resultats = $pdo->query('SELECT s.id, s.libelle, s.ID_base_externe FROM site s');

		$resultats->setFetchMode(PDO::FETCH_OBJ);

		//Boucler sur tous les enregistrements récupérés grâce à votre requête SELECT
		//et pour chaque enregistrement :
		// 1 -  instancier un objet client
		// 2 -  hydrater ses attributs avec les valeurs récupérées en bdd
		// 3 - pour chaque objet client instanciés et hydratés, les ajouter dans un tableau
		// 4 - retourner ensuite ce tableau avec l'instruction return

		$listeCampus = array();

		while($obj = $resultats->fetch()){	

			$campus = new Site();
			$campus->setLibelle($obj->libelle);
			$campus->setIdBaseExterne($obj->idExterne);
			$campus->setId($obj->id);


			$formation = new Formation();
			$formation->setId($obj->id);
			$formation->setLibelle($obj->libelle);
			$formation->setIdBaseExterne($obj->idExterne);

			$listeCampus[] = $campus;

		}

		return $listeCampus;
	}
}