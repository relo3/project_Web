<?php
	include '../Controller/ticketC.php';
	$ticketC=new ticketC();
	$ticketC->supprimerticket($_POST["id"]);
	header('Location:afficherListeticket.php');
?>