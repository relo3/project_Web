<?php
    include_once '../Model/Adherent.php';
    include_once '../Controller/AdherentC.php';

    $error = "";

    // create adherent
    $tickets = null;

    // create an instance of the controller
    $ticketsC = new ticketsC();
    if (
        isset($_POST["numtickets"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
	
        isset($_POST["email"]) && 
        isset($_POST["dateConcert"])
    ) {
        if (
            !empty($_POST["numtickets"]) && 
			!empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
			
            !empty($_POST["email"]) && 
            !empty($_POST["dateConcert"])
        ) {
            $adherent = new Adherent(
                $_POST['numtickets'],
				$_POST['nom'],
                $_POST['prenom'], 
			
                $_POST['email'],
                $_POST['dateConcert']
            );
            $ticketsC->modifieradherent($tickets, $_POST["numtickets"]);
            header('Location:afficherListeAdherents.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeAdherents.php">Retour à la liste des tickets</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['Numtickets'])){
				$tickets = $ticketsC->recupereradherent($_POST['Numtickets']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="numtickets">Numéro tickets:
                        </label>
                    </td>
                    <td><input type="text" name="numtickets" id="numtickets" value="<?php echo $tickets['Numtickets']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $tickets['Nom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" value="<?php echo $tickets['Prenom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                   
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" value="<?php echo $tickets['Email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dateConcert">Date concert:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="dateConcert" id="dateConcert" value="<?php echo $tickets['DateInscription']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>