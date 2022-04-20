<?php
	include '../config.php';
	include_once '../Model/ticket.php';
	class ticketC {
		function afficherticket(){
			$sql="SELECT * FROM ticket";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerticket($Numtickets){
			$sql="DELETE FROM ticket WHERE Numtickets=:Numtickets";
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
		function ajouterticket($ticket){
			$sql="INSERT INTO ticket(Numtickets, Nom, Prenom, Email, dateConcert) 
			VALUES (:Numtickets,:Nom,:Prenom,:Email, :dateConcert)"; //$sql la demande sous forme de chaine contenant une requete sql qui doit etre exécutée
			$db = config::getConnexion(); //$db instance de la connexion à la base de données
			try{ //try essaie d'éxecuter un bout de code
				$query = $db->prepare($sql); //$query est est la nouvelle requete sql depuis la chaine
				$query->execute([
					'Numtickets' => $ticket->getNumtickets(),
					'Nom' => $ticket->getNom(),
					'Prenom' => $ticket->getPrenom(),
					'Email' => $ticket->getEmail(),
					'dateConcert' => $ticket->getdateConcert()
				]);	//Execution de la requete sql
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage(); //en cas d'erreurs inattendues, retour du message d'erreur
			}			
		}
		function recupererticket($Numticket){
			$sql="SELECT * from ticket where Numtickets=$Numticket";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$ticket=$query->fetch();//fetch sert à retourner l'élément
				return $ticket;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierticket($ticket, $Numticket){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE ticket SET 
						Nom= :Nom, 
						Prenom= :Prenom, 
						
						Email= :Email, 
						dateConcert= :dateConcert
					WHERE Numtickets= :Numtickets'
				);
				$query->execute([
					'Nom' => $ticket->getNom(),
					'Prenom' => $ticket->getPrenom(),
				
					'Email' => $ticket->getEmail(),
					'dateConcert' => $ticket->getdateConcert(),
					'Numtickets' => $Numtickets
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>