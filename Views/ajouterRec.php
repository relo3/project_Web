<?php
    include_once '../Model/reclamation.php';
    include_once '../Controller/reclamationC.php';

    $error = "";

    // create remb
    $reclamation= null;

    // create an instance of the controller
    $reclamationC = new reclamationC();
    if (
        isset($_POST["Contenu"])&&
        isset($_POST["idUser"])&&
        isset($_POST["idTicket"])
    ) {
        if (
            !empty($_POST["Contenu"])&&
            !empty($_POST["idUser"])&&
            !empty($_POST["idTicket"])
        ) {
            $reclamation= new reclamation(
                    1,
                $_POST['Contenu'],
                $_POST['idTicket'],
                $_POST['idUser']
            );
            $reclamationC->ajouterRec($reclamation);
            header('Location:afficherListeRecphp');
        }
        else
            $error = "Missing information";
    }

    
?>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="AJOUT reclamation">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Ajouter réclamation</title>
    <link rel="stylesheet" href="./Ajout/nicepage.css" media="screen">
    <link rel="stylesheet" href="./Ajout/Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="./Ajout/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./Ajout/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/277826578_727709038594036_95418314771093071_n-removebg-preview.png"
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
    </head>
    <body class="u-body u-xl-mode">
        <header class="u-clearfix u-grey-70 u-header u-header" id="sec-0a60"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
          <img src="./Ajout/images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <a class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
          <img src="./Ajout/images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-2">
        </a>
        <a class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
          <img src="./Ajout/images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-3">
        </a>
        <a class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
          <img src="./Ajout/images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-4">
        </a>
        <a class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
          <img src="./Ajout/images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-5">
        </a>
        <a class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
          <img src="./Ajout/images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-6">
        </a>
      </div></header>

        <section class="u-align-center u-clearfix u-section-1" id="sec-62ee">
            <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Ajout reclamation<br>
        </h1>
        <div class="u-form u-form-1">
        
        <form class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <div class="u-form-group u-label-left u-form-group-1">
              <label for="idUser" class="u-label">User</label>
              <input type="number" placeholder="" name="idUser" id="idUser" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
            </div>
            <div class="u-form-group u-form-name u-label-left u-form-group-1">
              <label for="Contenu" class="u-label">Reclamation</label>
              <input type="text" placeholder="Insérer le contenu de votre réclamation." id="Contenu" name="Contenu" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-label-left u-form-group-1">
              <label for="idTicket" class="u-label">ticket</label>
              <input type="number"  name="idTicket" id="idTicket" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required>
            </div>
            <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-label-5"></label>
              <div class="u-align-left u-btn-submit-container">
                <input type="submit" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1" value="Envoyer">
                <input type="reset" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1" value="Annuler">
              </div>
            </div>


        </form>
      </div>
    </section>

    </body>
</html>