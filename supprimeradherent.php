<?php
	include '../Controller/AdherentC.php';
	$ticketsC=new ticketsC();
	$ticketstC->supprimeradherent($_GET["Numtickets"]);
	header('Location:afficherListeAdherents.php');
?>