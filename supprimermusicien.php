<?php
	include '../Controller/musicienC.php';
	$musicienC=new musicienC();
	$musicienC->supprimermusicien($_GET["id"]);
	header('Location:afficherlistemusicien.php');
?>