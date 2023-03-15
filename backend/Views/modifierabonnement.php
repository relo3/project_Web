<?php
   include_once '../Model/abonnement.php';
   include_once '../Controller/abonnementC.php';

    $error = "";

    // create adherent
    $abonnement = null;
    $abonnement2=null;
    // create an instance of the controller
    $abonnementC = new AbonnementC();
    $listespacks=$abonnementC->Select_id_Pack();
    if (
        
        isset($_POST["date_debut"]) &&
		isset($_POST["date_fin"]) &&		
        isset($_POST["prix"]) &&
	
        isset($_POST["id"]) &&
        isset($_POST["pack"])
        
    ) {
        if (
            
            !empty($_POST["date_debut"]) && 
			!empty($_POST['date_fin']) &&
            !empty($_POST["prix"]) && 
		
            !empty($_POST["id"]) &&
            !empty($_POST["pack"])
        ) {
            $abonnement = new Abonnement(
                $_POST['date_debut'],
				$_POST['date_fin'],
                $_POST['prix'], 
			
                $_POST['pack']
              
            );
            $abonnementC->modifierabonnement($abonnement, $_POST["id"]);
            header('Location:afficherListeAbonnements.php');
        }
      
       
        else
            $error = "Missing information";
    
        }   
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="AJOUT Abonnements">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accueil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/277826578_727709038594036_95418314771093071_n-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-grey-70 u-header u-header" id="sec-0a60"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-2">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-3">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-4">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-5">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-6">
        </a>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-62ee">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Modifier Abonnement<br>
        </h1>
        <a href="http://localhost/projet/afficherListeAbonnements.php" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1">RETOUR</a>
        <div class="u-form u-form-1">
        <div id="error">
        <?php echo $error; ?>

       </div>
       <?php
			if (isset($_POST['id'])){
				$abonnement = $abonnementC->recupererabonnement($_POST['id']);
				
		   ?>
          <form action="" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
            
          <div class="u-form-group u-label-left u-form-group-1">
              <label for="date debut" class="u-label">ID</label>
              <input type="text"  id="id" name="id" value="<?php echo $abonnement['id']; ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" readonly="readonly" >
            </div>
        
            <div class="u-form-group u-label-left u-form-group-2">
              <label for="date debut" class="u-label">date debut</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date_dabut" name="date_debut" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  value="<?php echo $abonnement['date_debut']; ?>"  >
            </div>
            <div class="u-form-group u-form-name u-label-left u-form-group-3">
              <label for="artiste" class="u-label">date fin</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date_fin" name="date_fin" value="<?php echo $abonnement['date_fin']; ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
                  </div>
            <div class="u-form-date u-form-group u-label-left u-form-group-4">
              <label for="date_c" class="u-label">prix</label>
              <input type="number"  id="prix" name="prix" value="<?php echo $abonnement['prix']; ?>"  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  >
            </div>
           
           <div  class="u-form-address u-form-group u-label-left u-form-group-5">
           
           
           
           
           <label > numero de pack
                         </label>
                            <select   name="pack" id="pack" >

                           <?php 
                           foreach($listespacks as $pack){
                               ?>

                           <option value="<?= $pack["id_pack"] ?>" 
                          
                            selected
                       
                           >
                           <?= $pack["id_pack"] ?>
                        </option>

                       <?php
                           }
                           ?>
         </select>
                        </div>
            <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-label-5"></label>
              <div class="u-align-left u-btn-submit-container">
            <input type="submit" value="Modifier" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1">
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php
            }
            ?>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4191"><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-2">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-3">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-4">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-5">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
          <img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-6">
        </a>
      </div></footer>

    

  
    </body>
</html>
