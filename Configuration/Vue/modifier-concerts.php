<?php
    include_once '../Model/concerts.php';
    include_once '../Control/concertsC.php';

    $error = "";

    // create product
    $concerts = null;

    // create an instance of the controller
    $concertsC = new concertsC();
  

	

    if (
        isset($_POST["id"]) &&
		isset($_POST["concert"]) &&
        isset($_POST["artiste"]) && 
        isset($_POST["date_c"])&& 
        isset($_POST["adresse"])&&
        isset($_POST["prix"])&&
        isset($_POST["id_admin"])
    ) {
        if (
           
			!empty($_POST["id"]) &&
            !empty($_POST["concert"]) &&
            !empty($_POST["artiste"]) && 
            !empty($_POST["date_c"])&& 
            !empty($_POST["adresse"])&&
            !empty($_POST["prix"])&&
            !empty($_POST["id_admin"])
            ) {
            $concerts = new concerts(
            $_POST["id"],
            $_POST["concert"],
            $_POST["artiste"],
            $_POST["date_c"],
            $_POST["adresse"],
            $_POST["prix"],
            $_POST["id_admin"]
            );
            $concertsC->modifierconcerts($concerts, $_POST["id"]);
            header('Location:gestion-concerts.php');
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
    <meta name="keywords" content="AJOUT CONCERTS">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accueil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Accueil3.css" media="screen">
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
  <body class="u-body u-xl-mode"><header class="u-clearfix u-grey-70 u-header u-header" id="sec-0a60"><div class="u-clearfix u-sheet u-sheet-1">
        <a class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <a class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-2">
        </a>
        <a  class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-3">
        </a>
        <a  class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-4">
        </a>
        <a  class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-5">
        </a>
        <a  class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-6">
        </a>
      </div></header>

      <section class="u-align-center u-clearfix u-section-1" id="sec-62ee">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-default u-text-1">MODIFIER CONCERTS<br>
        </h1>
        <a href="gestion-concerts.php" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1">RETOUR</a>

        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST["id"])){
				$concerts = $concertsC->recupererconcerts($_POST['id']);
				
		?>
         <div class="u-form u-form-1">
        <form action="" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
        <div class="u-form-group u-label-left u-form-group-1">
          <label for="id" class="u-label">ID</label>
                    <input type="text" name="id" id="id" value="<?php echo $concerts['id']; ?>" maxlength="20" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
      </div>

      <div class="u-form-group u-label-left u-form-group-1">
              <label for="concert" class="u-label">Concert</label>
                   <input type="text" name="concert" id="concert" value="<?php echo $concerts['concert']; ?>" maxlength="20" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
      </div>
      
      <div class="u-form-group u-form-name u-label-left u-form-group-2">
              <label for="artiste" class="u-label">Artiste</label>
                  <input type="text" name="artiste" id="artiste" value="<?php echo $concerts['artiste']; ?>" maxlength="20" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
      </div>

      <div class="u-form-date u-form-group u-label-left u-form-group-3">
              <label for="date_c" class="u-label">Date</label>
                        <input type="date" placeholder="MM/DD/YYYY" name="date_c" id="date_c" value="<?php echo $concerts['date_c']; ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
      </div>

      <div class="u-form-address u-form-group u-label-left u-form-group-4">
              <label for="adresse_c" class="u-label">Adresse</label>
                        <input type="text" name="adresse" id="adresse" value="<?php echo $concerts['adresse']; ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
      </div>
      <div class="u-form-address u-form-group u-label-left u-form-group-4">
              <label for="prix" class="u-label">Prix</label>
                        <input type="text" name="prix" id="prix" value="<?php echo $concerts['prix']; ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
      </div>
      <div class="u-form-address u-form-group u-label-left u-form-group-4">
              <label for="id_admin" class="u-label">ID Admin</label>
                        <input type="text" name="id_admin" id="id_admin" value="<?php echo $concerts['id_admin']; ?>" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
      </div>
      <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-label-5"></label>
              <div class="u-align-center u-btn-submit-container">
                        <input type="submit" value="Modifier"  class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1"> 
      </div>
      </div>
        </form>
		<?php
		}
		?>
    </div>
      </div>
    </section>

<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4191"><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <a  class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <a  class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-2">
        </a>
        <a  class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-3">
        </a>
        <a  class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-4">
        </a>
        <a  class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-5">
        </a>
        <a  class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
          <img src="images3/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-6">
        </a>
      </div></footer>
  

    </body>
</html>

