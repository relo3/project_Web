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
        isset($_POST["type"]) 
		
    ) {
        if (
          
            !empty($_POST["nom"]) && 
			!empty($_POST['capacite']) &&
            !empty($_POST["type"]) 
			
        ) {
            $abonnement = new Abonnement(
                $_POST['nom'],
				$_POST['capacite'],
                $_POST['type']
				
            );
            $abonnementC->ajouterabonnement($abonnement);
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
                        <h2 class="form-title">ajouter lieux</h2>
                        <form action="" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="nom" placeholder="nom"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="capacite" id="capacite" placeholder="capacite"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="type" id="type" placeholder="type"/>
                            </div>
                           
                          
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="valider"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="font_guitar.png" alt="sing up image"></figure>
                        <a href="afficherListeAbonnements.php" class="signup-image-link"><input type="submit" name="signup-image-link" class="form-submit" value="liste des lieux"/> </a>
                    </div>
                </div>
            </div>
        </section>


    <!-- JS -->
    <script src="jquery.min.js"></script>
    <script src="main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
                        
