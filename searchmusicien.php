<?php 
require_once '../controller/abonnementC.php';
$abonnementC= new  abonnementC();
$packs=$packC-> afficherpack();
if(isset($_POST['pack']) && isset($_POST['search'])){

    $list=$packC-> afficher_abonnement($_POST["pack"]);
}
?>


<html>
<body>

    <form action="" method="POST">
<label>Search :</label>
<select name="pack" name="pack">
    <?php foreach($packs as $pack){
        ?>
        <option 
        value="<?= $pack['id_pack'] ?>"
        <?php if(isset($_POST['search']) && $pack["id_pack"]==$_POST["pack"]){ ?>
            selected
            <?php } ?>
            
            
            >        
<?= $pack['id_pack'] ?>
        </option>
        <?php } ?>
        </select>
        <input type="submit" value="search" name="search">

        </form>

<?php if(isset($_POST['search'])) { ?>
    <section>
        <?php
       foreach(  (array) $list as $abonnement) {
           ?>
           <td><strong> <?php echo $abonnement['date_debut'] ?> </strong></td>
           <td><strong>    <?php echo  $abonnement['date_fin'] ?>  </strong></td>
           <td><strong> <?php echo  $abonnement['prix'] ?>     </strong></td>
           <td><strong> <?php echo  $abonnement['nb_abonnement'] ?>     </strong></td>


  <?php 
       }
       ?>

    </section>

<?php 
       }
       ?>











        </body>
</html>