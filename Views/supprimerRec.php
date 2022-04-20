<?php
	include '../Controller/reclamationC.php';
	$reclamationController=new reclamationC();
	$reclamationController->supprimerticket($_POST["Numtickets"]);
	header('Location:afficherRec.php');
?>