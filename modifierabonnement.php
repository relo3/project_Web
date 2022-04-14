<?php
    include_once '../model/abonnement.php';
    include_once '../controller/abonnementC.php';

    $error = "";

    // create adherent
    $abonnement = null;

    // create an instance of the controller
    $abonnementC = new AbonnementC();
    if (
        
        isset($_POST["nom"]) &&
		isset($_POST["capacite"]) &&		
        isset($_POST["type"]) &&
		
        isset($_POST["id"]) 
        
    ) {
        if (
            
            !empty($_POST["nom"]) && 
			!empty($_POST['capacite']) &&
            !empty($_POST["type"]) && 
			
            !empty($_POST["id"]) 
        ) {
            $abonnement = new Abonnement(
                $_POST['nom'],
				$_POST['capacite'],
                $_POST['type']
				
              
            );
            $abonnementC->modifierabonnement($abonnement, $_POST["id"]);
            header('Location:afficherListeAbonnements.php');
        }
        else
            $error = "Missing information";
    
        }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
 <!-- Font Icon -->
    <link rel="stylesheet" href="material-design-iconic-font.css">

    <!-- Main css -->
    <link rel="stylesheet" href="stl.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="material-design-iconic-font.css">
    <link id="pagestyle" href="material-dashboard.css?v=3.0.2" rel="stylesheet" />
    <!-- Main css -->
    <link rel="stylesheet" href="stl.css">
</head>
<body>

   
<div id="error">
            <?php echo $error; ?>
        </div>


<div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="btn bg-gradient-primary mt-4 w-100">modifier le lieux </h2>
                        <hr>
        
                        <?php
			if (isset($_POST['id'])){
				$abonnement = $abonnementC->recupererabonnement($_POST['id']);
				
		   ?>
			
		
                        
                        
                        
         <form action="" method="POST" class="register-form" id="register-form">
         <div class="form-group">
                                <label for="identifiant"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id" id="id" placeholder="id"  value="<?php echo $abonnement['id']; ?>"   />
                            </div>               
         
              <div class="form-group">
                                <label for="nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="nom" placeholder="nom"  value="<?php echo $abonnement['nom']; ?>"   />
                            </div>
                            <div class="form-group">
                                <label for="capacite"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="capacite" id="capacite" placeholder="capacité"   value="<?php echo $abonnement['capacite']; ?>"        />
                            </div>
                            <div class="form-group">
                                <label for="price"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="type" id="type" placeholder="type"   value="<?php echo $abonnement['type']; ?>"              />
                            </div>
                            
                          
                           
                                <input class="btn bg-gradient-primary mt-4 w-100" type="submit" name="signup" id="signup" class="form-submit" value="modifier"/>
                            
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="concert.jpg" border="7" alt="sing up image"></figure>
                         <figure><img src="bg-2.jpg" border="7" alt="sing up image"></figure>
                         <figure><img src="im.jpg" border="7" alt="sing up image"></figure>
                        <a href="afficherListeAbonnements.php" class="btn bg-gradient-primary mt-4 w-100">  <b>   afficherListeAbonnements</b> </a>
                    </div>
                </div>
            </div>
        </section>
        <?php
		}
		?>

    <!-- JS -->
    <script src="jquery.min.js"></script>
    <script src="main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
                        


