<?php

	include 'C:/xampp/htdocs/Configuration/config.php';
	include_once 'C:/xampp/htdocs/Configuration/Model/musique.php';
	class musiqueC {
		function affichermusique(){
			$sql="SELECT * FROM musique";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimermusique($id_du_morceaux){
			$sql="DELETE FROM musique WHERE id_du_morceaux=:id_du_morceaux";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_du_morceaux', $id_du_morceaux);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutermusique($musique){
		
			$sql="INSERT INTO musique(id_du_morceaux,nom_du_morceaux,nom_artiste,genre,id_genre) 
			VALUES(:id_du_morceaux,:nom_du_morceaux,:nom_artiste,:genre,:id_genre)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				
					'nom_du_morceaux' => $musique->get_nom_morceaux(),
					'nom_artiste' => $musique->get_nom_artiste(),
					'genre' => $musique->get_genre(),
					'id_genre'=> $musique->get_id_genre()
				
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperermusique($id_du_morceaux){
			$sql="SELECT * FROM musique WHERE id_du_morceaux = $id_du_morceaux";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$musique=$query->fetch();
				return $musique;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiermusique($musique, $id_du_morceaux){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE musique SET
						nom_du_morceaux=:nom_du_morceaux,
						nom_artiste=:nom_artiste,
						genre=:genre
					WHERE  id_du_morceaux =:id_du_morceaux"
				);
			$query->execute([
				
	
				'nom_du_morceaux' => $musique->get_nom_morceaux(),
				'nom_artiste' => $musique->get_nom_artiste(),
				'genre' => $musique->get_genre(),
				'id_du_morceaux'=>$id_du_morceaux
			]);
				echo $query->rowCount(). " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function Select_id_genre()
		{
	
			$sql="SELECT  id_genre  FROM  genre ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
	
	
			}
	
	
	
		}
		function rechercher($id_du_morceaux)
        {
            $requete = "SELECT * from musique  where id_du_morceaux like '%$id_du_morceaux%'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
	}


	
?>