<?php
	include 'C:\xampp\htdocs\Configuration\config.php';
	include_once 'C:\xampp\htdocs\Configuration\Model\genre.php';
	class genreC {
		function affichergenre(){
			$sql="SELECT * FROM genre";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimergenre($id_genre){
			$sql="DELETE FROM genre WHERE id_genre=:id_genre";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_genre', $id_genre);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutergenre($genre){
			$sql="INSERT INTO genre (id_genre,genre,tag) 
			VALUES (:id_genre,:genre,:tag)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_genre' => $genre->get_id_genre(),
					'genre' => $genre->get_genre(),
					'tag' => $genre->get_tag()
					
				
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperergenre($id_genre){
			$sql="SELECT * FROM genre WHERE id_genre=$id_genre";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$genre=$query->fetch();
				return $genre;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiergenre($genre,$id_genre){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE genre SET
						
						tag=:tag,
						genre=:genre
					WHERE  id_genre=:id_genre "
				);
			$query->execute([
				
	
				'genre' => $genre->get_genre(),
				'tag' => $genre->get_tag(),
				'id_genre'=>$id_genre
			]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}


	
?>