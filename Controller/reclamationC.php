<?php
	include '../config.php';
	include_once '../Model/reclamation.php';
	class reclamationC {
		function afficherRec(){
			$sql="SELECT * FROM rec";
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
			$sql="INSERT INTO rec (Numtickets,contenu,dateConcert)
			VALUES (:Numtickets,:contenu,:dateConcert)"; //$sql la demande sous forme de chaine contenant une requete sql qui doit etre exécutée
			$db = config::getConnexion(); //$db instance de la connexion à la base de données
			try{ //try essaie d'éxecuter un bout de code
				$query = $db->prepare($sql); //$query est est la nouvelle requete sql depuis la chaine
				$query->execute([
					'Numtickets' => $rec->getNumtickets(),
					'contenu'=> $rec->getReclamation(),
					'dateConcert'=>$rec->getdateConcert(),
				]);	//Execution de la requete sql
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage(); //en cas d'erreurs inattendues, retour du message d'erreur
			}			
		}
		function supprimerticket($Numtickets){
			$sql="DELETE FROM rec WHERE Numtickets=:Numtickets";
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

	}
?>