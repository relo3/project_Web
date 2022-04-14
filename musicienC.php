<?php
	include '../config.php';
	include_once '../model/musicien.php';
	class musicienC {
		function affichermusicien(){
			$sql="SELECT * FROM musicien";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimermusicien($id){
			$sql="DELETE FROM musicien WHERE id=:id";
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
		function ajoutermusicien($musicien){
			$sql="INSERT INTO musicien (prenom,nom,revenu) 
			VALUES (:prenom,:nom,:revenu)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				
					'prenom'=> $musicien->get_prenom(),
					'nom' => $musicien->get_nom(),
					'revenu' => $musicien->get_revenu()
					
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperermusicien($id){
			$sql="SELECT * from musicien where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$musicien=$query->fetch();
				return $musicien;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiermusicien($musicien, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE musicien set
						prenom=:prenom, 
						nom=:nom, 
						revenu=:revenu
						
					where id=:id"
				);
			$query->execute([
				'prenom' => $musicien->get_prenom(),
				'nom' => $musicien->get_nom(),
				'revenu' => $musicien->get_revenu(),
				
				'id'=>$id
			]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}


	
?>