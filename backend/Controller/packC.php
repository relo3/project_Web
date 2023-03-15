<?php
	include '../connexion_dataBase.php';
	include_once '../Model/pack.php';
	class packC {
		function afficherpack(){
			$sql="SELECT * FROM pack";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerpack($id){
			$sql="DELETE FROM pack WHERE id_pack=:id";
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
		function ajouterpack($pack){
			$sql="INSERT INTO pack (nom, offre) 
			VALUES (:nom, :offre)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				
					
					'nom' => $pack-> get_nom(),
					'offre' => $pack->get_offre()
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererpack($id){
			$sql="SELECT * from pack where id_pack=$id";
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
		
		function modifierpack($pack, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE pack set
					
						nom=:nom, 
						offre=:offre 
						
					where id_pack=:id_pack"
				);
			$query->execute([
				
					'nom' =>  $pack-> get_nom(),
					'offre' => $pack->get_offre(),
				'id_pack'=>$id
			]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
 function afficher_abonnement($id_pack) 
 {


	$sql="SELECT * FROM abonnement where pack=$id_pack";
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