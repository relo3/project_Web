<?php
  
  include_once '../Model/concerts.php';
  include_once '../Control/concertsC.php';
 
  $concertsC = new concertsC();


  $listeconcerts=$concertsC->afficherconcerts(); 

  
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="GESTION CONCERTS">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #4D4D4D;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>
    <title>GESTION CONCERTS</title>
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
		"logo": "images/277826578_727709038594036_95418314771093071_n-removebg-preview-15.png"
}
</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-grey-70 u-header u-header" id="sec-ab0a"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-7.png" class="u-logo-image u-logo-image-2">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-9.png" class="u-logo-image u-logo-image-3">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-8.png" class="u-logo-image u-logo-image-4">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-8.png" class="u-logo-image u-logo-image-4">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-8.png" class="u-logo-image u-logo-image-4">
        </a>
        <div class="navbar">
  <a href="gestion-concerts.php">Concert</a>
  <a href="gestion-admins.php">Admin</a>
</div>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-38e4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-default u-text-1">GESTION CONCERTS</h1>
        <a href="Ajout-concerts.php" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1">ajouter</a>
        <div >
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
                <th class="u-border-1 u-border-black u-table-cell">ID</th>
                <th class="u-border-1 u-border-black u-table-cell">Concert</th>
                <th class="u-border-1 u-border-black u-table-cell">Artiste</th>
                <th class="u-border-1 u-border-black u-table-cell">Date</th>
                <th class="u-border-1 u-border-black u-table-cell">Adresse</th>
                <th class="u-border-1 u-border-black u-table-cell">Prix</th>
                <th class="u-border-1 u-border-black u-table-cell">ID Admin</th>
              </tr>
            </thead>
<tbody  class="u-table-body">
			<?php
				foreach($listeconcerts as $concerts){
			?>
			<tr style="height: 75px;">
				<td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $concerts['id']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $concerts['concert']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $concerts['artiste']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $concerts['date_c']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $concerts['adresse']; ?></td>
        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $concerts['prix']; ?></td>
        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $concerts['id_admin']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-table-cell">
					<form method="POST" action="modifier-concerts.php">
            <input type="submit" name="Modifier" value="MODIFIER" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1">
            <input type="hidden" value=<?PHP echo $concerts['id']; ?> name="id">
					</form>
				</td>
				<td class="u-border-1 u-border-grey-30 u-table-cell">
					<a href="supprimer-concerts.php?id=<?php echo $concerts['id']; ?>" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1">SUPPRIMER</a>
				</td>
			</tr>
			<?php
				}
			?>
      </tbody>
		</table>
          </div>
     
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3a6b"><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-6.png" class="u-logo-image u-logo-image-1">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-2" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-13.png" class="u-logo-image u-logo-image-2">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-3" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-9.png" class="u-logo-image u-logo-image-3">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-4" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-10.png" class="u-logo-image u-logo-image-4">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-5" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-14.png" class="u-logo-image u-logo-image-5">
        </a>
        <a href="https://nicepage.com" class="u-image u-logo u-image-6" data-image-width="436" data-image-height="572">
          <img src="images2/277826578_727709038594036_95418314771093071_n-removebg-preview-12.png" class="u-logo-image u-logo-image-6">
        </a>
      </div></footer>
  </body>
</html>