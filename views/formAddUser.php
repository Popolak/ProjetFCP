<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="./web/css/bootstrap.min.css">
<link rel="stylesheet" href="./web/css/font-awesome.css">
<script src="./web/js/jquery-3.1.1.min.js"></script>

	<title>Nouvel utilisateur</title>

</head>
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 navbar">
				<img class="col-sm-2 logo" src="./web/images/Imie.png"/>
				<div class="col-sm-offset-3 col-sm-3">
					<a class="accueil btn" href="./index.php">Retour à l'accueil</a>
				</div>
			</div>
		</div>
	</div>
</header>
<body>

	<div class="container">
		<form action="./index.php" method="POST">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-3">
						<p>Nom</p>
					</div>
					<div class="col-sm-6">
						<input type="text" class="nom" placeholder="Votre Nom" name="nomAdmin">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-3">
						<p>Prenom</p>
					</div>
					<div class="col-sm-6">
						<input type="text" class="prenom" placeholder="Votre Prénom" name="prenomAdmin">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-3">
						<p>Nom d'utilisateur</p>	
					</div>
					<div class="col-sm-6">
						<input id="login" type="login" name="login" placeholder="Votre nom d'utilisateur">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-3">
						<p>Mot de passe</p>
					</div>
					<div class="col-sm-6">
						<input id="password" type="password" name="motPasse" placeholder="Mot de passe">
					</div>
				</div>
			</div>
			<input type="submit" name="action" value="Enregistrer">
			<br>
			<label><?php if(isset($message)) echo $message ?></label>
			<input type="hidden" name="action" value="insertUser"/>
		</form>
	</div>
</body>
</html>