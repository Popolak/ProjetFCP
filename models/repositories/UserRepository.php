<?php

class UserRepository
{

	public function getUser($pdo, $login, $motPasse) {

		// Pas sécurisé contre les injections SQL
		// Entrer " OR 1=1 # pour vous connecter sans connaître un login et un password d'un utilisateur enregistré.
		//$resultat = $pdo->query('SELECT id, nom, prenom, login, password FROM user WHERE login = "' . $login . '" AND password = "' . $password . '"');

		$resultat = $pdo->prepare('SELECT id, nomAdmin, prenomAdmin, login, motPasse FROM user WHERE login = :login AND motPasse = :motPasse');

		$resultat->bindParam(':login', $login, PDO::PARAM_STR);
		$resultat->bindParam(':motPasse', $motPasse, PDO::PARAM_STR);
		$resultat->setFetchMode(PDO::FETCH_OBJ);

		$resultat->execute();
		
		$obj = $resultat->fetch();

		if(empty($obj)) {
			return null;
		} else {
			$user = new User();
			$user->setId($obj->id);
			$user->setNomAdmin($obj->nomAdmin);
			$user->setPrenomAdmin($obj->prenomAdmin);
			$user->setLogin($obj->login);
			$user->setMotPasse($obj->motPasse);

			return $user;
		}

	}


	public function getAll($pdo) {

		//Effectuer la requête en bdd pour récupérer l'ensemble des clients enregistrés en bdd
		$resultats = $pdo->query('SELECT id, nomAdmin, prenomAdmin, login, motPasse FROM user ');

		$resultats->setFetchMode(PDO::FETCH_OBJ);

		//Boucler sur tous les enregistrements récupérés grâce à votre requête SELECT
		//et pour chaque enregistrement :
		// 1 -  instancier un objet client
		// 2 -  hydrater ses attributs avec les valeurs récupérées en bdd
		// 3 - pour chaque objet client instanciés et hydratés, les ajouter dans un tableau
		// 4 - retourner ensuite ce tableau avec l'instruction return

		$listeUser = array();

		while($obj = $resultats->fetch()){	

			$user = new User();
			$user->setId($obj->id);
			$user->setNomAdmin($obj->nomAdmin);
			$user->setPrenomAdmin($obj->prenomAdmin);
			$user->setLogin($obj->login);
			$user->setMotPasse($obj->motPasse);

			$listeUsers[] = $user;

		}

		return $listeUsers;
	}

}