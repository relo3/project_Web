


<?php 
require_once 'packC.php';
$packC= new  packC();
$packs=$packC-> afficherpack();
//echo $_GET["pack"];

/*if( isset($_POST['search'])){

    $list=$packC-> afficher_abonnement(15); 
}*/
?>


<html>

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
      <div class="navbar">
      <a class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1"  href="afficherListeAbonnements.php">retour page de Abonnement</a>
</div>
      <section class="u-align-center u-clearfix u-section-1" id="sec-62ee">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Recherche  Abonnement<br>
        </h1>
        <div class="u-form u-form-1">




















































<form action="" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
<div class="u-form-group u-label-left u-form-group-1">
<label>Search :</label>
<select name="pack" id="pack" >
    <?php foreach($packs as $pack){
        ?>
        <option 
        value="<?= $pack['id_pack'] ?>"
        <?php if(isset($_POST['search']) && $pack["id_pack"]==$_POST["pack"]){ ?>
            selected
            <?php } ?>
            
            
            >        
<?php echo  $pack['id_pack'] ?>
       
<?php if( isset($_POST['search']) && $pack["id_pack"]==$_POST["pack"]){

$list=$packC-> afficher_abonnement($pack['id_pack']);} 

?>


</option>
        <?php } ?>
        </select>
        <input type="submit" value="search" name="search"  class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-black u-text-black u-text-hover-white u-btn-1" >
    </div>
       
        <div class="u-form-group u-form-name u-label-left u-form-group-2">
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
                <th class="u-border-1 u-border-black u-table-cell">date debut</th>
     
                <th class="u-border-1 u-border-black u-table-cell">date_fin</th>
               
                <th class="u-border-1 u-border-black u-table-cell">Prix</th>
          
              </tr>
            </thead>
<tbody  class="u-table-body">


 <?php if(isset($_POST['search'])) { ?>
  
        <?php
       foreach(  $list as $abonnement) {
           ?>
        	<tr style="height: 100px;">
            <td class="u-border-1 u-border-grey-30 u-table-cell"> <?php echo  $abonnement['id'] ?>    </td>
            <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $abonnement['date_debut'] ?> </td>
          <td class="u-border-1 u-border-grey-30 u-table-cell"> <?php echo  $abonnement['date_fin'] ?> </td>
          <td class="u-border-1 u-border-grey-30 u-table-cell"> <?php echo  $abonnement['prix'] ?>     </td>
        
       </tr>

  <?php 
       }
       ?>
   <?php 
       }
       ?>
</tbody>
		</table>
     
    </div>


</div>   
      
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </form>
        
</div>
      </div>
    </section>








        </body>
</html>