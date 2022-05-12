<?php
	include '../Control/concertsC.php';
	$concertsC=new concertsC();
	$concertsC->supprimerconcerts($_GET["id"]);
	header('Location:gestion-concerts.php');
?>