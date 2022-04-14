<?php
	include 'config.php';
	include_once 'Model/Adherent.php';
	class ticketsC {
		function afficheradherent(){
			$sql="SELECT * FROM bibliotheque";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimeradherent($Numtickets){
			$sql="DELETE FROM tickts WHERE Numtickets=:Numtickets";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Numtickets', $Numtickets);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterAdherent($tickets){
			$sql="INSERT INTO tickets (Numtickets, Nom, Prenom,Email, DateConcert) 
			VALUES (:Numtickets,:Nom,:Prenom,:Email,:DateConcert)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'Numtickets' => $tickets->getNumtickets(),
					'Nom' => $tickets->getNom(),
					'Email'=>$tickets->getEmail(),
					'Prenom' => $tickets->getPrenom(),
					'DateConcert' => $tickets->getDateConcert()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereradherent($Numtickets){
			$sql="SELECT * from tickets where Numtickets=$Numtickets";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adherent=$query->fetch();
				return $tickets;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieradherent($tickets, $numtickets){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE adherent SET 
						Nom= :Nom, 
						Prenom= :Prenom, 
						 
						Email= :Email, 
						DateConcert= :DateConcert
					WHERE Numtickets= :Numtickets'
				);
				$query->execute([
					'Nom' => $tickets->getNom(),
					'Prenom' => $tickets->getPrenom(),
					
					'Email' => $tickets->getEmail(),
					'DateConcert' => $tickets->getDateConcert(),
					'Numtickets' => $numtickets->getNumtickets()
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>