<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="./web/css/bootstrap.min.css">
<link rel="stylesheet" href="./web/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="./web/css/styleFormulaire.css">
<script src="./web/js/jquery-3.1.1.min.js"></script>

	<title>Candidatez à L'IMIE</title>

</head>
<header>
	<div class="container2">
		<div class="row">
			<div class="col-sm-12 navbar">
				<img class="col-sm-2 logo" src="./web/images/Imie.png"/>
				<div class="col-sm-offset-3 col-sm-3">
					<a class="accueil btn" href="">Retour à l'accueil</a>
				</div>
			</div>
		</div>
	</div>
</header>
<body>
<form action="./index.php" method="POST">
	<div class="container">
		<div class="row" id="hautDePage">
			<div class="col-sm-12">
				<div class="date1">	
					<h2>Date : </h2>
				</div>
				<div class="calendar">
					<input type="date" name="date" /> 
				</div>
			</div>
		</div>
	</div>
	<h5>Les champs accompagnés d'un " * " sont obligatoires.</h5>
	<h3>#CAMPUS</h3>
	<h4>Quel campus souhaitez-vous intégrer ?*</h4>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-offset-1 col-sm-2">
					<p class="p1"><input type="radio" name="campus" value="1">  LE MANS</p>
				</div>
				<div class="col-sm-offset-1 col-sm-2">
					<p class="p1"><input type="radio" name="campus" value="2">  RENNES</p>
				</div>
				<div class="col-sm-offset-1 col-sm-2">
					<p class="p1"><input type="radio" name="campus" value="3">  PARIS</p>
				</div>
				<div class="col-sm-offset-1 col-sm-2">
					<p class="p1"><input type="radio" name="campus" value="4">  LAVAL</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-offset-2 col-sm-3">
					<p class="p2"><input type="radio" name="campus" value="5">  ANGERS</p>
				</div>
				<div class="col-sm-3">
					<p class="p2"><input type="radio" name="campus" value="6">  CAEN</p>
				</div>
				<div class=" col-sm-2">
					<p class="p2"><input type="radio" name="campus" value="7">  NANTES</p>
				</div>
			</div>
		</div>
	</div>
	<h3>#INFORMATIONS</h3>
	<h4>Entrez vos informations personnelles</h4>
	<div class="row">
		<div class="col-sm-12">
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<p>Civilité *</p>
						</div>
						<div class="col-sm-6">
							<select id="civ" name="civ" size="1">
								<option>Madame</option>
								<option>Monsieur</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<p>Nom *</p>
						</div>
						<div class="col-sm-6">
							<input type="text" class="nom" placeholder="Votre Nom" name="nom">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<p>Prenom *</p>
						</div>
						<div class="col-sm-6">
							<input type="text" class="prenom" placeholder="Votre Prénom" name="prenom">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<p>Date de naissance *</p>	
						</div>
						<div class="col-sm-6">
							<input id="date" type="date" name="dateNaissance">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<p>Téléphone 1 *</p>
						</div>
						<div class="col-sm-6">
							<input type="text" class="tel" placeholder="ex: 06 12 34 56 78..." name="tel1">
						</div>
						<div class="col-sm-6">
							<p>Téléphone 2</p>
						</div>
						<div class="col-sm-6">
							<input type="text" class="tel" placeholder="ex: 06 12 34 56 78..." name="tel2">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-6">
							<p>E-mail *</p>
						</div>
						<div class="col-sm-6">
							<input type="text" class="mail" placeholder="ex: addresse.mail@mail.fr" name="mail">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h3>#SITUATIONS</h3>
	<h4> Quelle est votre situation en ce moment ? *</h4>
	<div class="row">
		<div class="col-sm-12 sit">
			<div class=" col-sm-3">
				<input type="radio" class="déroule2">  EN FORMATION
			</div>
			<div class="col-sm-offset-2 col-sm-2">
				<input id="salarié" type="radio" name="situation" value="2" checked class="deroule3">  SALARIE
			</div>
			<div class="col-sm-offset-2 col-sm-3">
				<input id="emploi" type="radio" name="situation" value="3" class="deroule3">  DEMANDEUR D'EMPLOI
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="col-sm-6 text2">
				<div class="row">
					<div class="col-sm-12 form">
						<div class="col-sm-6">
							<p>Si formation en cours, laquelle:</p>
						</div>
						<div class="col-sm-6">
							<input type="text" name="situation">
						</div>
					</div>
				</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="col-sm-6">
								<p>Dans quel établissement: *</p>
							</div>
							<div class="col-sm-6">
								<input type="text" name="etabOrig">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="col-sm-6">
								<p>Dernier diplôme obtenu: *</p>
							</div>
							<div class="col-sm-6">
								<input type="text" name="diplome">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-offset-2  col-sm-4 dispo">
					<div class="row">
						<div class="col-sm-12">
							<div class="col-sm-6 dispo1">
								<label>Disponibilité *</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input id="box1" type="radio" name="dispo" value="immediate" onclick="cacherAutre();" checked="">  Immédiate
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input id="box1" type="radio" name="dispo" value="apresFormationActuelle" onclick="cacherAutre();">  Après la formation
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input type="radio" name="dispo" value="autre" onclick="afficherAutre();">  Autre 
							<input id="autre" type="text" name="autreSit" style="display: none;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h3>#FORMATION</h3>
	<h4>Quelles formations souhaitez-vous intégrer ? *</h4>
	<h5>Trois choix possibles, un obligatoire</h5>	
	
	<div class="row">
		<div class="col-sm-offset-2 col-sm-3">
			<select id="choix1" name="choix1" size="1">
				<?php	foreach ($listeFormation as $formation) {	
					$lib = $formation->getLibelle();	?>
					<option value="<?php echo $lib; ?>"> 
						<?php	echo ($formation->getLibelle());	?>
					</option>
				<?php	}	?>
			</select>
		</div>

		<div class="col-sm-3">
			<select id="choix2" name="choix2" size="1">
			<option value="null"></option>
				<?php	foreach ($listeFormation as $formation) {	?>
					<?php	$lib = $formation->getLibelle();	?>
					<option value="<?php echo $lib; ?>"> 
						<?php	echo ($formation->getLibelle());	?>
					</option>
				<?php	}	?>
			</select>
		</div>

		<div class="col-sm-3">
			<select id="choix3" name="choix3" size="1">
				<option value="null"></option>
				<?php	foreach ($listeFormation as $formation) {	?>
					<?php	$lib = $formation->getLibelle();	?>
					<option value="<?php echo $lib; ?>"> 
						<?php	echo ($formation->getLibelle());	?>
					</option>
				<?php	}	?>
			</select>
		</div>
	</div>


	<h3>#REORIENTATION</h3>
	<h4>Vous réorientez-vous ? *</h4>
	<div class="row">
		<div class="col-sm-12">
			<div class="col-sm-offset-3 col-sm-2">
				<input type="radio" name="reorient" value="1" checked > Oui
			</div>
			<div class="col-sm-offset-3 col-sm-2">
				<input type="radio" name="reorient" value="0" > Non
			</div>
		</div>
	</div>
	<h3>#JE CONNAIS L'IMIE</h3>
	<h4>Comment avez-vous entendu parler de l'IMIE ? *</h4>
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-offset-2 col-sm-3">
						<p><input type="checkbox" name="connaitreIMIE" value="radio">  RADIO</p>
						<p><input type="checkbox" name="connaitreIMIE" value="web">  SITE INTERNET</p>
						<p><input type="checkbox" name="connaitreIMIE" value="event">  EVENEMENT</p>
				</div>
				<div class="col-sm-3">
					<p><input type="checkbox" name="connaitreIMIE" value="tract">  AFFICHAGE</p>
					<p><input type="checkbox" name="connaitreIMIE" value="BaOE">  ENTREPRISE</p>
					<p><input type="checkbox" name="connaitreIMIE" value="press">  PRESSE</p>
				</div>
				<div class="col-sm-3">
					<p><input type="checkbox" name="connaitreIMIE" value="BaOS">  CIO/LYCEE</p>
					<p><input type="checkbox" name="connaitreIMIE" value="parents">  PARENTS</p>
					<p><input type="checkbox" name="connaitreIMIE" value="BaO">  AMIS/BOUCHE A OREILLE</p>
				</div>
			</div>
		</div>
		<h3>#CADRE ADMINISTRATIF</h3>
		<h4>Où avez-vous remplis cette candidature ?</h4>
		<div class="row">
			<div class="col-sm-offset-5 col-sm-5">
				<p><input id="box1" type="radio" name="cadreAdm" value="salon" onclick="cacherAutre1();" checked="">  Salon</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-offset-5 col-sm-5">
				<p><input id="box1" type="radio" name="cadreAdm" value="jpo" onclick="cacherAutre1();">  JPO (Journées Portes Ouvertes)</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-offset-5 col-sm-5">
				<p><input type="radio" name="cadreAdm" value="autreCadre" onclick="afficherAutre1();">Autre 
				<input id="autre1" type="text" style="display: none;"></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-offset-1 col-sm-2">
					<p class="comm1">Commentaires :</p>
					<textarea class="comm" type="text" placeholder="Saisissez votre commentaire" name="comm"/>	
					</textarea>
				</div>
				<div class="col-sm-offset-6 col-sm-2 bouton1">
					<input type="submit" class="bouton" value="Envoyer ma candidature"/>
					<br>
					<label><?php if(isset($message)) echo $message ?></label>
					<input type="hidden" name="action" value="insertContact"/>
				</div>
			</div>
		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4">
						<p>Nous joindre sur les réseaux sociaux</p>
						<i class="fa fa-facebook-official fa-2" id="RSFaceB" aria-hidden="true"></i>
						<i class="fa fa-twitter-square fa-2" id="RSTwitter" aria-hidden="true"></i>
						<i class="fa fa-linkedin-square fa-2" id="RSLikedIn" aria-hidden="true"></i>
						<i class="fa fa-youtube-square fa-2" id="RSYouTube" aria-hidden="true"></i>
					</div>
					<div class="col-xs-offset-1 col-xs-4 col-sm-offset-2 col-sm-4 col-md-offset-4 col-md-3">
						<a href="" id="mentionsLegales">Mentions légales</a>	
					</div>
				</div>
			</div>
	</footer>	
	<script src="./web/js/appFormulaire.js"></script>
</html>