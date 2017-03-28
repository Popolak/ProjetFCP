<?php
//controleur principal de notre application
session_start();
include_once('library/PDOFactory.php');
include_once('models/entities/Site.php');
include_once('models/entities/Statut.php');
include_once('models/entities/Users.php');
include_once('models/entities/Visiteur.php');
include_once('models/entities/Formation.php');
include_once('models/repositories/ContactRepository.php');
include_once('models/repositories/CampusRepository.php');
include_once('models/repositories/FormationRepository.php');
include_once('models/repositories/UserRepository.php');

//On récupère un objet PDO une fois pour toutes pour dialoguer avec la bdd

$pdo = PDOFactory::getMysqlConnection();

//Récupère  le paramètre action dans l'url (ex: "localhost/index.php?action=add") envoyé par l'utilisateur
//$_REQUEST c'est comme $_POST + $_GET
if(isset($_REQUEST['action'])) {
	$action = $_REQUEST['action'];
	echo($action);
} else {
	$action = null;
}



switch ($action) {

	case "verifLogin":
		$userRepo = new ClientRepository();
		$user = $userRepo->getUser($pdo, $_POST['login'], $_POST['pwd']);
		
		if($user) {
			$_SESSION['login'] = $user->getLogin();
			$_SESSION['nom'] = $user->getNom();
			$_SESSION['prenom'] = $user->getPrenom();
			//On prépare la vue à afficher avec les données dont elle a besoin
			$vueAAfficher = "views/accueil.php";
		} else {
			$message = "Identifiants invalides !";
			$vueAAfficher = "views/login.php";
		}
		break;

	case "disconnect":
		$_SESSION = array();
		session_destroy();
		$vueAAfficher = "views/login.php";
		break;

	case "listContact":
		//On prépare la vue a afficher avec les données dont elle a besoin
		$contactRepo = new ContactRepository();
		$listeContacts = $contactRepo->getAll($pdo);
		$vueAAfficher = "views/listContact.php";
		break;

	//Affiche le formulaire d'ajout d'un client
	case "formAddContact": 

		$formationRepo = new FormationRepository();
		$listeFormation = $formationRepo->getAll($pdo);
		//On prépare la vue à afficher
		$vueAAfficher = "views/formulaire.php";
		break;

	//crée un nouveau client dans la base de données
	case "insertContact":
		//INstancier un objet du modèle qui va s'occuper sauvegarder votre client
		$visiteur = new Visiteur ();
		$visiteur->setCivilite($_POST["civ"]);
		$visiteur->setNom($_POST["nom"]);
		$visiteur->setPrenom($_POST["prenom"]);
		$visiteur->setDateNaissance($_POST["dateNaissance"]);
		$visiteur->setTelephone1($_POST["tel1"]);
		$visiteur->setTelephone2($_POST["tel2"]);
		$visiteur->setEmail($_POST["mail"]);
		$visiteur->setDiplomeObtenu($_POST["diplome"]);
		$visiteur->setEtablissementOrigine($_POST["etabOrig"]);
		$visiteur->setSourcesInfoImie($_POST["infoIMIE"]);
		$visiteur->setDisponibilite($_POST["dispo"]);
		$visiteur->setStatut($_POST["situation"]);
		$visiteur->setSite($_POST["campus"]);
		$visiteur->setIdFormation($_POST["choix1"]);
		$visiteur->setIdFormation1($_POST["choix2"]);
		$visiteur->setIdFormation2($_POST["choix3"]);

		$message = $visiteur->save($pdo);

		//J'indique ensuite la vue à afficher une fois notre visiteur enregistré
		$message = $visiteur->save($pdo);
		$vueAAfficher = "views/index.php?action=";

		break;

	//Affiche le formulaire d'édition d'un client
	case "formEditContact":
		//On prépare la vue a afficher avec les données dont elle a besoin
		$contactRepo = new ContactRepository();
		$contact = $contactRepo->getOneById($pdo, $_GET['id']);
		$vueAAfficher = "views/formEditContact.php";
		break;

	//Met à jour les données d'un client dans la bdd
	case "updateContact":
		//Instancier un objet du modèle qui va s'occuper de sauvegarder votre client
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

		$message = $visiteur->save($pdo);

		//On sauveagrde et on prépare la vue à afficher ensuite
		$vueAAfficher = "views/formEditContact.php";
		break;

	//Supprime un client dans la bdd
	case "deleteContact":
		//Instancier l'objet modèle contact à partir duquel on va supprimer son enregistrement dans la bdd
		$contact = new Contact();
		$contact->setId($_GET['id']);

		//On supprime et on prépare la vue à afficher avec les données dont elle a besoin
		$message = $contact->delete($pdo);
		$contactRepo = new ContactRepository();
		$listeContacts = $contactRepo->getAll($pdo);
		$vueAAfficher = "views/listContact.php";
		break;

	//Jeu d'instructions appelé lorsque aucune action n'est renseignée dans l'url
	default:
		$vueAAfficher = "views/accueil.php";
		break;
}


include_once ("layouts/layout.php");