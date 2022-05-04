<?php
	include '../config.php';
	include_once '../Model/reclamation.php';
	class reclamationC {
		function afficherRec(){
			$sql="SELECT * FROM reclamations";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste->fetchall();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
        function mesRecs($idUser){
            $sql="SELECT * FROM reclamations WHERE idUser=$idUser";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }
		
		function ajouterRec($rec){
			$sql="INSERT INTO reclamations (idTicket,contenu,idUser)
			VALUES (:idTicket,:contenu,:idUser)"; //$sql la demande sous forme de chaine contenant une requete sql qui doit etre exécutée
			$db = config::getConnexion(); //$db instance de la connexion à la base de données
			try{ //try essaie d'éxecuter un bout de code
				$query = $db->prepare($sql); //$query est est la nouvelle requete sql depuis la chaine
				$query->execute([
					'idTicket' => $rec->getidTicket(),
					'contenu'=> $rec->getContenu(),
					'idUser'=>$rec->getidUser()
				]);	//Execution de la requete sql
                return "success";
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage(); //en cas d'erreurs inattendues, retour du message d'erreur
                return $e->getMessage();
			}			
		}
		function supprimerticket($id){
			$sql="DELETE FROM reclamations WHERE id=:id";
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

	}
?>