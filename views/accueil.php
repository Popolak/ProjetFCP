<!DOCTYPE html>
<html>
<head>
<script src="./web/js/jquery-3.1.1.min.js"></script>
<link href="./web/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="./web/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="./web/css/style.css">
	
	<title>Projet</title>
	
</head>

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="./web/images/imie.png" id="logo">
			</div>
			<div class="col-md-offset-2 col-md-3">
				<h1>IMIE Le Mans</h1>
			</div>
			<div class="col-md-offset-2 col-md-2">			
				<form action="./index.php" method="POST">
					<label>Login</label>
					<input type="text" name="login"/>
					<br>
					<label>Mot de passe</label>
					<input type="password" name="motPasse"/>
					<br>
					<input type="submit" value="Connexion"/>
					<label><?php if(isset($message)) echo $message ?></label>
					<input type="hidden" name="action" value="verifLogin"/>
				</form>	
			</div>
		</div>
	</div>
</header>

<body>

<div class="container">
	<div class="row">
		<div class= "col-lg-offset-2 col-lg-8">
			<div class="slider">

		<ul>
			<li><img src='./web/images/Paysage1.png'></li>
			<li><img src='./web/images/Paysage2.png'></li>
			<li><img src='./web/images/Paysage3.png'></li>
			<li><img src='./web/images/Paysage4.png'></li>
		</ul>

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<div class="Feech">
				<p class="Police">QUI SOMMES-NOUS ?</p>
				<p class="Police2">Créée en 1994, l’école de la filière numérique est actuellement implantée sur Nantes, Angers, Rennes, Laval, Caen, Paris et Le Mans. Pour intégrer le monde du travail numérique dans les meilleures conditions, IMIE vous propose d’obtenir des diplômes reconnus et de maîtriser les technologies les plus récentes.</p>
			</div>
		</div>
		
		<a href="index.php?action=formAddContact">
			<div class="col-lg-4">
				<div class="Feech2">
					<p class="Police">Candidater</p>
					<br>
					<img src="./web/images/FicheContact.png">
				</div>
			</div>		
		</a>

		<div class="col-lg-4">
			<div class="Feech3">
				<p class="Police">Nous contacter</p>
					
					<ul>

						<li class="coord">Lieu : 75 Boulevard Marie et Alexandre Oyon</li>
					<br>
						<li class="coord">3ème étage</li>
					<br>
						<li class="coord">Code postal : 72100</li>
					<br>
						<li class="coord">Téléphone : 02 43 75 82 53</li>
					<br>
						<li class="coord">Fax : 02 28 20 03 05</li>
					<br>
						<li class="coord">Mail : contact-lemans@imie.fr</li>

					</ul>
					
			</div>
		</div>
	</div>

</body>

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

	<br>
	<script src="./web/js/app.js"></script>
</html>
