<?php 


require_once 'abonnementC.php';




$abonnementC= new AbonnementC();
$abonnements=$abonnementC->afficherabonnement();
if(isset($_POST["id"]) && isset($_POST['search'])){

    $listes=$abonnementC->afficherAdherents($_POST['id']);
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>


<body>

<form action="" method="POST">
    <label>search</label>
    <select name="id" id="id">
 <?php
 foreach(   $abonnements as $abonnement) {
     ?>
<option 
value ="<?= $abonnement['id'] ?>"
<?php if(isset($_POST['search']) && $abonnement["id"] == $_POST["id"]){?>
    selected 
    <?php } ?>
    >
    <?= $abonnement['id'] ?>
</option>
<?php } ?>
</select>
 <input type="submit" value="search" name="search" >
 <?php if(isset($_POST["search"])) { ?>
    <section>
        <h2> adherent </h2>
        <?php
				foreach($listes as $adherent){
			?>
            <th><?php echo  $adherent['NumAdherent'] ;?></th>
            <th><?php echo $adherent['Nom'] ;?></th>
            <th><?php echo  $adherent['Prenom'] ; ?></th>
            <th><?php echo $adherent['Adresse']; ?></th>
            <th><?php echo $adherent['Email'] ;?></th>
            <th><?php echo $adherent['DateInscription']; ?></th>
            <th><?php echo $adherent['abonnement'] ;?></th>
<?php 
} 
?>
       
       <?php 
} 
?>    
    </section>






</form>




</body>



</html>