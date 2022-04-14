<?php
	include '../config.php';
	include_once '../model/abonnement.php';
	class AbonnementC {
		function afficherabonnement(){
			$sql="SELECT * FROM lieux";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerabonnement($id){
			$sql="DELETE FROM lieux WHERE id=:id";
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
		function ajouterabonnement($abonnement){
			$sql="INSERT INTO lieux (nom, capacite,type) 
			VALUES (:nom,:capacite, :type)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				
					'nom' => $abonnement->get_nom(),
					'capacite' => $abonnement->get_capacite(),
					'type' => $abonnement->get_type(),
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererabonnement($id){
			$sql="SELECT * from lieux where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$abonnement=$query->fetch();
				return $abonnement;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierabonnement($abonnement, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE lieux set
						nom=:nom, 
						capacite=:capacite, 
						type=:type
						
					where id=:id"
				);
			$query->execute([
				'nom' => $abonnement->get_nom(),
				'capacite' => $abonnement->get_capacite(),
				'type' => $abonnement->get_type(),
				
				'id'=>$id
			]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}


	
?>