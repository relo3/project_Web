<?php
    include_once '../model/ab.php';
    include_once '../controler/abC.php';
    
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
	
        isset($_POST["pack"])
    ) {
        if (
          
            !empty($_POST["date_debut"]) && 
			!empty($_POST['date_fin']) &&
            !empty($_POST["prix"]) && 
			
            !empty($_POST["pack"])
        ) {
            $abonnement = new Abonnement(
                $_POST['date_debut'],
				$_POST['date_fin'],
                $_POST['prix'], 
		    $_POST['pack']
            );
            $abonnementC->ajouterabonnement($abonnement);
            header('Location:abonnement_Front.php');
        }
     else if($_POST["prix"]===0)
     {   $error = "check date";}
        else
            $error = "Missing information";

        }

    
?>
















<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Entro</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout contineer_page">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/277826578_727709038594036_95418314771093071_n-removebg-preview.png" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
              
      
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     
</header>


<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>Abonnements premium </h2>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- upcoming -->
<div id="upcoming" class="upcoming">
  <div class="container-fluid padding_left3">
    <div class="row display_boxflex">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
       <div class="box_text">
          <div class="titlepage">
            <h2>Offre Pack</h2>
          </div>
          <p>Profitez de 3 mois de Premium pour 0,00 € 29,97 €
            Écoutez votre musique sans pub et hors connexion. Profitez dès aujourd'hui d'un accès gratuit jusqu'au 25 juillet 2022. Annulation possible à tout moment.</p><br>
            <p class="titlepage">Choisir votre Pack<p>
            <div class="titlepage">
             <dl>
            
    <dd >13 pour Gold</dd>
    <dd > 14 pour Silver</dd>
    <dd > 15 pour Bronze </dd>      
</dl>
             
    </div>
        
        
        
            <a  href="#Abonnement premium">Profiter</a>
        </div>
      </div> 
    
      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
         <div class="upcomimg">
           <figure><img src="images/up.jpg" alt="#"/></figure>
        </div>
          </div>
  </div>
    </div>
</div>
<!-- end upcoming -->


    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <form class="contact_bg" action="" method="POST"      >
            <div class="row">
              <div class="col-md-12">
                
              <div class="titlepage">
                  <h2 id="Abonnement premium">Abonnement Premium </h2>
                </div>
             
                
                <div class="col-md-12">
                <div id="error">
        <?php echo $error; ?>
       </div> 
    </div>
  
  
  
  
              
                <div class="col-md-12">
                  
        
    <label >date Debut</label>
                  
                  <input class="contactus" placeholder="Date debut" type="date" name="date_debut" id="date_debut" readonly="readonly"  value="2022-07-25">
                  <span id="error2"></span>
                </div>
                <div class="col-md-12">
                <label >date Fin</label>
                <input class="contactus" placeholder="Date fin" type="date" name="date_fin" id="date_fin"  onblur="VerifDate()">
                <span id="error1"></span>
                </div>
               
                <div class="col-md-12">
               
                <input class="contactus" placeholder="prix " type="number" name="prix" id="prix" readonly="readonly" >
                </div>
                <div class="col-md-12">
             
             
             
             
             
                <label > numero de pack
                         </label>
                            <select   name="pack" id="pack"  >

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
                      </select  >
         </div>
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <input type="submit" class="send" id="send" value="send"  >
                </div>
              </div>
            </div>
            </form>

            </div>
            <div class="col-md-12 border_top">
              <form class="news">
                <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '77.44' // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>            
</form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
          

              </div>
               <div class="container">
              <div class="copyright">
               
                  <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free  html Templates</a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="jquery.min.js"></script>
          <script src="popper.min.js"></script>
          <script src="bootstrap.bundle.min.js"></script>
          <script src="jquery-3.0.0.min.js"></script>
          <script src="plugin.js"></script>
          <!-- sidebar -->
          <script src="jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
         
         
         
         <!--CONTROLE SAisie Date-->
         
         <script>
            function VerifDate()
                                        {
                                            
                                                  
                                            
                                          
                                           
                                    
                                            var date=document.getElementById("date_fin");
            var date1=document.getElementById("date_debut");
            d2=new Date(date1.value);
            d=new Date(date.value);
            $error2 =document.getElementById("error1");
        
           var dd = String(d.getDate()).padStart(2, '0');
          var dd2= String(d2.getDate()).padStart(2, '0');
            var day1=parseInt(dd)
           var day2=parseInt(dd2)
            if(d2.getFullYear()>d.getFullYear())
            {
                console.log(d2);
               
            date.focus(); 
            $error2.innerText="la date inferieure a la date actuelle";
            document.getElementById("prix").value=0;
          
          
            }
            
            else if(d2.getFullYear()===d.getFullYear() && d2.getMonth()>d.getMonth())
            {
              
                
              $error2.innerText="la date inferieure a la date actuelle";

              date.focus(); 
              document.getElementById("prix").value=0;
     
           
            }
            else if(d2.getFullYear()===d.getFullYear() && d2.getMonth()===d.getMonth() && day2>day1)
            {
              
              $error2.innerText="la date inferieure a la date actuelle";
            date.focus(); 
            document.getElementById("prix").value=0;
        
            }
            
            else{$error2.innerText="" ;
                document.getElementById("prix").value=60;
               
                console.log(document.getElementById("prix").value)
            }
            
                                            
                                        }
         
          
          
          
          
          
          
          
                                        //////////////////////////////////////////
            /////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            /////////////////////////////////////////////////////////////
            //////////////////////////////////////////
            /////////////////Date 2//////////////////////////////////////////////////////////
            ///////////////////////////////////
            ///////////////////////////////
            //////////////////////////////////////////////////////////
     
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         </script>



</body>

</html>