<?php
  include_once '../Controller/packC.php';
	
	$packC=new packC();
	$packC->supprimerpack($_GET["id_pack"]);
	header('Location:afficherListePacks.php');
?>