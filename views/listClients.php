<a href="./index.php?action=formAddClient">Ajouter</a>
<table>
	<thead>
		<th>Id</th>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Date de naissance</th>
		<th>Adresse</th>
		<th>Code postal</th>
		<th>Ville</th>
	</thead>
	<tbody>
		<?php
			foreach ($listeClients as $client) {
				echo '<tr>';
				echo '<td>' . $client->GetId() . '</td>'; 
				echo '<td>' . $client->GetCivilite() . '</td>';
				echo '<td>' . $client->GetNom() . '</td>';
				echo '<td>' . $client->GetPrenom() . '</td>';
				echo '<td>' . $client->getDateNaissance() . '</td>';
				echo '<td>' . $client->GetAdresse() . '</td>';
				echo '<td>' . $client->GetCp() . '</td>';
				echo '<td>' . $client->GetVille() . '</td>';
				echo '</tr>';
			}
		?>
	</tbody>
</table>