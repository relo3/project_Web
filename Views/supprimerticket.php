<?php
	include '../Controller/ticketC.php';
	$ticketC=new ticketC();
	$ticketC->supprimerticket($_POST["Numtickets"]);
	header('Location:afficherListeticket.php');
?>