<form action="./index.php" method="POST">

	<label>Civilité</label>
	<input type="text" name="civ" />
	<br>

	<label>Nom</label>
	<input type="text" name="nom" />
	<br>

	<label>Prenom</label>
	<input type="text" name="prenom" />
	<br>

	<label>Date de naissance</label>
	<input type="text" name="date_naissance" />
	<br>

	<label>Adresse</label>
	<input type="text" name="adresse" />
	<br>

	<label>Code postal</label>
	<input type="text" name="code_postal" />
	<br>

	<label>Ville</label>
	<input type="text" name="ville" />
	<br>

	<label>Code IBAN</label>
	<input type="text" name="iban" />
	<br>

	<label>Code BIC</label>
	<input type="text" name="bic" />
	<br>

	<input type="submit" value="Ajouter" />
	<label><?php if( isset($message)) echo $message ?></label>
	<input type="hidden" name="action" value="insertClient" />
	<br>
	</form>