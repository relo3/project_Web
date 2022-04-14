<?php
	include '../controller/abonnementC.php';
	$abonnementC=new abonnementC();
	$abonnementC->supprimerabonnement($_GET["id"]);
	header('Location:afficherListeAbonnements.php');
?>