<?php
	include '../Controller/reclamationC.php';
	$reclamationController=new reclamationC();
	$reclamationController->supprimerticket($_POST["id"]);
	header('Location:afficherRec.php');
?>