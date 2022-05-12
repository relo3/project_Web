<?php
    include '../Control/adminsC.php';
	$adminsC = new adminsC();
    $adminsC->supprimeradmins($_GET["id_a"]);
	header('Location:gestion-admins.php');
?>




