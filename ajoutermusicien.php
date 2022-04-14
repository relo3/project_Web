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
        isset($_POST["revenu"]) 
		
    ) {
        if (
          
            !empty($_POST["prenom"]) && 
			!empty($_POST['nom']) &&
            !empty($_POST["revenu"]) 
			
        ) {
            $musicien = new musicien(
                $_POST['prenom'],
				$_POST['nom'],
                $_POST['revenu']
				
            );
            $musicienC->ajoutermusicien($musicien);
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
    <!-- Font Icon -->
    <link rel="stylesheet" href="material-design-iconic-font.css">
    <link id="pagestyle" href="material-dashboard.css?v=3.0.2" rel="stylesheet" />
    <!-- Main css -->
    <link rel="stylesheet" href="stl.css">
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
                        <h2 class="btn bg-gradient-primary mt-4 w-100">ajouter un musicien</h2>
                        <form action="" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="prenom" id="prenom" placeholder="prenom"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="nom" id="nom" placeholder="nom"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="revenu" id="revenu" placeholder="revenu"/>
                            </div>
                           
                          
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="inscription"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="font_guitar.png"  border="6" alt="sing up image"></figure>
                        <a href="afficherlistemusicien.php" class="signup-image-link"><input type="submit" name="signup-image-link" class="form-submit" value="liste des musiciens"/> </a>
                    </div>
                </div>
            </div>
        </section>


    <!-- JS -->
    <script src="jquery.min.js"></script>
    <script src="main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
                        
