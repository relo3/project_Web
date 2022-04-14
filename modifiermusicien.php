<?php
    include_once '../model/musicien.php';
    include_once '../controller/musicienC.php';

    $error = "";

    // create adherent
    $musicien = null;

    // create an instance of the controller
    $musicienC = new musicienC();
    if (
        
        isset($_POST["prenom"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["revenu"]) &&
		
        isset($_POST["id"]) 
        
    ) {
        if (
            
            !empty($_POST["prenom"]) && 
			!empty($_POST['nom']) &&
            !empty($_POST["revenu"]) && 
			
            !empty($_POST["id"]) 
        ) {
            $musicien = new musicien(
                $_POST['prenom'],
				$_POST['nom'],
                $_POST['revenu']
				
              
            );
            $musicienC->modifiermusicien($musicien, $_POST["id"]);
            header('Location:afficherlistemusicien.php');
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
                        <h2 class="form-title">modifier le musicien</h2>
                        <hr>
        
                        <?php
			if (isset($_POST['id'])){
				$musicien = $musicienC->recuperermusicien($_POST['id']);
				
		   ?>
			
		
                        
                        
                        
         <form action="" method="POST" class="register-form" id="register-form">
         <div class="form-group">
                                <label for="identifiant"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id" id="id" placeholder="id"  value="<?php echo $musicien['id']; ?>"   />
                            </div>               
         
              <div class="form-group">
                                <label for="prenom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="prenom" id="prenom" placeholder="prenom"  value="<?php echo $musicien['prenom']; ?>"   />
                            </div>
                            <div class="form-group">
                                <label for="nom"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="nom" id="nom" placeholder="nom"   value="<?php echo $musicien['nom']; ?>"        />
                            </div>
                            <div class="form-group">
                                <label for="revenu"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="revenu" id="revenu" placeholder="revenu"   value="<?php echo $musicien['revenu']; ?>"              />
                            </div>
                            
                          
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="modifier"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="bolbol.jpg" alt="sing up image"></figure>
                        <a href="afficherlistemusicien" class="signup-image-link"> afficher liste des musicien </a>
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
                        


