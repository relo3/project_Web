<?php
	include 'connexion_dataBase.php';
	include_once 'abonnement.php';
	class AbonnementC {
		function afficherabonnement(){
			$sql="SELECT * FROM abonnement";
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
			$sql="DELETE FROM abonnement WHERE id=:id";
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
			$sql="INSERT INTO abonnement (date_debut, date_fin, prix,pack) 
			VALUES (:date_debut,:date_fin, :prix,:pack)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				
					'date_debut' => $abonnement->get_dateDebut(),
					'date_fin' => $abonnement->get_dateFin(),
					'prix' => $abonnement->get_Prix(),
					'pack'=>$abonnement->get_pack()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererabonnement($id){
			$sql="SELECT * from abonnement where id=$id";
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
					"UPDATE abonnement set
						date_debut=:date_debut, 
						date_fin=:date_fin, 
						prix=:prix, 
						pack=:pack
					where id=:id"
				);
			$query->execute([
				'date_debut' => $abonnement->get_dateDebut(),
				'date_fin' => $abonnement->get_dateFin(),
				'prix' => $abonnement->get_Prix(),
			
				'pack'=>$abonnement->get_pack(),
				'id'=>$id
			]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	function Select_id_Pack()
	{

		$sql="SELECT  id_pack FROM  pack";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());


		}

}


function tri_Prix()
{

	$sql="SELECT  id,date_debut,date_fin,prix       FROM abonnement ORDER BY prix DESC  ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());


		}











}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}


	
?>