<?php

class FormationRepository
{

	//Récupère la liste de tous les clients en base de données
	public function getAll($pdo) {

		//Effectuer la requête en bdd pour récupérer l'ensemble des clients enregistrés en bdd
		$resultats = $pdo->query('SELECT f.id, f.libelle, f.IdBaseExterne FROM formation f');

		$resultats->setFetchMode(PDO::FETCH_OBJ);

		//Boucler sur tous les enregistrements récupérés grâce à votre requête SELECT
		//et pour chaque enregistrement :
		// 1 -  instancier un objet client
		// 2 -  hydrater ses attributs avec les valeurs récupérées en bdd
		// 3 - pour chaque objet client instanciés et hydratés, les ajouter dans un tableau
		// 4 - retourner ensuite ce tableau avec l'instruction return

		$listeFormations = array();

		while($obj = $resultats->fetch()){	

			$formation = new Formation();
			$formation->setId($obj->id);
			$formation->setLibelle($obj->libelle);
			$formation->setIdBaseExterne($obj->IdBaseExterne);

			$listeFormations[] = $formation;

		}

		return $listeFormations;
	}
}