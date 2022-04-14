<?php
	include '../Controller/AdherentC.php';
	$ticketsC=new ticketsC();
	$listetickets=$ticketsC->afficheradherents(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterAdherent.php">Ajouter un tickets</a></button>
		<center><h1>Liste des tickets</h1></center>
		<table border="1" align="center">
			<tr>
				
				<th>Numtickets</th>
				<th>Nom</th>
				<th>Prenom</th>
				
				<th>Email</th>
				<th>DateConcert</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listetickets as $tickets){
			?>
			<tr>
				<td><?php echo $tickets['Numtickets']; ?></td>
				<td><?php echo $tickets['Nom']; ?></td>
				<td><?php echo $tickets['Prenom']; ?></td>
				
				<td><?php echo $tickets['Email']; ?></td>
				<td><?php echo $tickets['DateConcert']; ?></td>
				<td>
					<form method="POST" action="modifieradherent.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $adherent['Numtickets']; ?> name="Numtickets">
					</form>
				</td>
				<td>
					<a href="supprimeradherent.php?NumAdherent=<?php echo $ticketst['Numtickets']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
