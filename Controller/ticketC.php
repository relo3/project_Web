<?php
	include '../config.php';
	include_once '../Model/ticket.php';
	class ticketC {
		function afficherticket(){
			$sql="SELECT * FROM tickets";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste->fetchAll();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
        function mesTickets($idUser){
            $sql="SELECT * FROM tickets WHERE idUser=$idUser";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }
		function supprimerticket($id){
			$sql="DELETE FROM tickets WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterticket($ticket){
			$sql="INSERT INTO tickets(Nom, Prenom, Email, dateConcert,idUser,paye) 
			VALUES (:Nom,:Prenom,:Email, :dateConcert,:idUser,:paye)"; //$sql la demande sous forme de chaine contenant une requete sql qui doit etre exécutée
			$db = config::getConnexion(); //$db instance de la connexion à la base de données
			try{ //try essaie d'éxecuter un bout de code
				$query = $db->prepare($sql); //$query est est la nouvelle requete sql depuis la chaine
				$query->execute([
					'Nom' => $ticket->getNom(),
					'Prenom' => $ticket->getPrenom(),
					'Email' => $ticket->getEmail(),
					'dateConcert' => $ticket->getdateConcert(),
					'idUser'=>$ticket->getidUser(),
                    'paye'=>$ticket->getpaye()
				]);	//Execution de la requete sql
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage(); //en cas d'erreurs inattendues, retour du message d'erreur
			}			
		}
		function recupererticket($id){
			$sql="SELECT * from tickets where id=$id";
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
		
		function modifierticket($newDate,$id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE tickets SET 
						dateConcert= :dateConcert
					WHERE id=:id'
				);
				$query->execute([
					'dateConcert' => $newDate,
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>