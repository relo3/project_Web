<?php
	include '../Controller/reclamationC.php';
	$reclamationC=new reclamationC();
	$listeRec=$reclamationC->mesRecs(15);
?>
<html style="font-size: 16px;">
  <head>
    <title>Mes réclamations</title>
    <link rel="stylesheet" href="./Affiche/nicepage.css" media="screen">
<link rel="stylesheet" href="./Affiche/Accueil2.css" media="screen">
    <script class="u-script" type="text/javascript" src="./Affiche/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./Affiche/nicepage.js" defer=""></script>
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
  <body class="u-body u-xl-mode"><header class="u-clearfix u-grey-70 u-header u-header" id="sec-ab0a"><div class="u-clearfix u-sheet u-sheet-1">
        <a class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <a class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-10.png" class="u-logo-image u-logo-image-2">
        </a>
        <a class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-6.png" class="u-logo-image u-logo-image-3">
        </a>
        <a class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-11.png" class="u-logo-image u-logo-image-4">
        </a>
        <a class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-13.png" class="u-logo-image u-logo-image-5">
        </a>
        <a class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-12.png" class="u-logo-image u-logo-image-6">
        </a>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-38e4">
    <button><a class="u-border-2 u-border-black u-button-style u-hover-black u-none u-text-hover-white u-btn-1" href="afficherMesTickets.php">Retour à la liste des tickets</a></button>
        <hr>
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-default u-text-1">Mes reclamations</h1>
        <a href="ajouterRec.php" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-hover-white u-btn-1">AJOUTER</a>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
		<table class="u-table-entity">
            <colgroup>
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 21px;">
                <th class="u-border-1 u-border-black u-table-cell">id</th>
                <th class="u-border-1 u-border-black u-table-cell">Contenu</th>               
                <th class="u-border-1 u-border-black u-table-cell">Ticket</th>
                <th class="u-border-1 u-border-black u-table-cell">User</th>
                <th class="u-border-1 u-border-black u-table-cell"></th>

			</tr>
            </thead>
			<?php
				foreach($listeRec as $reclamation){ //boucle tekhou compo listerec puis affiche bel wahda
					if (
						isset($reclamation["id"]) &&
						isset($reclamation["Contenu"])&&
						isset($reclamation["idTicket"])&&
            isset($reclamation["idUser"]) 
            
					) {
						if (
							!empty($reclamation["id"]) && 
							!empty($reclamation["Contenu"])&&
							!empty($reclamation["idTicket"])&&
              !empty($reclamation["idUser"])
						) {
			?>
            <tbody class="u-table-body">
              <tr style="height: 75px;">
			  
				<td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $reclamation['id']; ?></td>
        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $reclamation['Contenu']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $reclamation['idTicket']; ?></td>
        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $reclamation['idUser']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-table-cell">
				<form method="POST" action="supprimerRec.php">
						<input  type="submit" name="Modifier" value="Supprimer">
						<input type="hidden" value=<?PHP echo $reclamation['id']; ?> name="id">
					</form>
				</td>
              </tr>
            </tbody>
			<?php
				}}}
			?>
          </table>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3a6b"><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <a class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-14.png" class="u-logo-image u-logo-image-1">
        </a>
        <a class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-15.png" class="u-logo-image u-logo-image-2">
        </a>
        <a class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-5.png" class="u-logo-image u-logo-image-3">
        </a>
        <a class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-7.png" class="u-logo-image u-logo-image-4">
        </a>
        <a class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-9.png" class="u-logo-image u-logo-image-5">
        </a>
        <a class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
          <img src="./Affiche/images/277826578_727709038594036_95418314771093071_n-removebg-preview-8.png" class="u-logo-image u-logo-image-6">
        </a>
      </div></footer>
  </body>
</html>
